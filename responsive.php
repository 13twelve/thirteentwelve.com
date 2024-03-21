<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsive</title>
</head>
<body>
  <pre>
  <?php

    $feConfig = [
      'structure' => [
        'breakpoints' => [
          'sm' => '0',
          'md' => '600px',
          'lg' => '900px',
          'xl' => '1200px',
          'xxl' => '1500px',
          'xxxl' => '1944px',
        ],
        'columns' => [
          'sm' => '4',
          'md' => '8',
          'lg' => '12',
          'xl' => '12',
          'xxl' => '12',
          'xxxl' => '12',
        ],
        'container' => [
          'sm' => 'auto',
          'md' => 'auto',
          'lg' => 'auto',
          'xl' => 'auto',
          'xxl' => 'auto',
          'xxxl' => '1800px',
        ],
        'gutters' => [
          'inner' => [
            'sm' => '20px',
            'md' => '36px',
            'lg' => '36px',
            'xl' => '48px',
            'xxl' => '60px',
            'xxxl' => '60px',
          ],
          'outer' => [
            'sm' => '24px',
            'md' => '28px',
            'lg' => '48px',
            'xl' => '60px',
            'xxl' => '72px',
            'xxxl' => '0px',
          ],
        ],
      ],
      // would also contain colors, typography etc.
    ];

    function dd($data){
      echo '<pre>';
        die(var_dump($data));
      echo '</pre>';
    }

    // ---------------------------------------------------------------------------

    function responsiveImageSizes($sizes, $feConfig = [], $relativeUnits = true) {
        // Doc: https://github.com/area17/a17-behaviors/wiki/responsiveImageSizes
        if (!$feConfig['structure'] || !$feConfig['structure']['columns'] || !$feConfig['structure']['container'] || !$feConfig['structure']['gutters'] || !$feConfig['structure']['gutters']['inner']) {
          return '100vw';
        }
        // convert to rems
        $remCalc = function($px) {
          $rem = floatval($px) / 16;
          return "{$rem}rem";
        };
        //
        $getUnitValue = function($val) {
          $result = [];
          if (gettype($val) === 'integer') {
            $result['value'] = $val;
          }
          if (gettype($val) === 'string') {
            if (strpos($val, 'calc') > -1) {
              $result['calc'] = $val;
            } else {
              $result['value'] = floatval($val);
              $result['unit'] = trim(substr($val, strlen(''.$result['value'])));
              $result['unit'] = isset($result['unit']) ? $result['unit'] : null;
            }
          }
          return $result;
        };
        // parse CSS type data from config
        $cssColumns = $feConfig['structure']['columns'];
        $cssContainerWidths = $feConfig['structure']['container'];
        $cssInnerGutters = $feConfig['structure']['gutters']['inner'];
        // $sizesSet is going to be a complete list of breakpoints with null values
        // that we'll later update to fill in size at bp
        $sizesSet = [];
        // size media query prefixes (except the smallest breakpoint)
        $breakpointsArr = array_map(fn($val) => floatval($val), $feConfig['structure']['breakpoints']);
        asort($breakpointsArr);
        $mqPrefixes = [];
        foreach ($breakpointsArr as $name=>$size) {
          $size = $relativeUnits ? $remCalc($size) : "{$size}px";
          $mqPrefixes[$name] = (floatval($size) > 0) ? "(min-width: {$size})" : '';
          $sizesSet[$name] = null;
        };
        // generate $sizes
        if (isset($sizes)) {
            // if a string for $sizes is passed through
            if (gettype($sizes) === 'string') {
                return $sizes;
            }
            // if an object of $sizes is passed through, convert to an array
            if (is_array($sizes)) {
                // merge the objects
                $sizesSet = array_merge((array) $sizesSet, (array) $sizes);
                // set up to fill in ALL values for ALL bps
                $sizesSetKeys = array_keys($sizesSet);
                $lastKnownSize = '';
                $sizesArr = [];
                // fill in any missing BP values
                // if user sends { "lg": 3 } or { "sm": 2, "lg": 3 }
                // this fills out the missing "sm", "md", "xl" values
                // incase the amount of columns changes per breakpoint
                // but the column spanning doesn't
                foreach($sizesSetKeys as $index=>$bp) {
                  if (gettype($sizesSet[$bp]) === 'NULL') {
                    if ($index === 0) {
                      $sizesSet[$bp] = '100vw';
                      $lastKnownSize = '100vw';
                    } else {
                      $sizesSet[$bp] = $lastKnownSize;
                    }
                  } else {
                    $lastKnownSize = $sizesSet[$bp];
                  }
                }

                foreach($sizesSetKeys as $index=>$bp) {
                  // calculate size string for bp
                  $bpSizeStr = '';
                  $sizeAtBreakpoint = $getUnitValue($sizesSet[$bp]);
                  $cssColumnsAtBreakpoint = $cssColumns[$bp];
                  $colWidth = $cssContainerWidths[$bp] === 'auto' ? 'auto' : floatval($cssContainerWidths[$bp]);

                  if (isset($sizeAtBreakpoint['calc'])) {
                    // if a calc has been passed
                    $bpSizeStr = $sizeAtBreakpoint['calc'];
                  } else if (isset($sizeAtBreakpoint['value']) && gettype($sizeAtBreakpoint['value']) !== 'integer' && gettype($sizeAtBreakpoint['value']) !== 'double') {
                    // no number found, perhaps a "calc()" or something else was passed
                    $bpSizeStr = $sizeAtBreakpoint['value'] || '100vw';
                  } else if (isset($sizeAtBreakpoint['unit'])) {
                    // has some other unit
                    $bpSizeStr = "{$sizeAtBreakpoint['value']}{$sizeAtBreakpoint['unit']}";
                    // px values will be converted to rem later
                  } else if ($colWidth !== 'auto') {
                    // calculate based on how much of main col width wide
                    $innerGutter = floatval($cssInnerGutters[$bp]);
                    $px = ((($colWidth - ($innerGutter * ($cssColumnsAtBreakpoint - 1))) / $cssColumnsAtBreakpoint) * $sizeAtBreakpoint['value']) + (($sizeAtBreakpoint['value'] - 1) * $innerGutter);
                    $px = (int) round($px * 100) / 100;
                    $bpSizeStr = "{$px}px"; // will be converted to rem later
                  } else {
                    // else calculate one based on %/vw
                    $percent = ($sizeAtBreakpoint['value'] / $cssColumnsAtBreakpoint) * 100;
                    $percent = (int) round($percent * 100) / 100;
                    $bpSizeStr = $percent.'vw';
                  }

                  $sizesSet[$bp] = $bpSizeStr;
                };

                // don't add sequential duplicate $sizes so we have the most minimal output possible
                $lastSize = -1;
                foreach ($sizesSet as $bp => $size) {
                  if ($size != $lastSize) {
                    $sizesArr[$bp] = $size;
                  }
                  $lastSize = $size;
                }

                // set $sizes to the newly made $sizes array, so that it can be converted to a string for output below
                $sizes = $sizesArr;

                // convert array to string and return
                // NB: if an object was passed, its been converted to an array for final output

                // make final size string for output
                $sizesStr = '';
                $index = 0;
                foreach(array_reverse($sizes) as $bp=>$size) {
                  if ($relativeUnits && isset($getUnitValue($size)['unit']) && $getUnitValue($size)['unit'] === 'px') {
                    $size = $remCalc($size);
                  }
                  $sizesStr .= $index > 0 ? ', ' : '';
                  $sizesStr .= strlen($mqPrefixes[$bp]) ? $mqPrefixes[$bp].' ' : '';
                  $sizesStr .= $size;
                  $index++;
                };
                // return generated string
                return $sizesStr;
            }

            // catch other entries and do something sensible
            return json_encode($sizes);
        }
        // default return if all else fails
        return '100vw';
    }

    // ---------------------------------------------------------------------------

    function responsiveImageSrcset($url, $options = []) {
      // Doc: https://github.com/area17/a17-behaviors/wiki/responsiveImageSrcset
      if (!$url) {
        return '';
      }

      $opts = [
        'sizes' => [200,400,600,1000,1600,2200,2800],
        'overwrite' => true,
        'defaultParams' => true,
        ...$options,
      ];

      if (isset($opts['params'])) {
        unset($opts['params']);
      }
      $opts['params'] = $opts['defaultParams'] === false ? [
        ...($options['params'] ?? []),
      ] : [
        'q' => 75,
        'fm' => 'auto',
        'auto' => 'compress,format',
        'fit' => 'min',
        ...($options['params'] ?? []),
      ];

      $srcset = '';
      $imgUrl = strtok($url, '?');
      $params = [];
      if (gettype(parse_url($url, PHP_URL_QUERY)) !== 'NULL') {
        parse_str(parse_url($url, PHP_URL_QUERY), $params);
      }
      $sizesLength = count($opts['sizes']);

      if ($opts['overwrite']) {
        $params = [
          ...$params,
          ...$opts['params'],
        ];
      } else {
        $params = [
          ...$opts['params'],
          ...$params,
        ];
      }

      foreach($opts['sizes'] as $index=>$size) {
        $params['w'] = $size;
        $params['width'] = $size;
        $sizeParams = http_build_query($params);
        $comma = $index < $sizesLength - 1 ? ', ' : '';
        $srcset .= "{$imgUrl}?{$sizeParams} {$size}w{$comma}";
      };

      return $srcset;
    };

    // ---------------------------------------------------------------------------

    echo "\n";
    echo "\n";

    echo "responsiveImageSizes";

    echo "\n";
    echo "\n";

    $sizes = responsiveImageSizes([
      "sm" => "100vw",
      "md" => 4,
      "lg" => 7,
      "xl" => "80%",
      "xxl" => "300px"
    ], $feConfig);
    $expected = '(min-width: 93.75rem) 18.75rem, (min-width: 75rem) 80%, (min-width: 56.25rem) 58.33vw, (min-width: 37.5rem) 50vw, 100vw';

    echo "generates a sizes string with rem units (1) ".($sizes === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    $sizes = responsiveImageSizes([
      "sm" => "100vw",
      "md" => 4,
      "lg" => "calc(100vw - 20px)",
      "xl" => "80%",
      "xxl" => "300px"
    ], $feConfig);

    $expected = '(min-width: 93.75rem) 18.75rem, (min-width: 75rem) 80%, (min-width: 56.25rem) calc(100vw - 20px), (min-width: 37.5rem) 50vw, 100vw';

    echo "generates a sizes string with rem units (2) ".($sizes === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    $sizes = responsiveImageSizes([
      "sm" => 2,
    ], $feConfig);
    $expected = '(min-width: 121.5rem) 15.625rem, (min-width: 56.25rem) 16.67vw, (min-width: 37.5rem) 25vw, 50vw';

    echo "generates a sizes string with rem units (3) ".($sizes === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    // --

    $sizes = responsiveImageSizes([
      "sm" => "100vw",
      "md" => 4,
      "lg" => 7,
      "xl" => "80%",
      "xxl" => "300px"
    ], $feConfig, false);
    $expected = '(min-width: 1500px) 300px, (min-width: 1200px) 80%, (min-width: 900px) 58.33vw, (min-width: 600px) 50vw, 100vw';

    echo "generates a sizes string with pixel units (1) ".($sizes === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    $sizes = responsiveImageSizes([
      "sm" => 2,
    ], $feConfig, false);
    $expected = '(min-width: 1944px) 250px, (min-width: 900px) 16.67vw, (min-width: 600px) 25vw, 50vw';

    echo "generates a sizes string with pixel units (2) ".($sizes === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    // --

    $sizes = responsiveImageSizes([
      "lg" => 2,
    ], $feConfig);
    $expected = '(min-width: 121.5rem) 15.625rem, (min-width: 56.25rem) 16.67vw, 100vw';

    echo "if no bp passed, defaults to 100vw (1) ".($sizes === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    $sizes = responsiveImageSizes([], $feConfig);
    $expected = '100vw';

    echo "if no bp passed, defaults to 100vw (2) ".($sizes === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    // ---

    $sizes = responsiveImageSizes('100vw', $feConfig);
    $expected = '100vw';

    echo "returns a passed string (1) ".($sizes === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    $sizes = responsiveImageSizes('calc(100vw - 20px)', $feConfig);
    $expected = 'calc(100vw - 20px)';

    echo "returns a passed string (2) ".($sizes === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    //--

    $sizes = responsiveImageSizes([
      'sm' => '100vw',
      'md' => '50vw',
      'lg' => '58.33vw',
      'xl' => '80%',
      'xxl' => '300px'
    ], $feConfig);
    $expected = '(min-width: 93.75rem) 18.75rem, (min-width: 75rem) 80%, (min-width: 56.25rem) 58.33vw, (min-width: 37.5rem) 50vw, 100vw';

    echo "converts a passed array ".($sizes === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    echo "\n";

    echo "// ---------------------------------------------------------------------------";

    echo "\n";
    echo "\n";

    echo "responsiveImageSrcset";

    echo "\n";
    echo "\n";

    $baseImgUrl = 'https://area17.imgix.net/0000/image.jpg';
    $complexImgUrl = 'https://area17.imgix.net/0000/image.jpg?px=10&q=90&w=1480';

    $srcset = responsiveImageSrcset($baseImgUrl);
    $expected = 'https://area17.imgix.net/0000/image.jpg?q=75&fm=auto&auto=compress%2Cformat&fit=min&w=200&width=200 200w, https://area17.imgix.net/0000/image.jpg?q=75&fm=auto&auto=compress%2Cformat&fit=min&w=400&width=400 400w, https://area17.imgix.net/0000/image.jpg?q=75&fm=auto&auto=compress%2Cformat&fit=min&w=600&width=600 600w, https://area17.imgix.net/0000/image.jpg?q=75&fm=auto&auto=compress%2Cformat&fit=min&w=1000&width=1000 1000w, https://area17.imgix.net/0000/image.jpg?q=75&fm=auto&auto=compress%2Cformat&fit=min&w=1600&width=1600 1600w, https://area17.imgix.net/0000/image.jpg?q=75&fm=auto&auto=compress%2Cformat&fit=min&w=2200&width=2200 2200w, https://area17.imgix.net/0000/image.jpg?q=75&fm=auto&auto=compress%2Cformat&fit=min&w=2800&width=2800 2800w';

    echo "srcset from basic url, using defaults ".($srcset === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    // ---

    $srcset = responsiveImageSrcset($complexImgUrl);
    $expected = 'https://area17.imgix.net/0000/image.jpg?px=10&q=75&w=200&fm=auto&auto=compress%2Cformat&fit=min&width=200 200w, https://area17.imgix.net/0000/image.jpg?px=10&q=75&w=400&fm=auto&auto=compress%2Cformat&fit=min&width=400 400w, https://area17.imgix.net/0000/image.jpg?px=10&q=75&w=600&fm=auto&auto=compress%2Cformat&fit=min&width=600 600w, https://area17.imgix.net/0000/image.jpg?px=10&q=75&w=1000&fm=auto&auto=compress%2Cformat&fit=min&width=1000 1000w, https://area17.imgix.net/0000/image.jpg?px=10&q=75&w=1600&fm=auto&auto=compress%2Cformat&fit=min&width=1600 1600w, https://area17.imgix.net/0000/image.jpg?px=10&q=75&w=2200&fm=auto&auto=compress%2Cformat&fit=min&width=2200 2200w, https://area17.imgix.net/0000/image.jpg?px=10&q=75&w=2800&fm=auto&auto=compress%2Cformat&fit=min&width=2800 2800w';

    echo "srcset from url with search params, using defaults ".($srcset === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    // ---

    $srcset = responsiveImageSrcset($baseImgUrl, [
      'sizes' => [50, 100]
    ]);

    $expected = 'https://area17.imgix.net/0000/image.jpg?q=75&fm=auto&auto=compress%2Cformat&fit=min&w=50&width=50 50w, https://area17.imgix.net/0000/image.jpg?q=75&fm=auto&auto=compress%2Cformat&fit=min&w=100&width=100 100w';

    echo "generates custom sizes ".($srcset === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    // ---

    $srcset = responsiveImageSrcset($baseImgUrl, [
      'params' => [
        'q' => 60
      ]
    ]);

    $expected = 'https://area17.imgix.net/0000/image.jpg?q=60&fm=auto&auto=compress%2Cformat&fit=min&w=200&width=200 200w, https://area17.imgix.net/0000/image.jpg?q=60&fm=auto&auto=compress%2Cformat&fit=min&w=400&width=400 400w, https://area17.imgix.net/0000/image.jpg?q=60&fm=auto&auto=compress%2Cformat&fit=min&w=600&width=600 600w, https://area17.imgix.net/0000/image.jpg?q=60&fm=auto&auto=compress%2Cformat&fit=min&w=1000&width=1000 1000w, https://area17.imgix.net/0000/image.jpg?q=60&fm=auto&auto=compress%2Cformat&fit=min&w=1600&width=1600 1600w, https://area17.imgix.net/0000/image.jpg?q=60&fm=auto&auto=compress%2Cformat&fit=min&w=2200&width=2200 2200w, https://area17.imgix.net/0000/image.jpg?q=60&fm=auto&auto=compress%2Cformat&fit=min&w=2800&width=2800 2800w';

    echo "adds param to basic url, using defaults ".($srcset === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    // ---

    $srcset = responsiveImageSrcset($complexImgUrl, [
      'params' => [
        'q' => 60,
        'blur' => 20,
      ]
    ]);

    $expected = 'https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=200&fm=auto&auto=compress%2Cformat&fit=min&blur=20&width=200 200w, https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=400&fm=auto&auto=compress%2Cformat&fit=min&blur=20&width=400 400w, https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=600&fm=auto&auto=compress%2Cformat&fit=min&blur=20&width=600 600w, https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=1000&fm=auto&auto=compress%2Cformat&fit=min&blur=20&width=1000 1000w, https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=1600&fm=auto&auto=compress%2Cformat&fit=min&blur=20&width=1600 1600w, https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=2200&fm=auto&auto=compress%2Cformat&fit=min&blur=20&width=2200 2200w, https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=2800&fm=auto&auto=compress%2Cformat&fit=min&blur=20&width=2800 2800w';

    echo "overwrites param on url with search params, using defaults ".($srcset === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    // ---

    $srcset = responsiveImageSrcset($complexImgUrl, [
      'overwrite' => false,
      'params' => [
        'q' => 75,
        'blur' => 20,
      ],
    ]);

    $expected = 'https://area17.imgix.net/0000/image.jpg?q=90&fm=auto&auto=compress%2Cformat&fit=min&blur=20&px=10&w=200&width=200 200w, https://area17.imgix.net/0000/image.jpg?q=90&fm=auto&auto=compress%2Cformat&fit=min&blur=20&px=10&w=400&width=400 400w, https://area17.imgix.net/0000/image.jpg?q=90&fm=auto&auto=compress%2Cformat&fit=min&blur=20&px=10&w=600&width=600 600w, https://area17.imgix.net/0000/image.jpg?q=90&fm=auto&auto=compress%2Cformat&fit=min&blur=20&px=10&w=1000&width=1000 1000w, https://area17.imgix.net/0000/image.jpg?q=90&fm=auto&auto=compress%2Cformat&fit=min&blur=20&px=10&w=1600&width=1600 1600w, https://area17.imgix.net/0000/image.jpg?q=90&fm=auto&auto=compress%2Cformat&fit=min&blur=20&px=10&w=2200&width=2200 2200w, https://area17.imgix.net/0000/image.jpg?q=90&fm=auto&auto=compress%2Cformat&fit=min&blur=20&px=10&w=2800&width=2800 2800w';

    echo "doesn\'t overwrite params on url with search params, using defaults ".($srcset === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    // ~~~~~~~~~

    $srcset = responsiveImageSrcset($baseImgUrl, [ 'defaultParams' => false ]);
    $expected = 'https://area17.imgix.net/0000/image.jpg?w=200&width=200 200w, https://area17.imgix.net/0000/image.jpg?w=400&width=400 400w, https://area17.imgix.net/0000/image.jpg?w=600&width=600 600w, https://area17.imgix.net/0000/image.jpg?w=1000&width=1000 1000w, https://area17.imgix.net/0000/image.jpg?w=1600&width=1600 1600w, https://area17.imgix.net/0000/image.jpg?w=2200&width=2200 2200w, https://area17.imgix.net/0000/image.jpg?w=2800&width=2800 2800w';

    echo "srcset from basic url, no defaults ".($srcset === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    // ---

    $srcset = responsiveImageSrcset($complexImgUrl, [ 'defaultParams' => false ]);
    $expected = 'https://area17.imgix.net/0000/image.jpg?px=10&q=90&w=200&width=200 200w, https://area17.imgix.net/0000/image.jpg?px=10&q=90&w=400&width=400 400w, https://area17.imgix.net/0000/image.jpg?px=10&q=90&w=600&width=600 600w, https://area17.imgix.net/0000/image.jpg?px=10&q=90&w=1000&width=1000 1000w, https://area17.imgix.net/0000/image.jpg?px=10&q=90&w=1600&width=1600 1600w, https://area17.imgix.net/0000/image.jpg?px=10&q=90&w=2200&width=2200 2200w, https://area17.imgix.net/0000/image.jpg?px=10&q=90&w=2800&width=2800 2800w';

    echo "srcset from url with search params, no default ".($srcset === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    // ---

    $srcset = responsiveImageSrcset($baseImgUrl, [
      'defaultParams' => false,
      'params' => [
        'q' => 60
      ]
    ]);
    $expected = 'https://area17.imgix.net/0000/image.jpg?q=60&w=200&width=200 200w, https://area17.imgix.net/0000/image.jpg?q=60&w=400&width=400 400w, https://area17.imgix.net/0000/image.jpg?q=60&w=600&width=600 600w, https://area17.imgix.net/0000/image.jpg?q=60&w=1000&width=1000 1000w, https://area17.imgix.net/0000/image.jpg?q=60&w=1600&width=1600 1600w, https://area17.imgix.net/0000/image.jpg?q=60&w=2200&width=2200 2200w, https://area17.imgix.net/0000/image.jpg?q=60&w=2800&width=2800 2800w';

    echo "adds param to basic url, no defaults ".($srcset === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    // ---

    $srcset = responsiveImageSrcset($complexImgUrl, [
      'defaultParams' => false,
      'params' => [
        'q' => 60,
        'blur' => 20,
      ]
    ]);
    $expected = 'https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=200&blur=20&width=200 200w, https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=400&blur=20&width=400 400w, https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=600&blur=20&width=600 600w, https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=1000&blur=20&width=1000 1000w, https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=1600&blur=20&width=1600 1600w, https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=2200&blur=20&width=2200 2200w, https://area17.imgix.net/0000/image.jpg?px=10&q=60&w=2800&blur=20&width=2800 2800w';

    echo "overwrites param on url with search params, no defaults ".($srcset === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";

    // ---

    $srcset = responsiveImageSrcset($complexImgUrl, [
      'defaultParams' => false,
      'overwrite' => false,
      'params' => [
        'q' => 75,
        'blur' => 20,
      ]
    ]);

    $expected = 'https://area17.imgix.net/0000/image.jpg?q=90&blur=20&px=10&w=200&width=200 200w, https://area17.imgix.net/0000/image.jpg?q=90&blur=20&px=10&w=400&width=400 400w, https://area17.imgix.net/0000/image.jpg?q=90&blur=20&px=10&w=600&width=600 600w, https://area17.imgix.net/0000/image.jpg?q=90&blur=20&px=10&w=1000&width=1000 1000w, https://area17.imgix.net/0000/image.jpg?q=90&blur=20&px=10&w=1600&width=1600 1600w, https://area17.imgix.net/0000/image.jpg?q=90&blur=20&px=10&w=2200&width=2200 2200w, https://area17.imgix.net/0000/image.jpg?q=90&blur=20&px=10&w=2800&width=2800 2800w';

    echo "doesn\'t overwrites params on url with search params, no defaults ".($srcset === $expected ? "✅" : "❌");
    echo "\n";
    echo "EXPECTED: ".$expected;
    echo "\n";
    echo "RECEIVED: ".$sizes;
    echo "\n\n";
  ?>
  </pre>
</body>
</html>
