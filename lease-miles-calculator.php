<?php
$meta_title = "13twelve | Front end web developer. Specialising in HTML, CSS and JavaScript.";
$meta_social_title = "13twelve";
$meta_description = "The portfolio of front end web developer Mike Byrne. Specialising in HTML, CSS and JavaScript.";
$meta_url = "http://www.thirteentwelve.com/";
$meta_image = "http://www.thirteentwelve.com/images/og.jpg";
?>
<?php include "includes/_html_header.php"; ?>

<section id="lease-miles-calculator">
  <dl>
    <dt>Miles driven:</dt>
    <dd>
      <input id="milesDriven" type="text" value="1312" pattern="[0-9]"> miles
    </dd>
  </dl>

  <p>
    <button id="calculate">Calculate</button>
  </p>

  <dl>
    <dt>Target miles to date:</dt>
    <dd id="targetMilesToDate"></dd>
    <dt>Diff. from target:</dt>
    <dd id="milesDiff"></dd>
  </dl>

  <div class="bars">
    <div class="bars__bar bars__bar--target" id="barMilesTarget" title="target"></div>
    <div class="bars__bar bars__bar--driven" id="barMilesDriven" title="driven"></div>
    <i class="bars__label-total-miles" id="labelTotalMiles"></i>
  </div>

  <div class="cols">
    <dl class="col">
      <dt>Date Start (d/m/y):</dt>
      <dd>
        <input id="dateStart_day" type="text" value="31" pattern="[0-9]">
        <input id="dateStart_month" type="text" value="10" pattern="[0-9]">
        <input id="dateStart_year" type="text" value="2018" pattern="[0-9]">
      </dd>
      <dt>Lease Term:</dt>
      <dd>
        <input id="leaseTerm" type="text" value="24" pattern="[0-9]"> months
      </dd>
    </dl>
    <dl class="col">
      <dt>Start miles:</dt>
      <dd>
        <input id="startMiles" type="text" value="0" pattern="[0-9]"> miles
      </dd>
      <dt>Miles Per Annum:</dt>
      <dd>
        <input id="milesPerAnnum" type="text" value="9000" pattern="[0-9]"> miles
      </dd>
    </dl>
  </div>

  <div class="cols">
    <dl class="col">
      <dt>Date Today:</dt>
      <dd id="dateToday"></dd>
      <dt>Date End:</dt>
      <dd id="dateEnd"></dd>
      <dt>Days into lease:</dt>
      <dd id="daysIntoLease"></dd>
      <dt>Total days of lease:</dt>
      <dd id="totalDays"></dd>
      <dt>Total Miles Allowed:</dt>
      <dd id="totalMiles"></dd>
      <dt>Lease miles available per day:</dt>
      <dd id="leaseMilesPerDay"></dd>
      <dt>Lease miles available per week:</dt>
      <dd id="leaseMilesPerWeek"></dd>
    </dl>
    <dl class="col">
      <dt>% diff:</dt>
      <dd id="milesDiffPercent"></dd>
      <dt>Miles remaining total:</dt>
      <dd id="milesRemaining"></dd>
      <dt>Adjusted miles available per day:</dt>
      <dd id="milesRemainingPerDay"></dd>
      <dt>Adjusted miles available per week:</dt>
      <dd id="milesRemainingPerWeek"></dd>
    </dl>
  </div>
</section>

