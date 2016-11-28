<?php $third_party_css = "<link href=\"http://fonts.googleapis.com/css?family=Oswald:400,700\" rel=\"stylesheet\" type=\"text/css\">
" ?>
<?php include "includes/_html_header.php"; ?>
<section id="miles">
  <h1>
    <span class="m">1000 MILES</span>
    <span class="d">1609 km</span>
    <span class="y">2014</span>
  </h1>
  <p>
    <span class="m">346 days</span>
    <span class="d">49 weeks</span>

    <span class="m">171 runs</span>
    <span class="d">3 - 4 runs/week avg.</span>

    <span class="m">5.8mi avg.</span>
    <span class="d">9.33km avg.</span>

    <span class="m">6.22mi modal</span>
    <span class="d">10km modal</span>

    <span class="m">8:17 avg. per mile</span>
    <span class="d">7.24mph avg. speed</span>

    <span class="m">138:03:11 total time</span>
    <span class="d">48 mins/run avg.</span>

    <span class="m">120910 calories</span>
    <span class="d">707 calories/run avg.</span>

    <span class="m">401103 NikeFuel</span>
    <span class="d">2345 NikeFuel/run avg.</span>

    <span class="m" title="Slightly more complex story... January I was 11.5 stones/161 lbs/73 kgs. March I got injured, April I worked away from home in Bristol, CT and ate well and barely ran; I returned at 12 stone/168 lbs/76 kgs. Since then I lost 1 stone/14 lbs/6.35 kgs">7 lbs lost</span>
    <span class="d">3.2 kgs lost</span>

    <span class="m">3 countries 9 cities</span>
    <span class="d d_xl">
      <span>London, UK</span>
      <span>Manchester, UK</span>
      <span>Bristol, CT</span>
      <span>New York, NY</span>
      <span>San Francisco, CA</span>
      <span>Mountain View, CA</span>
      <span>Cupertino, CA</span>
      <span>Los Angeles, CA</span>
      <span>Paris, FR</span>
    </span>

    <span class="m">50 mi in 5 days</span>
    <span class="d">March 2nd - 6th</span>

    <span class="m">20 10kms in 20 days</span>
    <span class="d">July 7th - 26th</span>

    <span class="m">Sprained left ankle</span>
    <span class="d d_l">
      <span>March 18th</span>
      <span>couldn't walk for 3 days</span>
    </span>
  </p>
</section>
<script>
  var els = document.querySelectorAll(".m");
  for (var i = 0; i < els.length; ++i) {
    els[i].addEventListener("click", function(){
      this.classList.toggle("active");
    }, false);
  }
</script>
<?php include "includes/_html_footer.php"; ?>
