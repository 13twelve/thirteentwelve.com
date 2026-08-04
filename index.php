<?php
date_default_timezone_set('UTC');
$meta_title = "13twelve | Mike Byrne, front-end developer";
$meta_social_title = "13twelve";
$meta_description = "The work of front-end developer Mike Byrne: architecture, design systems, accessibility, and practical front-end development.";
$meta_url = "https://www.thirteentwelve.com/";
$meta_image = "https://www.thirteentwelve.com/images/og.jpg";
$current_year = date("Y");
$years_experience = $current_year - 2000;
?>
<!DOCTYPE html>
<html lang="en-GB">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $meta_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <link rel="canonical" href="<?php echo $meta_url; ?>">
    <link rel="icon" href="/favicon.ico" sizes="any">
    <meta property="og:title" content="<?php echo $meta_social_title; ?>">
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta property="og:url" content="<?php echo $meta_url; ?>">
    <meta property="og:image" content="<?php echo $meta_image; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="13twelve">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $meta_social_title; ?>">
    <meta name="twitter:description" content="<?php echo $meta_description; ?>">
    <meta name="twitter:image" content="<?php echo $meta_image; ?>">
    <meta name="twitter:site" content="@13twelve">
    <style>
      @property --reveal-position {
        syntax: "<percentage>";
        initial-value: 100%;
        inherits: false;
      }

      @property --reveal-end {
        syntax: "<color>";
        initial-value: var(--reveal-start);
        inherits: false;
      }

      @property --mask-end {
        syntax: "<color>";
        initial-value: rgb(0 0 0 / 100);
        inherits: false;
      }

      :root {
        color-scheme: light;
        --font: 400 1.125rem/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
        --bg: #dcdcdc;
        --text: #1a1a1a;
        --muted: #666;
        --line: #999;
        --accent: #6c2bd9;
        --reveal-position: 0%;
        --reveal-start: rgb(0 0 0 / 0);
        --reveal-end: rgb(0 0 0 / 0);
        --logo-sticky-top: -12vw;
        --logo-fade-end: 0.05;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      html {
        min-height: 100%;
        background: var(--bg);
      }

      body {
        color: var(--text);
        font: var(--font);
        overflow-x: hidden;
      }

      a {
        color: var(--accent);
        text-decoration: none;
      }

      a:not(.no-arrow):not(.award-link)::after {
        content: ' →';
      }

      a:hover,
      a:focus-visible {
        color: var(--text);
      }

      img {
        display: block;
        max-width: 100%;
      }

      main, footer {
        max-width: 57.75rem;
        margin: 0 auto;
        padding: 0 2rem;
      }

      header {
        position: sticky;
        top: var(--logo-sticky-top);
        margin: 1rem auto 3rem;
        aspect-ratio: 422/86;
        pointer-events: none;
      }

      header svg {
        position: absolute;
        inset: 0;
        display: block;
        width: 100%;
        height: auto;
        aspect-ratio: 422/86;
      }

      main h1,
      main h2,
      main p {
        max-width: 70ch;
      }

      main h1,
      main h2,
      main p,
      main ul {
        font: var(--font);
        text-wrap: pretty;
      }

      main h1,
      main h2 {
        font-weight: 800;
      }

      main h2 {
        margin: 4rem 0 0;
      }

      main p,
      main ul {
        margin: 1rem 0 0;
        margin-top: 0.5lh;
      }

      main h2:first-child,
      main p:first-child,
      main ul:first-child {
        margin-top: 0;
      }

      main ul {
        padding-left: 1.2rem;
      }

      .intro {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 4rem 2rem;
      }

      .intro__col:first-child {
        grid-column: 1 / -1;
      }

      .work {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 2rem 2rem;
        margin: 1rem 0 0;
        padding: 0;
        list-style: none;
      }

      .work--alt {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 1rem 2rem;
      }

      .work li {
        display: flex;
        flex-flow: column;
        gap: 0.875rem;
        margin: 0;
      }

      .work__img {
        overflow: hidden;
        aspect-ratio: 185 / 79;
        border: 1px solid var(--line);
      }

      .work__img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .work__meta {
        font-size: 0.875rem;
      }

      .award-link {
        display: inline-block;
        margin-right: 0.2rem;
        text-decoration: none;
        font-size: 0.75rem;
      }

      .award-link::after {
        content: none;
      }

      .see-all {
        font-size: 0.875rem;
        margin-top: 2rem;
      }

      footer {
        display: flex;
        flex-flow: column;
        place-items: center;
        padding: 6rem 0 1rem;
      }

      .bee {
        display: block;
        width: 5rem;
        height: 4.375rem;
      }

      .social {
        display: flex;
        flex-flow: row nowrap;
        list-style: none;
      }

      .social a {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 48px;
        height: 48px;
        color: var(--text);
      }

      .social a:after {
        content: none !important;
      }

      .social svg {
        width: 20px;
        height: 20px;
      }

      small {
        color: var(--muted);
        font-size: 0.75rem;
      }

      @media (max-width: 800px) {
        body,
        main h1,
        main h2,
        main p,
        main ul {
          font-size: 1rem;
        }

        main h2 {
          margin-top: 2rem;
        }

        .intro {
          grid-template-columns: 1fr;
          gap: 2rem;
        }

        .work {
          grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .work--alt {
          grid-template-columns: repeat(2, minmax(0, 1fr));
        }
      }

      @media (max-width: 600px) {
        :root {
          --logo-fade-end: 0.25;
          --logo-sticky-top: -8vw;
        }

        header, main, footer {
          padding-right: 1rem;
          padding-left: 1rem;
        }

        header {
          aspect-ratio: unset;
          margin-bottom: 2rem;
        }

        header svg {
          position: static;
        }

        .work {
          grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .work--alt {
          grid-template-columns: 1fr;
          gap: 1rem;
        }
      }

      .reveal {
        display: none;
      }

      @supports at-rule(@property) {
        .reveal {
          display: block;
          position: fixed;
          z-index: 10;
          inset: 0;
          background: radial-gradient(
            farthest-corner at left top,
            var(--reveal-start) 0%,
            var(--reveal-start) calc(var(--reveal-position) - 50%),
            var(--reveal-end) var(--reveal-position),
            var(--reveal-end) 100%
          );
          animation: reveal 1s cubic-bezier(0.32, 0, 0.67, 0) forwards;
          pointer-events: none;
        }
      }

      @keyframes reveal {
        0% {
          --reveal-position: 0%;
          --reveal-end: var(--bg);
        }

        90% {
          --reveal-position: 100%;
          --reveal-end: var(--bg);
        }

        100% {
          --reveal-position: 100%;
          --reveal-end: var(--reveal-start);
        }
      }

      @supports (animation-timeline: scroll()) {
        header {
          mask-image: linear-gradient(to bottom, #000 0, var(--mask-end) 100%);
          mask-size: 100% 100%;
          mask-repeat: no-repeat;
          animation: header-fade-mask ease-in both;
          animation-timeline: scroll(root block);
          animation-range: 0 calc(var(--logo-sticky-top) * -1);
        }

        @keyframes header-fade-mask {
          0% {
            --mask-end: rgb(0 0 0 / 100);
          }
          100% {
            --mask-end: rgb(0 0 0 / 0);
          }
        }
      }
    </style>
  </head>
  <body>
    <div id="thirteentwelve">
      <header>
        <svg aria-hidden="true"><use xlink:href="#logo"></use></svg>
      </header>
      <main>
        <div class="intro">
          <div class="intro__col">
            <h1>The work of front-end developer Mike Byrne</h1>
            <p>Over the past <?php echo $years_experience; ?> years, and especially through my work at <a href="https://area17.com/" rel="noreferrer noopener" target="_blank" class="no-arrow">AREA 17</a>, there’s a fair chance you’ve used a website I’ve helped build.</p>
            <p>During this time I’ve learned that the best outcomes rarely come from prioritising design, engineering or business needs on their own. They come from finding the right compromise between them, then building something teams can confidently maintain and grow.</p>
            <p>I care about accessibility, design systems, helping teams work well together, and practical solutions that hold up over time.</p>
          </div>
          <div class="intro__col">
           <h2>What I do</h2>
           <ul>
              <li>Front-end architecture</li>
              <li>Design systems and component libraries</li>
              <li>Accessibility</li>
              <li>Performance and browser compatibility</li>
              <li>CSS, JavaScript and modern front-end workflows</li>
              <li>Localisation and internationalisation</li>
              <li>Technical leadership and mentoring</li>
           </ul>
          </div>
          <div class="intro__col">
            <h2>How I help</h2>
            <ul>
              <li>Translate between design, engineering and business needs</li>
              <li>Look for practical compromises and the best fit solution</li>
              <li>Help teams build things they can maintain</li>
              <li>I make collaboration easier for clients, designers and developers</li>
              <li>Explain technical decisions in plain English</li>
            </ul>
          </div>
        </div>
        <h2>Open Source Projects</h2>
        <ul class="work work--alt">
          <li>
            <div class="work__meta">
              <strong>A17 Behaviors</strong> <br>
              JavaScript framework to attach JavaScript events and interactions to DOM Nodes. <br>
              <a href="https://github.com/area17/a17-behaviors" rel="noreferrer noopener" target="_blank">GitHub</a>
            </div>
          </li>
          <li>
            <div class="work__meta">
              <strong>A17 Tailwind Plugins</strong> <br>
              A series of Tailwind plugins to enable/encourage systematised web design/development and some other useful utility classes. <br>
              <a href="https://github.com/area17/tailwind-plugins" rel="noreferrer noopener" target="_blank">GitHub</a>
            </div>
          </li>
          <li>
            <div class="work__meta">
              <strong>Twill</strong> <br>
              Twill is an open source CMS toolkit for Laravel that helps developers rapidly create a custom admin console that is intuitive, powerful and flexible. <br>
              <a href="https://github.com/area17/twill" rel="noreferrer noopener" target="_blank">GitHub</a>
            </div>
          </li>
          <li>
            <div class="work__meta">
              <strong>Parse Numeric Date</strong> <br>
              Micro library to parse numeric based date inputs. <br>
              <a href="https://github.com/area17/parse-numeric-date" rel="noreferrer noopener" target="_blank">GitHub</a>
            </div>
          </li>
          <!--
          <li>
            <div class="work__meta">
              <strong>HTML4CSS</strong> <br>
              A default CSS file to give unsupported browsers something other than a totally broken experience of the web. <br>
              <a href="https://github.com/area17/html4css" target="_blank">GitHub</a>
            </div>
          </li>
          <li>
            <div class="work__meta">
              <strong>A17 SCSS Utilities</strong> <br>
              A series of plugins to enable/encourage systematised web design/development and some other useful utility classes. <br>
              <a href="https://github.com/area17/scss-utilities" target="_blank">GitHub</a>
            </div>
          </li>
          <li>
            <div class="work__meta">
              <strong>A17 JS Helpers</strong> <br>
              A JavaScript helper package. <br>
              <a href="https://github.com/area17/js-helpers" target="_blank">GitHub</a>
            </div>
          </li>
          <li>
            <div class="work__meta">
              <strong>A17 Generator</strong> <br>
              A17 Generator is used to quickly install A17 FE libraries. <br>
              <a href="https://github.com/area17/a17-generator" target="_blank">GitHub</a>
            </div>
          </li> -->
        </ul>
        <p class="see-all"><a href="https://github.com/13twelve" rel="noreferrer noopener" target="_blank">See all open source contributions on GitHub.com</a></p>
        <h2>CodePens</h2>
        <ul class="work">
          <li>
            <div class="work__img" style="background-color: #836997;"><img loading="lazy" decoding="async" src="/images/work/webp/cpGrad.webp" alt="CodePen: Animated CSS gradients (using CSS only)" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Animated CSS gradients (using CSS only)</strong> <br>
              <a href="https://codepen.io/13twelve/pen/OJwgxOo" rel="noreferrer noopener" target="_blank">CodePen</a>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/cpFlu.webp" alt="CodePen: Fluid flowing SVG SMIL animation" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Fluid flowing SVG SMIL animation</strong> <br>
              <a href="https://codepen.io/13twelve/pen/QNRwGa" rel="noreferrer noopener" target="_blank">CodePen</a>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/cpKal.webp" alt="CodePen: Kaleidoscope canvas image grid" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Kaleidoscope canvas image grid</strong> <br>
              <a href="https://codepen.io/13twelve/pen/GRRJKpe" rel="noreferrer noopener" target="_blank">CodePen</a>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/cpWeather.webp" alt="CodePen: SVG animated weather icons" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>SVG animated weather icons</strong> <br>
              <a href="https://codepen.io/13twelve/pen/aLxvXd" rel="noreferrer noopener" target="_blank">CodePen</a>
            </div>
          </li>
        </ul>
        <p class="see-all"><a href="https://codepen.io/13twelve" rel="noreferrer noopener" target="_blank">See all my CodePens on codepen.com</a></p>
        <h2>Projects</h2>
        <ul class="work">
          <!-- <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/k2.webp" alt="IFM K2 Aurora" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>IFM K2 Aurora</strong> <br>
              September 2026 <br><i>AREA 17</i>
            </div>
          </li> -->
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/gcf.webp" alt="Green Climate Fund" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Green Climate Fund</strong> <br>
              April 2026 <br><i>AREA 17</i> <!-- <br>
              <a href="https://www.greenclimate.fund/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/fo.webp" alt="Field Operations" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Field Operations</strong> <br>
              March 2026 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/cel.webp" alt="Celine" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Celine</strong> <br>
              Dec 2019 - Dec 2024<br><i>AREA 17</i> <!-- <br>
              <a href="https://www.celine.com/en-gb/home" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/rock.webp" alt="Rockwell Group" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Rockwell</strong> <br>
              June 2025 <br><i>AREA 17</i> <!-- <br>
              <a href="https://www.rockwellgroup.com/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #112839;"><img loading="lazy" decoding="async" src="/images/work/webp/dk.webp" alt="Davidson Kempner" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Davidson Kempner</strong> <br>
              November 2024 <br><i>AREA 17</i>s
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/iea.webp" alt="iea" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>IEA</strong> <br>
              <em>Ongoing</em> <br><i>AREA 17</i> <!-- <br>
              <a href="https://www.iea.org/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/flv.webp" alt="flv" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Fondation Louis Vuitton</strong> <br>
              <em>Ongoing</em> <br><i>AREA 17</i> <!-- <br>
              <a href="https://www.fondationlouisvuitton.fr/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/hup.webp" alt="hup" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Harvard University Press</strong> <br>
              November 2023 <br><i>AREA 17</i> <!-- <br>
              <a href="https://www.hup.harvard.edu/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #050033;"><img loading="lazy" decoding="async" src="/images/work/webp/accfnb.webp" alt="Accor: Food and Beverage" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Accor: Food and Beverage</strong> <br>
              August 2023 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #F3F4F1;"><img loading="lazy" decoding="async" src="/images/work/webp/vcaoe.webp" alt="vcaoe" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Van Cleef &amp; Arpels: Open Event</strong> <br>
              July 2023 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #f3f3f1;"><img loading="lazy" decoding="async" src="/images/work/webp/lhllc.webp" alt="lhllc" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Yield Giving</strong> <br>
              Dec 2022
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #D9D9D9;"><img loading="lazy" decoding="async" src="/images/work/webp/oxman.webp" alt="Neri Oxman" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Neri Oxman</strong> <br>
              May 2022 <br><i>AREA 17</i> <!-- <br>
              <a href="https://oxman.com/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #001F5C;"><img loading="lazy" decoding="async" src="/images/work/webp/uscc.webp" alt="US Chamber of Commerce" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>US Chamber of Commerce</strong> <br>
              <a href="https://winners.webbyawards.com/winners/websites-and-mobile-sites/general-websites-and-mobile-sites/associations" title="Webby Award" target="_blank" class="award-link">🏆</a> <br>
              October 2021 <br><i>AREA 17</i> <!-- <br>
              <a href="https://www.uschamber.com/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #006a5f;"><img loading="lazy" decoding="async" src="/images/work/webp/hudcov.webp" alt="Hudson: Covid Timeline" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Hudson: Covid Timeline</strong> <br>
              July 2021 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/accext.webp" alt="Accor: Extended Stay" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Accor: Extended Stay</strong> <br>
              October 2020 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #00f;"><img loading="lazy" decoding="async" src="/images/work/webp/mde.webp" alt="Media Election" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Media Election</strong> <br>
              September 2020 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #e42a1d;"><img loading="lazy" decoding="async" src="/images/work/webp/par.webp" alt="The New School: Parsons" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>The New School: Parsons</strong> <br>
              August 2020 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #1947B7;"><img loading="lazy" decoding="async" src="/images/work/webp/get.webp" alt="Getty museum" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Getty museum</strong> <br>
              January 2020 <br><i>AREA 17</i> <!-- <br>
              <a href="https://www.getty.edu/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/a172019.webp" alt="2019.area17.com" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>2019.area17.com</strong> <br>
              December 2019 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #FE1F3C;"><img loading="lazy" decoding="async" src="/images/work/webp/pr.webp" alt="Precision Run" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Equinox: Precision Run</strong> <br>
              May 2019 <br><i>AREA 17</i> <br>
              <!-- <a href="https://www.precisionrun.com/" target="_blank">Visit</a> <br> -->
              <a href="https://www.awwwards.com/sites/precision-run" rel="noreferrer noopener" target="_blank">Site of the day</a>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/pup.webp" alt="Princeton University Press" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Princeton University Press</strong> <br>
              December 2018 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #929C56;"><img loading="lazy" decoding="async" src="/images/work/webp/cfr-wep.webp" alt="CFR: Growing Economies Through Gender Parity" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Council on Foreign Relations: Growing Economies Through Gender Parity</strong> <br>
              October 2018 <br><i>AREA 17</i> <!-- <br>
              <a href="https://www.cfr.org/interactive/womens-participation-in-global-economy/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #B60739;"><img loading="lazy" decoding="async" src="/images/work/webp/aic.webp" alt="Art Institute of Chicago" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Art Institute of Chicago</strong> <br>
              October 2018 <br><i>AREA 17</i> <!-- <br>
              <a href="https://www.artic.edu/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/nejm.webp" alt="New England Journal of Medicine" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>New England Journal of Medicine</strong> <br>
              September 2017 <br><i>AREA 17</i> <!-- <br>
              <a href="https://www.nejm.org/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/mai.webp" alt="Mai 36" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Mai 36</strong> <br>
              June 2017 <br><i>AREA 17</i> <!-- <br>
              <a href="https://www.mai36.com/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/wyss.webp" alt="Wyss Institute" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Wyss Institute</strong> <br>
              <a href="https://www.webbyawards.com/winners/2017/websites/general-website/schooluniversity/wyss-institute-for-biologically-inspired-engineering-at-harvard-university/" class="award-link" title="Webby Award" rel="noreferrer noopener" target="_blank">🏆</a> <a href="https://www.webbyawards.com/winners/2017/mobile-sites-apps/general-sites-apps/schooluniversity/wyss-institute-for-biologically-inspired-engineering-at-harvard-university/" class="award-link" title="Webby Award" rel="noreferrer noopener" target="_blank">🏆</a> <a href="https://www.w3award.com/winners/gallery/?event=1015&award=1&_p=12" class="award-link" title="W3 Gold Award" rel="noreferrer noopener" target="_blank">🏆</a> <br>
              July 2016 <br><i>AREA 17</i> <!-- <br>
              <a href="http://wyss.harvard.edu/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/mop.webp" alt="Maison&amp;Objet: Produits" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Maison&amp;Objet and more</strong> <br>
              April 2016 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/cr.webp" alt="Charlie Rose" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Charlie Rose</strong> <br>
              April 2016 <br><i>AREA 17</i> <!-- <br>
              <a href="http://www.charlierose.com/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fecb6f;"><img loading="lazy" decoding="async" src="/images/work/webp/wbpv2016.webp" alt="The Webby Awards: People's Voice" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>The Webby Awards: <br>People's Voice (FE rebuild)</strong> <br>
              April 2016 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000035;"><img loading="lazy" decoding="async" src="/images/work/webp/ar.webp" alt="Arré" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Arré</strong> <br>
              (technical direction) <br>April 2016 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/sca.webp" alt="Scientific American" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Scientific American</strong> <br>
              (technical direction) <br>November 2015 <br><i>AREA 17</i> <!-- <br>
              <a href="http://www.scientificamerican.com/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #2c2d31;"><img loading="lazy" decoding="async" src="/images/work/webp/en.webp" alt="Engadget" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Engadget</strong> <br>
              (technical direction) <br>November 2015 <br><i>AREA 17</i> <!-- <br>
              <a href="http://www.engadget.com/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/loa.webp" alt="Library of America" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Library of America</strong> <br>
              (technical direction) <br>November 2015 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/dh2015.webp" alt="Dering Hall" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Dering Hall</strong> <br>
              September 2015 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/ham.webp" alt="Havard Art Museums" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Havard Art Museums</strong> <br>
              (technical direction) <br>October 2014 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/appl.webp" alt="Apple" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Apple</strong> <br>
              September 2014
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #5861a9;"><img loading="lazy" decoding="async" src="/images/work/webp/dy.webp" alt="Samsung:Derby" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Samsung: Derby</strong> <br>
              September 2014 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #cb0000;"><img loading="lazy" decoding="async" src="/images/work/webp/espn.webp" alt="ESPN" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>ESPN</strong> <br>
              <a href="https://www.webbyawards.com/winners/2017/websites/general-website/sports/espncom/" class="award-link" title="Webby Award" rel="noreferrer noopener" target="_blank">🏆</a> <a href="https://www.webbyawards.com/winners/2017/mobile-sites-apps/general-sites-apps/sports/espncom/" class="award-link" title="Webby Award" rel="noreferrer noopener" target="_blank">🏆</a> <a href="https://www.webbyawards.com/winners/2016/mobile-sites-apps/general-sites-apps/sports/espn/" class="award-link" title="Webby Award" rel="noreferrer noopener" target="_blank">🏆</a> <a href="https://www.webbyawards.com/winners/2015/websites/general-website/sports/espncom/" class="award-link" title="Webby Award" rel="noreferrer noopener" target="_blank">🏆</a><br>
              April 2014 <br><i>ESPN</i> <!-- <br>
              <a href="http://espn.go.com/">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #e8eff9;"><img loading="lazy" decoding="async" src="/images/work/webp/wbpv.webp" alt="The Webby Awards: People's Voice" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>The Webby Awards: <br>People's Voice (reskin)</strong> <br>
              April 2014 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/adda.webp" alt="Advertising Age" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Advertising Age</strong> <br>
              (technical direction) <br>February 2014 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #2de382;"><img loading="lazy" decoding="async" src="/images/work/webp/a.webp" alt="Activaire" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Activaire</strong> <br>
              February 2014 <br><i>Spearpoint</i> <!-- <br>
              <a href="http://www.activaire.com/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #3b5586;"><img loading="lazy" decoding="async" src="/images/work/webp/fbs_10.webp" alt="Happy Birthday Facebook!" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Ten Stories</strong> <br>
              February 2014 <br><i>for Facebook's 10th Birthday</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/hdr.webp" alt="Design Connect" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Design Connect</strong> <br>
              February 2014 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/nycmc.webp" alt="NY Media Center" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>NY Media Center</strong> <br>
              January 2014 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #2f2b28;"><img loading="lazy" decoding="async" src="/images/work/webp/fbs_yir_2013.webp" alt="Facebook Stories: 2013 Year in Review" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>2013 Year in Review</strong> <br>
              December 2013 <br><i>Facebook</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/hrtr.webp" alt="heartresearch.me" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>heartresearch.me</strong> <br>
              Charity hack day <br>November 2013 <br><i>We Love The Web</i> <!-- <br>
              <a href="http://heartresearch.me/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/fbs_2013.webp" alt="Facebook Stories" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Facebook Stories</strong> <br>
              November 2013 <br><i>Facebook</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/wb.webp" alt="The Webby Awards Winners Gallery and Archive" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>The Webby Awards: Winners Gallery and Archive</strong> <br>
              April 2013 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/bb.webp" alt="Billboard Biz" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Billboard</strong> <br>
              January 2013 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/bbb.webp" alt="Billboard Biz" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Billboard Biz</strong> <br>
              January 2013 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #f7f3f0;"><img loading="lazy" decoding="async" src="/images/work/webp/fbs_nymd.webp" alt="Facebook Stories: New Year's Midnight Delivery" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>New Year's Midnight Delivery</strong> <br>
              December 2012 <br><i>Facebook</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/fm.webp" alt="Filmmaker" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Filmmaker</strong> <br>
              November 2012 <br><i>AREA 17</i> <!-- <br>
              <a href="http://www.filmmakermagazine.com/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #e9e8e4;"><img loading="lazy" decoding="async" src="/images/work/webp/fbs_av2012.webp" alt="Facebook Stories: America Votes 2012" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>America Votes 2012</strong> <br>
              November 2012 <br><i>Facebook</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/cbx.webp" alt="CBX" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>CBX</strong> <br>
              October 2012 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #f5f1ee;"><img loading="lazy" decoding="async" src="/images/work/webp/fbs.webp" alt="Facebook Stories" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Facebook Stories</strong> <br>
              August 2012 <br><i>Facebook</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/chr.webp" alt="Google Chrome" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Google Chrome</strong> <br>
              April 2012 <br><i>Google</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/lt.webp" alt="Life+Times" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Jay Z's Life+Times</strong> <br>
              March 2012 (javascript re-write) <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #0faad7;"><img loading="lazy" decoding="async" src="/images/work/webp/up.webp" alt="Unpakt" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Unpakt</strong> <br>
              January 2012 <br><i>Pivotal Labs</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/st.webp" alt="Stalkr" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Stalkr</strong> <br>
              December 2011 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #989898;"><img loading="lazy" decoding="async" src="/images/work/webp/ifp.webp" alt="IFP" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>IFP</strong> <br>
              November 2011 <br><i>AREA 17</i> <!-- <br>
              <a href="http://www.ifp.org/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/cf.webp" alt="Coroflot" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Coroflot</strong> <br>
              November 2011 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/dh.webp" alt="Dering Hall" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Dering Hall</strong> <br>
              October 2011 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/sp.webp" alt="Société Perrier" width="185" height="79" /></div>
           <div class="work__meta">
             <strong>Société Perrier</strong> <br>
             August 2011 <br><i>AREA 17</i> <br>
           </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #434343;"><img loading="lazy" decoding="async" src="/images/work/webp/tt.webp" alt="Theyskens Theory" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Theyskens Theory</strong> <br>
              January 2011 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #497cb6;"><img loading="lazy" decoding="async" src="/images/work/webp/f.webp" alt="Fudge" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Made by Fudge</strong> <br>
              January 2011 <br><i>Fudge</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #cdcdcd;"><img loading="lazy" decoding="async" src="/images/work/webp/gm.webp" alt="Universal: Give Music" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Universal Music: Give Music</strong> <br>
              December 2010 <br><i>Fudge</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/dfi.webp" alt="Doha Film Institute" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Doha Film Institute</strong> <br>
              October 2010 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #cacaca;"><img loading="lazy" decoding="async" src="/images/work/webp/fobi.webp" alt="Face of Blue Inc" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Face of Blue Inc</strong> <br>
              October 2010 <br><i>Fudge</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #32a1bb;"><img loading="lazy" decoding="async" src="/images/work/webp/sa.webp" alt="Sustainability" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Sustainability</strong> <br>
              August 2010 <br><i>AREA 17</i>
              <!-- <a href="http://www.sustainability.com/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fcfcfc;"><img loading="lazy" decoding="async" src="/images/work/webp/v.webp" alt="Volcom: Amsterdanm Am" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Volcom: Amsterdanm Am</strong> <br>
              June 2010 <br><i>Fudge</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/tcp.webp" alt="The Creators Project" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Vice Magazine: The Creators Project</strong> <br>
              June 2010 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #b7a26a;"><img loading="lazy" decoding="async" src="/images/work/webp/pl.webp" alt="The Pleasance" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>The Pleasance</strong> <br>
              April 2010 <br><i>Fudge</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #e5e7e6;"><img loading="lazy" decoding="async" src="/images/work/webp/fob.webp" alt="Face of Bank" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Face of Bank</strong> <br>
              March 2010 <br><i>Fudge</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/jm.webp" alt="James Maddox Photography" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>James Maddox Photography</strong> <br>
              February 2010 <br><i>Fudge</i>
              <!-- <a href="http://www.jamesmaddox.co.uk/" target="_blank">Visit</a> -->
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/ci.webp" alt="Creative Islington" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Creative Islington</strong> <br>
              February 2010 <br><i>Fudge</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #252120;"><img loading="lazy" decoding="async" src="/images/work/webp/tq.webp" alt="Technique Retreat" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Technique Retreat</strong> <br>
              January 2010 <br><i>thirteentwelve</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #a45600;"><img loading="lazy" decoding="async" src="/images/work/webp/ct2.webp" alt="Creative Times" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Creative Times</strong> <br>
              January 2010 <br><i>Fudge</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/db.webp" alt="Digital Bury" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Digital Bury</strong> <br>
              September 2009 <br><i>Fudge</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #262626;"><img loading="lazy" decoding="async" src="/images/work/webp/cc.webp" alt="Creative Capita" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Creative Capital</strong> <br>
              August 2009 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/hu.webp" alt="Humanity United" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Humanity United</strong> <br>
              July 2009 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/cp.webp" alt="Canal+" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Canal+</strong> <br>
              July 2009 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #a4a4a4;"><img loading="lazy" decoding="async" src="/images/work/webp/es.webp" alt="England Squash and Racketball" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>England Squash and Racketball</strong> <br>
              <a href="http://www.dadiawards.com/dadi-awards/dadi-awards-2009#35433" class="award-link" title="DADI Award" target="_blank">🏆</a> <br>May 2009 <br><i>Fudge</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/oi.webp" alt="Own It" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Own It</strong> <br>
              December 2008 <br><i>Fudge</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/mb.webp" alt="Motherboard.tv" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Vice Magazine: Motherboard.tv</strong> <br>
              November 2008 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #504f4c;"><img loading="lazy" decoding="async" src="/images/work/webp/vbs.webp" alt="VBS.tv" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Vice Magazine: VBS.tv</strong> <br>
              September 2008 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #41488c;"><img loading="lazy" decoding="async" src="/images/work/webp/aol-ld.webp" alt="AOL Lemondrop" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>AOL Lemondrop</strong> <br>
              June 2008 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #d30008;"><img loading="lazy" decoding="async" src="/images/work/webp/aol-dc.webp" alt="AOL Digital City" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>AOL Digital City</strong> <br>
              June 2008 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/aol-tt.webp" alt="AOL Tour Tracker" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>AOL Tour Tracker</strong> <br>
              4+ million unique a month. <br>March 2008 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fff;"><img loading="lazy" decoding="async" src="/images/work/webp/aol-w.webp" alt="AOL Weather" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>AOL Weather</strong> <br>
              January 2008 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #272727;"><img loading="lazy" decoding="async" src="/images/work/webp/aol-a.webp" alt="AOL Digital City" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>AOL Asylum</strong> <br>
              2+ million unique a month <br>October 2007 <br><i>AREA 17</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #8f4637;"><img loading="lazy" decoding="async" src="/images/work/webp/twag.webp" alt="The Way Ahead Group" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>The Way Ahead Group</strong> <br>
              December 2007 <br><i>Fudge</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #9294b2;"><img loading="lazy" decoding="async" src="/images/work/webp/kc.webp" alt="Kitty Cooper" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Kitty Cooper</strong> <br>
              <a href="http://bigchipawards.com/BUOVD2008" class="award-link" title="Big Chip Award" rel="noreferrer noopener" target="_blank">🏆</a> <a href="http://www.dadiawards.com/dadi-awards/dadi-awards-2008#35291" class="award-link" title="DADI Award" rel="noreferrer noopener" target="_blank">🏆</a><br>
              September 2007 <br><i>Fudge</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #000;"><img loading="lazy" decoding="async" src="/images/work/webp/wx.webp" alt="Warp X" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Warp X</strong> <br>
              June 2007 <br><i>We Love The Web</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #83b0cd;"><img loading="lazy" decoding="async" src="/images/work/webp/mrs.webp" alt="Mr Scruff" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Mr Scruff</strong> <br>
              December 2004 <br><i>We Love The Web</i>
            </div>
          </li>
          <li>
            <div class="work__img" style="background-color: #fffde8;"><img loading="lazy" decoding="async" src="/images/work/webp/ep.webp" alt="Evolution Print" width="185" height="79" /></div>
            <div class="work__meta">
              <strong>Evolution Print</strong> <br>
              Design by The Designers Republic. <br><i>We love the web</i>
            </div>
          </li>
        </ul>
      </main>
      <footer>
        <svg class="bee" title="I ♥️ Manchester 🇬🇧">
          <use xlink:href="#bee" />
        </svg>
        <ul class="social">
          <li><a href="https://github.com/13twelve" rel="noreferrer noopener" target="_blank" title="GitHub"><svg width="32px" height="32px" aria-label="13twelve on GitHub"><use xlink:href="#github" /></svg></a></li>
          <li><a href="https://codepen.io/13twelve/" rel="noreferrer noopener" target="_blank" title="Codepen"><svg width="32px" height="32px" aria-label="13twelve on Codepen"><use xlink:href="#codepen" /></svg></a></li>
          <li><a href="http://instagram.com/13twelve" rel="noreferrer noopener" target="_blank" title="Instagram"><svg width="32px" height="32px" aria-label="13twelve on Instagram"><use xlink:href="#instagram" /></svg></a></li>
        </ul>
        <small>Copyright &copy; 2005 &ndash; <?php echo $current_year; ?>  thirteentwelve.com</small>
      </footer>
    </div>
    <div class="reveal"></div>
    <svg id="icons" style="display: none;">
      <symbol id="instagram" viewbox="0 0 32 32">
        <path fill="currentColor" d="M16 2.88c4.272 0 4.778.016 6.466.093 1.016.01 2.022.195 2.974.547 1.397.538 2.502 1.643 3.04 3.04.352.952.54 1.957.55 2.97.07 1.692.09 2.198.09 6.47s-.016 4.778-.093 6.466c-.01 1.016-.195 2.022-.547 2.974-.538 1.397-1.643 2.502-3.04 3.04-.952.352-1.957.54-2.97.55-1.69.07-2.198.09-6.47.09s-4.78-.016-6.466-.093c-1.016-.01-2.022-.195-2.974-.547-1.397-.538-2.502-1.643-3.04-3.04-.352-.952-.54-1.957-.55-2.97-.07-1.692-.09-2.198-.09-6.47s.016-4.778.093-6.466c.01-1.016.195-2.022.547-2.974.538-1.397 1.643-2.502 3.04-3.04.952-.352 1.957-.54 2.97-.55 1.692-.07 2.198-.09 6.47-.09M16 0c-4.346 0-4.89.02-6.597.096C8.077.123 6.763.374 5.52.84 3.37 1.67 1.67 3.37.84 5.52.374 6.763.123 8.077.096 9.403.02 11.11 0 11.653 0 16s.02 4.89.096 6.597c.027 1.326.278 2.64.744 3.883.83 2.15 2.53 3.85 4.68 4.68 1.243.466 2.557.717 3.883.744 1.707.078 2.25.096 6.597.096s4.89-.018 6.597-.096c1.326-.027 2.64-.278 3.883-.744 2.15-.83 3.85-2.53 4.68-4.68.466-1.243.717-2.557.744-3.883C31.98 20.89 32 20.347 32 16s-.02-4.89-.096-6.597c-.027-1.326-.278-2.64-.744-3.883-.83-2.15-2.53-3.85-4.68-4.68-1.243-.466-2.557-.717-3.883-.744C20.89.02 20.347 0 16 0zm0 8c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8-3.582-8-8-8zm0 13.194c-2.87 0-5.194-2.325-5.194-5.194S13.13 10.806 16 10.806 21.194 13.13 21.194 16 18.87 21.194 16 21.194zM24.8 4.8c1.325 0 2.4 1.075 2.4 2.4s-1.075 2.4-2.4 2.4-2.4-1.075-2.4-2.4 1.075-2.4 2.4-2.4z" />
      </symbol>
      <symbol id="github" viewbox="0 0 32 32">
        <path fill="currentColor" d="M16 0C7.163 0 0 7.163 0 16s7.163 16 16 16 16-7.163 16-16S24.837 0 16 0zm9.502 25.502c-1.235 1.235-2.672 2.204-4.272 2.88-.407.173-.82.324-1.238.454v-2.398c0-1.26-.432-2.187-1.297-2.78.542-.053 1.04-.126 1.492-.22s.932-.23 1.437-.407c.505-.17.958-.38 1.36-.63.4-.24.786-.56 1.155-.95.37-.39.68-.83.93-1.33s.44-1.09.59-1.78c.14-.69.22-1.45.22-2.29 0-1.61-.53-2.99-1.58-4.12.48-1.25.43-2.61-.16-4.08l-.39-.04c-.27-.03-.76.08-1.46.35s-1.49.69-2.37 1.28c-1.24-.34-2.53-.512-3.86-.512-1.35 0-2.63.17-3.85.516-.55-.376-1.08-.686-1.57-.93-.5-.246-.89-.41-1.19-.5-.3-.09-.57-.144-.83-.165-.26-.02-.42-.027-.49-.016-.08.01-.13.02-.16.03-.59 1.48-.64 2.84-.16 4.08-1.05 1.13-1.58 2.51-1.58 4.12 0 .83.07 1.592.22 2.29s.34 1.282.59 1.78c.25.49.56.933.93 1.324.37.39.755.706 1.156.95.4.244.852.455 1.36.63.502.178.98.31 1.434.408.45.095.95.17 1.49.22-.852.584-1.28 1.51-1.28 2.78v2.446c-.47-.14-.936-.305-1.393-.5-1.6-.676-3.04-1.645-4.272-2.88-1.237-1.235-2.206-2.672-2.88-4.272-.7-1.65-1.058-3.41-1.058-5.23s.354-3.57 1.054-5.23c.678-1.6 1.647-3.03 2.88-4.27s2.68-2.2 4.28-2.88c1.655-.7 3.414-1.05 5.23-1.05s3.575.354 5.23 1.054c1.6.68 3.037 1.65 4.27 2.88 1.237 1.24 2.206 2.676 2.88 4.276.7 1.654 1.058 3.414 1.058 5.23s-.353 3.574-1.053 5.23c-.68 1.6-1.648 3.036-2.88 4.27z" />
      </symbol>
      <symbol id="codepen" viewbox="0 0 32 32">
        <path fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M1 21.045L16 31l15-9.955v-10.09L16 1 1 10.955z" />
        <path fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M31 21.045l-15-10.09-15 10.09" />
        <path fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M1 10.955l15 9.954 15-9.957M16 1v9.955m0 10.09V31" />
      </symbol>
      <symbol id="logo" viewbox="0 0 422 86">
        <path fill="currentColor" d="M332.668 48.1c9.147-10.956 13.835-23.957 14.063-39.003-4.86 5.758-9.55 18.76-14.06 39.003zm41.11-23.676c-1.528-.07-2.66 1.44-3.397 4.53-.8 3.3-.85 7.34-.13 12.114 3.53-4.3 5.63-8.138 6.3-11.508.67-3.318-.25-5.03-2.76-5.136zm22.648 16.065c-2.704-.55-7.172 4.31-13.405 14.59 5.76-.5 10.21-2.94 13.33-7.33 1.2-1.72 1.81-3.3 1.85-4.74.02-1.44-.57-2.28-1.76-2.53zm-100.34-9.96c.616-1.88.264-3.18-1.053-3.9-2-1.09-3.538-.37-4.608 2.16-1.142 2.65-1.308 6.33-.5 11.06 3.37-4.04 5.425-7.15 6.162-9.33zm22.86 10.74c1.23-2.92 1.87-5.51 1.923-7.77.05-2.3-.54-3.51-1.77-3.61-2.39-.2-4.75 2.47-7.09 8-.63 1.51-1.64 4.19-3 8.03-1.34 3.75-2.42 6.59-3.24 8.5 2.88-.65 5.54-2.31 8-4.98 2.1-2.27 3.82-5 5.16-8.19zm30.76-34.13c.528 3.88.16 8.63-1.104 14.25-1.352 5.88-3.433 11.5-6.242 16.85-3.125 6-6.785 10.85-10.98 14.53-1.546 5.4-2.257 9.86-2.134 13.35.105 3.28.913 5.2 2.423 5.77 1.51.58 3.45-.39 5.84-2.9 2.58-2.76 5.3-6.99 8.16-12.7l.3.16c-.39-8.65 5.15-17.65 16.6-27l1.68 1.58C351 47.5 348.22 60.5 355.93 70.05c-.384-7.94 3.69-16.57 12.22-25.89-1.895-7.954-1.8-14.116.29-18.49.844-1.79 1.94-3.055 3.29-3.792 1.265-.69 2.538-.82 3.82-.4 1.3.42 2.36 1.33 3.187 2.72.9 1.53 1.35 3.416 1.37 5.664.05 5.55-2.42 11.97-7.4 19.25.83 1.61 1.85 2.96 3.07 4.06 1.07-2.15 2.37-4.32 3.88-6.5 2.93-4.23 6.012-7.57 9.243-10.01 3.39-2.56 6.154-3.5 8.295-2.82 2.49.81 4.036 2.51 4.632 5.11.58 2.49.164 5.17-1.24 8.03-1.494 3.05-3.767 5.56-6.82 7.53-3.478 2.25-7.508 3.43-12.09 3.56-3.44 7.39-3.67 12.827-.685 16.3 1.285 1.496 3.075 2.44 5.376 2.847 2.25.37 4.725.19 7.428-.55 6.023-1.65 11.238-5.22 15.645-10.72 5.09-6.41 7.7-14.01 7.82-22.81.09-5.97-1.28-11.29-4.11-15.96-2.83-4.67-6.93-8.37-12.3-11.09-5.55-2.81-12.1-4.4-19.64-4.77-7.99-.37-16.7.64-26.15 3.03l.13-2.82c7.96-2.39 15.8-3.6 23.55-3.64 7.96-.05 15.03 1.15 21.23 3.61 6.6 2.6 11.7 6.43 15.28 11.51 3.9 5.51 5.81 12.22 5.74 20.12-.08 8.94-2.24 16.65-6.48 23.15-3.72 5.72-8.56 9.88-14.53 12.48-5.58 2.42-10.91 3.02-15.98 1.79-5.26-1.28-8.9-4.24-10.9-8.88-1.37-3.16-1.33-7.15.11-11.96.42-1.44.94-2.89 1.56-4.35-1.23-1.08-2.39-2.43-3.46-4.06-6.51 5.67-11.45 13.56-14.82 23.67-4.92-4.4-8.12-8.91-9.58-13.51-1.86 3.45-3.88 6.29-6.08 8.53-2.63 2.68-5.21 4.21-7.74 4.58-2.42.35-4.35-.41-5.79-2.27-1.49-1.93-2.16-4.71-2-8.35.05-1.2.14-2.42.25-3.67-5.38 8.21-10.36 13.18-14.92 14.89-4.56 1.68-8.18.11-10.85-4.72-1.69-3.07-2.19-7.39-1.5-12.95.03-.26.07-.52.1-.78-2.27-.84-4.82-3-7.63-6.49-7.07 7.41-11.97 14.81-14.69 22.22-4.72-2.4-7.63-7.26-8.72-14.56-3.25 4.46-5.72 10.48-7.4 18.07-4.97-4.23-7.59-10.34-7.88-18.33v-.06c-1.88 3.24-3.66 6.05-5.36 8.43 1.47.75 2.44 1.76 2.91 3.04.57 1.47.38 3.05-.55 4.74-.91 1.67-2.36 3.09-4.34 4.26-2.16 1.27-4.59 1.99-7.3 2.19-6.7.46-13.28-2.35-19.72-8.43-13.57 5.92-26.53 9.95-38.87 12.11-14.85 2.62-24.87 1.56-30.05-3.18l.27-2.74c4.5 4.76 13.92 5.91 28.29 3.47 12.24-2.09 25.02-6.08 38.35-11.96-2.84-2.9-3.72-7.19-2.63-12.88.63-3.2 2.04-7.75 4.22-13.67-3.18 3.98-7.15 8.8-11.93 14.46-2.01 2.38-3.59 4.37-4.75 5.98-3.51 5.83-7.85 9.58-13.02 11.24-2.8.9-5.38.96-7.75.19-2.37-.76-4.15-2.21-5.34-4.37-.01-.03-.03-.06-.05-.08-4.83 4.22-9.43 6.41-13.8 6.55-4.73.14-8.32-2.01-10.76-6.45-1.42 1.39-2.84 2.51-4.25 3.37-4.3 2.58-8 2.45-11.09-.4-3-2.73-4.8-7.38-5.4-13.93l-.06-.81c-3.01 6.03-6.13 10.53-9.33 13.49-3.84 3.53-7.12 4.34-9.82 2.45-2.65-1.86-3.96-5.73-3.93-11.62.04-6.43 1.774-13.71 5.22-21.86H106c-1.92 6.25-4.307 11.94-7.166 17.09L97 61.32c-.605 1-1.23 1.97-1.884 2.91l-.05-.025c-2.417 3.4-4.76 5.867-7.03 7.4-3.23 2.216-5.77 2.216-7.61 0-1.206-1.46-1.94-3.71-2.215-6.75-.25.572-.41.927-.48 1.066-1.75 3.75-3.3 6.2-4.63 7.34-1.92 1.6-3.78 2.38-5.58 2.35-1.72-.06-3.11-.84-4.19-2.35-1.3-1.88-1.86-4.65-1.68-8.32.23-5.09 1.92-10.56 5.06-16.41-3.21 2.9-7.64 7.7-13.27 14.41-5.18 6.18-9.08 10.32-11.69 12.41l-1.14-2.37c2.41-2.02 4.75-6.84 7.04-14.48.27-.9.55-1.86.83-2.88-2.49 3.66-4.84 6.8-7.04 9.42-6.97 8.25-12.8 11.77-17.49 10.56-3.09-.8-5.27-2.8-6.56-5.97-1.16-2.93-1.49-6.63-1-11.09.07-.58.15-1.16.24-1.74-3.29-.3-6.14-1.22-8.56-2.76-2.88-1.82-4.9-4.35-6.08-7.58-1.07-3-1.26-6.11-.55-9.32.7-3.23 2.17-5.89 4.4-7.98 2.63-2.47 6.24-4.18 10.83-5.13 5.7-1.18 10.83-.42 15.38 2.29l8.84-10.22c.6-.33 1.85-.79 3.74-1.37 1.74-.54 3.09-1.14 4.06-1.79l1.06 2.11c-.96.58-4 3.68-9.11 9.3l-1.07 1.17c5.36-1.58 10.88-3.13 16.55-4.65.94-.25 1.87-.49 2.8-.72.52-1.05 1.05-2.09 1.61-3.12 2.95-5.42 4.94-8.11 5.95-8.06 2.32.11 4.02 1.35 5.09 3.72.56 1.22.88 2.62.96 4.21 4.19-.91 8.11-1.66 11.76-2.26 4.15-.69 7.95-1.18 11.41-1.48 12.94-1.12 20.89.69 23.84 5.43.12.2-.28.49-1.21.9-.93.4-1.49.51-1.66.34-3.25-3.18-10.24-4.27-20.97-3.27-3.46.31-7.26.82-11.4 1.53-3.69.61-7.65 1.38-11.89 2.29-.06.48-.13.97-.22 1.47-1.63 9.09-7.27 18.12-16.91 27.07l-3.08 9.4c.6-.42 3.43-3.34 8.51-8.77 5.32-5.67 9.51-9.72 12.56-12.14.61 3.93 1.02 6.89 1.24 8.87-3.2 2.02-5.58 5.37-7.14 10.06-1.37 4.11-1.78 7.9-1.24 11.38.56 3.52 1.85 4.88 3.87 4.11 2.37-.91 5.1-4.81 8.19-11.69l.06-.95c.42-6.63 2.17-14.64 5.26-24.02 1.29-.1 2.45-.27 3.51-.5l.87-.18c1.225-.28 2.445-.63 3.66-1.05.84-.3 1.67-.63 2.5-1l.525 1 .37.68-.53.55c-4.9 5.21-8.53 11.13-10.9 17.75-2.05 5.72-2.76 10.57-2.13 14.54.284 1.79.84 3.05 1.66 3.77.88.74 1.95.8 3.215.19 2.62-1.26 5.56-5.02 8.81-11.26 3.2-6.52 5.65-13.44 7.36-20.76-3.16-4.09-4.61-7.81-4.35-11.14.21-2.83 1.39-4.54 3.53-5.14 2.16-.6 3.86.33 5.11 2.79 1.49 2.92 1.61 7.15.37 12.7 3.56 1.07 7.01-1.82 10.35-8.69 2.72 3.25 5.202 5.51 7.45 6.77-5.13 4-9 9.61-11.61 16.8-2.26 6.25-3.03 11.64-2.29 16.15.334 2.04.984 3.37 1.95 4.01 1.02.67 2.283.42 3.79-.76 3.6-2.802 7.74-10.09 12.42-21.86.38-4.39 1.28-9.02 2.7-13.9l.66-2.71c-1.37-.28-2.826-.83-4.375-1.66-3.25-1.7-5.74-3.98-7.48-6.82l2.72-1.66c1.96 2.58 4.01 4.45 6.13 5.61 1.22.66 2.48 1.1 3.79 1.32l1.56-6.37c1.44-.62 3.3-1.33 5.58-2.13 2.04-.81 4.09-1.91 6.17-3.32l1.05 2.11c-.943.57-2.743 3.3-5.4 8.19 1.25-.36 2.68-.77 4.3-1.24 8.796-2.55 16-4.57 21.62-6.06 21.61-5.76 36.256-8.35 43.93-7.77 3.44.26 6.57.91 9.4 1.95 2.93 1.07 5.16 2.42 6.69 4.06L226 21.64c-1.478-.91-2.24-1.386-2.295-1.42-1.14-.615-2.36-1.09-3.66-1.42-3.04-.757-6.71-1.22-11.01-1.398-2.39-.09-5.222.05-8.505.42-3.44.384-6.97.98-10.587 1.79-5.18 1.16-12.344 2.922-21.49 5.292-10.38 2.706-19.776 5.3-28.18 7.78-.72 1.4-1.417 2.78-2.08 4.15-3.337 7.163-5.084 13.975-5.24 20.437-.14 5.94 1.02 10.25 3.476 12.93 2.53 2.74 5.69 2.92 9.48.53.96-.6 1.92-1.35 2.87-2.23-1.16-2.69-1.94-5.79-2.35-9.29-.49-4.18-.38-8.25.34-12.22.74-4.07 1.97-7.27 3.71-9.58 1.88-2.53 4.09-3.63 6.63-3.32 2.49.32 4.5 1.41 6.03 3.27 1.55 1.9 2.34 4.3 2.4 7.22.11 6.92-3.65 14.2-11.27 21.86 1.47 5.21 4.27 7.79 8.37 7.72 3.36-.05 6.95-1.98 10.74-5.79-1.05-2.8-1.55-6.24-1.5-10.32.05-4.94.87-9.84 2.47-14.72 1.65-5.06 3.77-9 6.37-11.82 2.91-3.12 6-4.37 9.27-3.74 2.4.46 3.96 1.97 4.66 4.53.68 2.44.51 5.55-.53 9.33-2.32 8.44-7.47 16.69-15.46 24.73.07 2.61.86 4.46 2.37 5.53 1.46 1.05 3.29 1.21 5.5.47 2.33-.79 4.66-2.43 6.98-4.92.46-.49.9-1.02 1.34-1.56l-.06.01c3.18-4.99 5.96-11.85 8.35-20.59 1.7-6.27 2.95-12.36 3.74-18.27 2.69-.86 5.08-1.91 7.19-3.16l1.16 1.84-8.96 27.3c1.68-2.3 3.94-5.83 6.77-10.59 1.58-2.65 4.18-7.14 7.79-13.48.72-.09 1.81.39 3.29 1.42.75.53 1.43 1.05 2.03 1.58l.39.53c-5.86 11.47-9.29 19.8-10.27 24.99-.95 4.88.04 8.52 2.98 10.9 4.34-1.38 8.24-2.39 11.72-3.01-.05-1.49-.01-3.14.1-4.94.42-6.99 1.92-14.92 4.5-23.78l1.59-4.73c-.38-.15-.76-.32-1.15-.51-3.18-1.54-5.38-3.47-6.59-5.79l1.8-1.59c1.81 2.07 3.85 3.61 6.14 4.61.27.12.55.23.81.33l3.05-9.04c1.87-.8 3.74-1.79 5.58-2.95l6.16-4.16 1.05 2.11c-.97.58-3.26 4.42-6.88 11.51l-.85 1.69c13.23-5.5 28.06-9.75 44.47-12.75 16.46-3 30.24-4.02 41.32-3.05l-1.58 2.53c-10.33-.82-22.83.13-37.5 2.85-16.72 3.11-32.85 8-48.41 14.67-.17.07-.33.13-.5.18-.71 1.46-1.41 2.91-2.08 4.35-3.48 7.46-5.8 14.44-6.96 20.94-.49 2.74-.74 5.08-.73 7.02 3.9-.46 7.16-.34 9.78.34 2.75-4.04 5.74-9.91 8.96-17.6h.04c.8-3.06 1.92-5.65 3.36-7.77 2.02-2.64 4.23-5.03 6.63-7.19 1.19-1.07 2.19-1.89 2.98-2.45l1.68 1.95c-2.19 1.72-4.17 4.15-5.93 7.29-1.68 3-2.97 6.31-3.87 9.9-1.98 8.03-1.58 14.43 1.21 19.23.79-11.6 6.56-22.53 17.3-32.78l2.34 1.58c-3.91 6.16-6.16 12.39-6.74 18.67-.26 2.78-.1 5.08.48 6.93.58 1.91 1.53 3.09 2.87 3.53.88-7.76 5.04-15.52 12.48-23.28-1.72-6.57-1.64-11.74.24-15.51.77-1.53 1.76-2.63 2.97-3.32 1.14-.63 2.3-.79 3.47-.48 1.19.3 2.16 1.04 2.9 2.21.83 1.27 1.27 2.87 1.32 4.82.11 4.76-2.05 10.41-6.48 16.96.27 2.29 2.36 4.57 6.3 6.85.77-4.16 2.1-8.47 3.98-12.91 2.3-5.42 4.89-9.81 7.77-13.17 3.1-3.61 5.94-5.26 8.5-4.95 2.6.32 4.27 2.12 5.03 5.4.7 3.14.42 6.76-.85 10.85-1.35 4.37-3.49 8.11-6.42 11.22-3.37 3.57-7.31 5.74-11.82 6.51-1.18 6.27-1.06 10.46.34 12.57 1.23 1.84 3.35 1.98 6.35.42 2.7-1.39 5.74-3.93 9.11-7.64 1.89-2.07 3.65-4.25 5.28-6.52.61-4.51 1.58-9.36 2.91-14.55 1.41-5.46 3.48-12.19 6.22-20.2 2.44-7.11 4.4-12.28 5.9-15.51 1.82-3.95 3.3-5.84 4.42-5.66 2.31.39 3.74 2.61 4.29 6.64zM154.93 43.62c-1.036 1.915-1.843 4.38-2.423 7.4-.58 2.968-.772 5.62-.58 7.954.193 2.546.817 4.082 1.87 4.61 2.967-4.092 5.047-8.832 6.242-14.222 1.19-5.46.72-8.348-1.43-8.665-1.28-.2-2.51.78-3.69 2.92zm-51.512-7.4c1.966-6.776 1.527-10.69-1.317-11.745-2.32 2.248-1.88 6.163 1.32 11.746zM91.54 26.24c0 .755-.36 1.405-1.08 1.95-.72.53-1.59.79-2.607.79-1.017 0-1.886-.26-2.606-.79-.72-.54-1.08-1.19-1.08-1.945 0-.773.36-1.422 1.08-1.95.72-.543 1.59-.816 2.607-.816 1.02 0 1.89.27 2.608.82.72.52 1.08 1.17 1.08 1.95zm139.974 43.51c-.117-.572-.214-1.187-.29-1.843-3.292.538-6.663 1.442-10.113 2.712 7.83 5.86 14.36 7.92 19.57 6.19 1.85-.62 3.34-1.65 4.48-3.11.95-1.2 1.42-2.26 1.42-3.19 0-.94-.53-1.67-1.6-2.19-.39.5-.78.97-1.16 1.42-.58.68-1.15 1.31-1.71 1.87-3.9 3.97-6.84 4.76-8.82 2.37-.8-.97-1.39-2.38-1.76-4.24zm3.82 0c.034.07.07.132.104.184 1.09 1.844 2.73 1.783 4.925-.184.458-.42.95-.93 1.476-1.527.17-.2.35-.41.52-.63-1.1-.17-2.42-.26-3.95-.26-1.26-.004-2.53.048-3.81.158.15.9.39 1.65.72 2.27zm-46.3-34.42c-2.58-.422-5.056 2.826-7.426 9.743-2.23 6.52-3.292 12.66-3.187 18.44 3.67-5.056 6.85-10.65 9.54-16.775 3.16-7.198 3.52-11 1.08-11.403zM68.89 21.105c-2.136.482-4.335 1-6.598 1.554C59.51 28.7 57.18 36.3 55.3 45.46c4.126-3.792 7.875-9.692 11.246-17.698 1.05-2.49 1.83-4.71 2.343-6.665zm.67-3.595c.13-1.543-.12-2.47-.75-2.777-1.16-.56-2.67.783-4.53 4.03 1.8-.443 3.56-.86 5.28-1.252zM39.078 36.408c-.105-.246.123-.632.685-1.16.298-.263.702-.605 1.21-1.026 1.493 2.687 2.01 5.39 1.555 8.113-.44 2.58-1.686 4.96-3.74 7.137-2.054 2.142-4.68 3.862-7.875 5.162-2.99 1.225-6.22 1.954-9.69 2.186l-.132.605c-.93 4.23-1.06 7.734-.39 10.508.72 3.003 2.35 4.838 4.87 5.505 3.76.965 8.82-2.528 15.2-10.482 1.78-2.194 4.24-5.53 7.4-10.007.55-.77 1.06-1.49 1.54-2.16.98-4.02 2-8.69 3.05-14.01 1.13-4.42 2.59-8.69 4.37-12.83l-1.52.39c-5.71 1.48-12.4 3.36-20.08 5.63l-2.3 2.61c-2.86 3.58-5.38 7.62-7.56 12.11-1.47 3.03-2.65 5.99-3.54 8.86 5.22-.54 9.62-2.07 13.21-4.6 4.79-3.37 6.05-7.56 3.77-12.56zm-12.3-4.082l3.333-3.832c-3-1.688-6.84-2.158-11.52-1.41-4.72.773-8.14 2.213-10.27 4.32-2.19 2.176-3.52 4.652-3.98 7.426-.42 2.62-.01 5.11 1.21 7.48 1.27 2.428 3.18 4.29 5.75 5.61 1.8.94 3.77 1.51 5.92 1.73.62-2.743 1.5-5.565 2.65-8.468.9-2.247 1.89-4.4 2.98-6.452.09-.176.19-.35.29-.526 1.13-2.053 2.35-4.01 3.66-5.872z" />
      </symbol>
      <symbol id="bee" viewbox="0 0 80 70">
        <path d="M76.96 20.475c-.992-.482-2.056-.645-3.16-.667-8.476-.165-16.794.91-24.97 3.128-.298.08-.6.152-.903.202-.146.024-.302-.012-.462-.02-.374-.58-.173-1.015.36-1.278 2.615-1.288 3.962-3.716 5.404-6.034.69-1.11 1.56-1.752 2.86-1.8 1.26-.045 2.26-.608 3.12-1.506 1.04-1.087 1.9-2.317 2.79-3.52.39-.53.46-1.092-.12-1.495-.52-.365-1.1-.296-1.52.228-.75.925-1.47 1.875-2.21 2.808-.71.9-1.56 1.4-2.76 1.48-1.56.12-2.83.86-3.69 2.26-.79 1.28-1.65 2.51-2.51 3.73-.48.69-1.05 1.29-2.08 1.62-.26-1.91-1.5-3.05-3.43-3.81 1.04-.39 2.05-.55 2.36-1.52.27-.85.19-1.69-.37-2.5-.57-.81-1.81-.57-2.24-1.63C44.66 8.26 45.95 6.4 47.8 5c.825-.62 1.614-1.292 2.38-1.985.78-.704.918-1.474.056-2.244h-.933c-.63 1.04-1.634 1.7-2.574 2.39-1.52 1.11-2.81 2.44-3.79 4-.74 1.18-1.46 1.67-2.96 1.69-1.41-.02-2.22-.51-2.96-1.69-.99-1.56-2.28-2.88-3.79-3.99-.94-.69-1.94-1.35-2.57-2.39h-.94c-.86.77-.73 1.54.05 2.25.77.7 1.56 1.37 2.38 1.99 1.85 1.4 3.14 3.26 4.36 5.14-.44 1.06-1.68.82-2.25 1.64-.56.81-.64 1.65-.37 2.5.31.97 1.32 1.13 2.36 1.53-1.94.77-3.17 1.91-3.43 3.82-1.04-.33-1.61-.93-2.08-1.61-.86-1.23-1.72-2.46-2.51-3.73-.86-1.4-2.13-2.14-3.69-2.253-1.21-.084-2.06-.59-2.76-1.48-.74-.93-1.46-1.88-2.21-2.806-.42-.524-1-.59-1.52-.23-.58.404-.51.966-.12 1.495.89 1.2 1.75 2.43 2.79 3.52.86.9 1.86 1.46 3.12 1.506 1.3.05 2.173.69 2.863 1.8 1.45 2.32 2.79 4.75 5.41 6.037.535.26.74.7.36 1.278-.16.01-.31.04-.46.02-.3-.05-.605-.12-.9-.2-8.18-2.22-16.498-3.296-24.97-3.13-1.107.02-2.17.184-3.16.666-2.41 1.17-3.24 3.92-1.906 6.23.15.27.32.53.5.78 4.3 5.916 10.2 8.306 17.38 7.876.742-.047 1.49-.24 2.41-.01-1.88 3.174-4.296 5.32-7.92 5.8-1.25.164-2.477-.09-3.674-.426-.812-.23-1.54-.15-1.73.74-.174.83.54 1.13 1.23 1.3 1.61.42 3.23.65 4.91.38 3.66-.6 6.53-2.57 8.27-5.7 1.32-2.37 3.175-3.76 5.45-4.93 2.04-1.06 4-2.28 6.03-3.45-.565 2.95-2.14 5.02-4.63 6.48-2.06 1.2-2.79 3.22-3.014 5.475-.203 2.01-.31 4.03-.624 6.02-.483 3.076-1.444 5.94-4.24 7.78-1.22.8-2.5 1.454-3.9 1.86-.795.23-1.6.42-2.39.64-.618.176-1.07.57-.87 1.235.194.67.72.98 1.46.76.393-.115.81-.16 1.21-.26 5.54-1.43 9.425-4.5 10.592-10.42.472-2.4.54-4.823.833-7.23.14-1.184.623-2.17 1.31-3.095.21-.285.48-.55.88-.29.17.27.09.536.05.78-.65 3.54-.26 7.03.69 10.435 1.277 4.56 4.15 9.52 8.627 12.05 4.476-2.53 7.35-7.49 8.626-12.05.96-3.4 1.35-6.9.7-10.433-.04-.24-.12-.51.052-.776.397-.26.67 0 .88.29.686.93 1.168 1.91 1.31 3.1.296 2.405.36 4.83.836 7.23 1.17 5.92 5.05 8.993 10.594 10.42.4.105.814.147 1.21.26.74.22 1.263-.09 1.46-.755.196-.66-.255-1.06-.87-1.23-.794-.22-1.6-.41-2.39-.64-1.4-.402-2.685-1.06-3.9-1.86-2.797-1.84-3.76-4.7-4.244-7.773-.31-1.99-.42-4.01-.62-6.017-.23-2.253-.96-4.27-3.017-5.477-2.49-1.46-4.06-3.53-4.625-6.48 2.03 1.17 3.99 2.39 6.03 3.446 2.27 1.17 4.123 2.56 5.45 4.93 1.74 3.13 4.61 5.1 8.27 5.7 1.674.275 3.293.04 4.91-.375.683-.18 1.4-.48 1.224-1.31-.19-.89-.92-.96-1.73-.733-1.2.34-2.427.59-3.677.43-3.626-.48-6.04-2.622-7.92-5.8.92-.23 1.67-.033 2.41.01 7.2.414 13.1-1.976 17.4-7.896.18-.25.35-.51.505-.78 1.34-2.31.506-5.06-1.903-6.23zM23.61 32.44c-2.32 1.046-4.858.85-7.33.814-4.404-.066-8.105-1.81-11.222-4.868-.78-.764-1.428-1.645-1.978-2.57-.92-1.553-.138-3.31 1.642-3.705 1.886-.42 3.813-.2 5.72-.17 6.53.1 12.92 1.22 19.253 2.73.8.19 1.56.53 2.38.67.807.14.97.82 1.153 1.68-3.212 1.91-6.276 3.93-9.618 5.44zm14.31-20.877c.682-.516 1.507-.872 2.08-.872.544 0 1.398.36 2.08.88-.407 1.12-.335 2.56.367 3.77-.894-.3-1.69-.59-2.447-.59-.718 0-1.495.22-2.447.6.702-1.2.774-2.65.367-3.76zm-2.91 8.203c.016-1.032.804-1.496 1.594-1.897 1.065-.55 2.33-.93 3.397-.97 1.19.02 2.34.42 3.4.96.79.4 1.58.86 1.6 1.89.03 1.59.36 3.16.32 4.76-.08 2.79-1.45 4.19-4.22 4.18-.36 0-.72-.01-1.08-.01-.36 0-.72.01-1.08.01-2.77 0-4.14-1.4-4.22-4.19-.05-1.6.29-3.17.31-4.77zM40 57.91c-1.576-.028-2.197-1.257-3.123-2.484h6.246c-.926 1.227-1.547 2.456-3.123 2.485zm5.586-7.458c-.286.982-.95 1.336-1.896 1.518-1.205.233-2.448.35-3.69.35-1.204 0-2.457-.206-3.69-.35-.956-.112-1.61-.536-1.896-1.518-.228-.783-.577-1.53-.954-2.51 2.327.378 4.345.566 6.54.65 2.15-.08 4.252-.292 6.54-.65-.377.978-.725 1.726-.954 2.51zm2.228-8.227c.088.806-.334 1.23-1.093 1.393-2.21.474-4.4.63-6.72.623-2.23.02-4.5-.15-6.72-.62-.76-.16-1.18-.58-1.09-1.39.1-.9-.19-1.85.43-2.84 2.41.5 4.88.8 7.39.82 2.5-.02 4.98-.32 7.39-.82.62.99.33 1.94.43 2.85zm-5.67-11.122c1.68.016 2.254.627 2.9 1.766.45.79.935 1.57 1.1 2.57-2.048.55-4.124.72-6.144.72s-4.096-.17-6.145-.72c.165-1 .65-1.78 1.102-2.58.645-1.14 1.22-1.75 2.9-1.77m39.063-5.28c-.55.92-1.2 1.8-1.978 2.57-3.118 3.06-6.818 4.8-11.22 4.87-2.474.03-5.013.23-7.332-.82-3.34-1.51-6.406-3.53-9.617-5.44.182-.86.346-1.54 1.153-1.67.822-.14 1.58-.47 2.38-.66 6.332-1.52 12.722-2.64 19.253-2.73 1.9-.03 3.83-.25 5.72.17 1.77.39 2.56 2.15 1.64 3.7z" />
        <path d="M43.696 25.9c.55-1.913.365-3.42.225-5.367-.04-.682-.44-1.242-1.41-1.385v8.057c.86-.136 1.03-.726 1.2-1.305zM40 27.777c.625-.206.868-.687.9-1.295.122-2.382.107-4.39-.055-6.768-.035-.515-.045-1.19-.845-1.257-.8.066-.81.742-.845 1.256-.154 2.253-.17 4.51-.054 6.768.04.61.28 1.09.9 1.3zm-2.503-.572v-8.057c-.974.143-1.37.703-1.418 1.385-.13 1.792-.29 3.598.22 5.367.16.58.33 1.17 1.19 1.305z" />
      </symbol>
    </svg>
    <script type="text/javascript">
      var thirteentwelve = document.getElementById('thirteentwelve');
      thirteentwelve.insertBefore(document.getElementById('icons'), thirteentwelve.childNodes[0]);
    </script>
  </body>
</html>