<script>
  var oneDay = 24 * 60 * 60 * 1000;
  var oneWeek = oneDay * 7;
  var monthNames = [
    "January", "February", "March",
    "April", "May", "June", "July",
    "August", "September", "October",
    "November", "December"
  ];
  var locked = false;

  if (typeof(Storage) !== "undefined") {
    document.getElementById("startMiles").value = parseInt(localStorage.getItem("startMiles", startMiles)) || 0;
    document.getElementById("milesDriven").value = parseInt(localStorage.getItem("milesDriven", milesDriven)) || 730;
    document.getElementById("dateStart_day").value = parseInt(localStorage.getItem("dateStart_day",dateStart_day)) || 20;
    document.getElementById("dateStart_month").value = (parseInt(localStorage.getItem("dateStart_month", dateStart_month)) + 1) || 5;
    document.getElementById("dateStart_year").value = parseInt(localStorage.getItem("dateStart_year", dateStart_year)) || 2016;
    document.getElementById("leaseTerm").value = parseInt(localStorage.getItem("leaseTerm", leaseTerm)) || 24;
    document.getElementById("milesPerAnnum").value = parseInt(localStorage.getItem("milesPerAnnum", milesPerAnnum)) || 9000;
  }

  function update(event) {
    if (locked) {
      return;
    }
    if (event) {
      locked = true;
      var that = this;
      that.blur();
      that.classList.add('js-loading');
      setTimeout(function(){
        that.classList.remove('js-loading');
        locked = false;
      },500);
    }
    try {
      var startMiles = parseInt(document.getElementById("startMiles").value);
      var milesDriven = parseInt(document.getElementById("milesDriven").value);
      var dateStart_day = parseInt(document.getElementById("dateStart_day").value);
      var dateStart_month = parseInt(document.getElementById("dateStart_month").value) - 1;
      var dateStart_year = parseInt(document.getElementById("dateStart_year").value);
      var leaseTerm = parseInt(document.getElementById("leaseTerm").value);
      var milesPerAnnum = parseInt(document.getElementById("milesPerAnnum").value);

      if (typeof(Storage) !== "undefined") {
        localStorage.setItem("startMiles", startMiles);
        localStorage.setItem("milesDriven", milesDriven);
        localStorage.setItem("dateStart_day",dateStart_day);
        localStorage.setItem("dateStart_month", dateStart_month);
        localStorage.setItem("dateStart_year", dateStart_year);
        localStorage.setItem("leaseTerm", leaseTerm);
        localStorage.setItem("milesPerAnnum", milesPerAnnum);
      }

      var dateStart = new Date(dateStart_year, dateStart_month, dateStart_day);
      var dateEnd = new Date(new Date(dateStart).setMonth(dateStart.getMonth()+leaseTerm));
      var totalMiles = milesPerAnnum * (leaseTerm / 12);
      var totalDays = Math.round(Math.abs((dateStart.getTime() - dateEnd.getTime())/(oneDay)));
      var dateToday = new Date();
      var daysIntoLease = Math.round(Math.abs((dateStart.getTime() - dateToday.getTime())/(oneDay)));
      var leaseMilesPerDay = totalMiles / totalDays;
      var leaseMilesPerWeek = leaseMilesPerDay * 7;
      var targetMilesToDate = leaseMilesPerDay * daysIntoLease;
      var targetMilesToDatePercentageOfTotal = (targetMilesToDate * 100) / totalMiles;
      milesDriven = milesDriven - startMiles;
      var milesDiff = milesDriven - targetMilesToDate;
      var milesDiffPercent = (milesDiff * 100)/targetMilesToDate;
      var milesRemaining = totalMiles - milesDriven;
      var milesDrivenPercentageOfTotal = (milesDriven * 100) / totalMiles;
      var milesRemainingPerDay = milesRemaining / (totalDays - daysIntoLease);
      var milesRemainingPerWeek = milesRemainingPerDay * 7;

      document.getElementById("dateEnd").textContent = dateEnd.getDate() + " " + monthNames[dateEnd.getMonth()] + " " + dateEnd.getFullYear();
      document.getElementById("totalMiles").textContent = totalMiles;
      document.getElementById("totalDays").textContent = totalDays;
      document.getElementById("dateToday").textContent = dateToday.getDate() + " " + monthNames[dateToday.getMonth()] + " " + dateToday.getFullYear();
      document.getElementById("daysIntoLease").textContent = daysIntoLease;
      document.getElementById("leaseMilesPerDay").textContent = Math.floor(leaseMilesPerDay);
      document.getElementById("leaseMilesPerWeek").textContent = Math.floor(leaseMilesPerWeek);
      document.getElementById("targetMilesToDate").textContent = Math.floor(targetMilesToDate);
      document.getElementById("milesDiff").textContent = Math.round(milesDiff);
      document.getElementById("milesDiffPercent").textContent = Math.round(milesDiffPercent) + "%";
      document.getElementById("milesRemaining").textContent = Math.round(milesRemaining);
      document.getElementById("milesRemainingPerDay").textContent = Math.round(milesRemainingPerDay);
      document.getElementById("milesRemainingPerWeek").textContent = Math.round(milesRemainingPerWeek);
      document.getElementById("labelTotalMiles").textContent = totalMiles;

      if (event) {
        setTimeout(function(){
          document.getElementById("barMilesTarget").style.width = targetMilesToDatePercentageOfTotal + "%";
          document.getElementById("barMilesDriven").style.width = milesDrivenPercentageOfTotal + "%";
        },500);
      } else {
        document.getElementById("barMilesTarget").style.width = targetMilesToDatePercentageOfTotal + "%";
        document.getElementById("barMilesDriven").style.width = milesDrivenPercentageOfTotal + "%";
      }

      if (milesDiff > 0) {
        document.getElementById("milesDiff").className = "too-many";
        document.getElementById("barMilesTarget").style.zIndex = 2;
      } else {
        document.getElementById("milesDiff").className = "too-few";
        document.getElementById("barMilesTarget").style.zIndex = "initial";
      }
    } catch(err) {
      alert("Did you put numbers in the start date, lease term, miles per annum and miles driven?");
    }
  }

  document.getElementById("calculate").addEventListener("click",update);

  update();
</script>
<?php include "includes/_html_footer.php"; ?>
