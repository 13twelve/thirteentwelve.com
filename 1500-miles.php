<?php $third_party_css = "<link href=\"http://fonts.googleapis.com/css?family=Oswald:400,700\" rel=\"stylesheet\" type=\"text/css\">
" ?>
<?php include "includes/_html_header.php"; ?>
<section id="miles">
  <h1>
    <span class="m" title="and counting.." style="text-decoration: line-through;">1500 MILES</span>
    <span class="d" style="text-decoration: line-through;">2414 km</span>
  </h1>
  <h2>
    <span class="m" title="achilles tendonitis isn't helping...">1416/1500 mi</span>
    <span class="d">2111/2414 km</span>
    <span class="y">2016</span>
  </h2>
  <p>
    <span class="m" title="15 days less than 2015, 110 days less than in 2014">1000 miles in 236 days</span>
    <span class="d">1609 km in 34 weeks</span>

    <span class="m" title="31 days less than in 2015">1416 miles in 334 days</span>
    <span class="d">2111 km in 48 weeks</span>

    <span class="m" title="I started swimming this year and my shoulders got larger">2 lbs gained</span>
    <span class="d">0.9 kgs gained</span>

    <span class="m" title="Ran through Funchal in 30°C sun">3 countries 4 cities</span>
    <span class="d d_xl">
      <span>London, UK</span>
      <span>Manchester, UK</span>
      <span>Funchal, Portugal</span>
      <span>New York, NY</span>
    </span>

    <span class="m" title="Running 100 miles a month is a lot..">24x100+ mile months</span>
    <span class="d"><a href="/1000-miles.html" class="2014's 1000 miles">Dec 2014</a> - Nov 2016</span>
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
