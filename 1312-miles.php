<?php $third_party_css = "<link href=\"http://fonts.googleapis.com/css?family=Oswald:400,700\" rel=\"stylesheet\" type=\"text/css\">
" ?>
<?php include "includes/_html_header.php"; ?>
<section id="miles">
  <h1>
    <span class="m" title="and counting..">1312 MILES</span>
    <span class="d">2111 km</span>
  </h1>
  <p>
    <span class="m" title="To compare with 2014">1000 miles in</span>
    <span class="d">1609 km in</span>

    <span class="m" title="95 days less than 2014">251 days</span>
    <span class="d">36 weeks</span>

    <span class="m" title="15 runs more than 2014">186 runs</span>
    <span class="d">5 runs/week avg.</span>

    <span class="m" title="0.5 less than 2014">5.3mi avg.</span>
    <span class="d">8.53km avg.</span>

    <span class="m" title="No change from 2014">6.22mi modal</span>
    <span class="d">10km modal</span>

    <span class="m" title="0.26 mph faster than 2014">8:00 avg. per mile</span>
    <span class="d">7.5mph avg. speed</span>

    <span class="m" title="4.5 hours less than 2014">133:36:24 total time</span>
    <span class="d">43.1 mins/run avg.</span>

    <span class="m" title="1000 less calories than 2014">119,844 calories</span>
    <span class="d">645 calories/run avg.</span>

    <span class="m" title="12,000 more than 2014, though I think the metric changed">413,019 NikeFuel</span>
    <span class="d">2221 NikeFuel/run avg.</span>

    <span class="m" title="5lbs less than 2014, annoyingly little!">2 lbs lost</span>
    <span class="d">0.9 kgs lost</span>

    <span class="m" title="Less travelling this year">2 countries 4 cities</span>
    <span class="d d_xl">
      <span>London, UK</span>
      <span>Manchester, UK</span>
      <span>Falmouth, UK</span>
      <span>New York, NY</span>
    </span>

    <span class="m" title="And people often tell me that running 100 miles a month isn't very much LOL">12x100+ mile months</span>
    <span class="d"><a href="/1000-miles.html" class="2014's 1000 miles">Dec 2014</a> - Nov 2015</span>
  </p>
</section>
<script>
  if (typeof document.querySelectorAll && 'classList' in document.createElement('a')) {
    var els = document.querySelectorAll(".m");
    for (var i = 0; i < els.length; ++i) {
      els[i].addEventListener("click", function(){
        this.classList.toggle("active");
      }, false);
    }
  }
</script>
<?php include "includes/_html_footer.php"; ?>