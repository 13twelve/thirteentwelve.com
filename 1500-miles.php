<?php
  $third_party_css = "<link href=\"http://fonts.googleapis.com/css?family=Oswald:400,700\" rel=\"stylesheet\" type=\"text/css\">";
  $meta_title = "13twelve | 1500 miles in 2016";
  $meta_social_title = "13twelve";
  $meta_description = "Breakdown of stats from running 1500 miles in 2016.";
  $meta_url = "http://www.thirteentwelve.com/1500-miles.html";
  $meta_image = "http://www.thirteentwelve.com/images/og1500.jpg";
?>
<?php include "includes/_html_header.php"; ?>
<section id="miles">
  <h1>
    <span class="y">2016</span>
    <span class="m" title="and counting..">1500 MILES</span>
    <span class="d">2400 km</span>
  </h1>
  <p>
    <span class="m" title="31 days less than in 2015">1416 miles in 334 days</span>
    <span class="d"><a href="/1312-miles.html" title="2015's 1312 miles" target="_blank">2111 km in 48 weeks</a></span>

    <span class="m" title="15 days less than 2015, 110 days less than in 2014">1000 miles in 236 days</span>
    <span class="d"><a href="/1000-miles.html" title="2014's 1000 miles" target="_blank">1609 km in 34 weeks</a></span>

    <span class="m">357 days</span>
    <span class="d">51 weeks</span>

    <span class="m" title="78 runs more than 2015">264 runs</span>
    <span class="d">5 runs/week avg.</span>

    <span class="m" title="0.48mi more than 2015">5.68mi avg.</span>
    <span class="d">9.1km avg.</span>

    <span class="m" title="No change from 2014 and 2015">6.22mi modal</span>
    <span class="d">10km modal</span>

    <span class="m" title="0.24 mph faster than 2015">7'45" avg. per mile</span>
    <span class="d">7.74mph avg. speed</span>

    <span class="m" title="57 hours more than 2015">190:10:29 total time</span>
    <span class="d">43.13 mins/run avg.</span>

    <span class="m" title="56,199 more calories than 2015">176,043 calories</span>
    <span class="d">667 calories/run avg.</span>

    <span class="m" title="204,697 more than 2015">617,716 NikeFuel</span>
    <span class="d">2340 NikeFuel/run avg.</span>

    <span class="m" title="I started swimming this year and my shoulders got larger, I think is the reason..">2 lbs gained</span>
    <span class="d">0.9 kgs gained</span>

    <span class="m" title="Ran through Funchal in 30°C sun">3 countries 4 cities</span>
    <span class="d d_xl">
      <span>London, UK</span>
      <span>Manchester, UK</span>
      <span>Funchal, PT</span>
      <span>New York, NY</span>
    </span>

    <span class="m">Fastest 10km - 42:10</span>
    <span class="d d_l"><a href="http://www.bleakholt.org/running-for-bleakholt-2/" target="_blank">Great Manchester 10k for Bleakholt</a></span>

    <span class="m">Fastest 5km - 20:12</span>
    <span class="d"><a href="http://www.parkrun.org.uk/burnley/results/athletehistory/?athleteNumber=2126595" target="_blank">ParkRun: Burnley</a></span>

    <span class="m">Achilles Tendonitis</span>
    <span class="d d_l">
      <span>November - present</span>
      <span>mild case, exercising to fix</span>
    </span>

    <span class="m" title="Running 100 miles a month is a lot..">24x100+ mile months</span>
    <span class="d">Dec 2014 - Nov 2016</span>
  </p>
</section>
<script>
  var els = document.querySelectorAll(".m");
  for (var i = 0; i < els.length; ++i) {
    els[i].addEventListener("click", showExtras, false);
  }

  function showExtras() {
    for (var i = 0; i < els.length; ++i) {
      els[i].classList.add("active");
      els[i].removeEventListener("click", showExtras);
    }
  }
</script>
<?php include "includes/_html_footer.php"; ?>
