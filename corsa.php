<!DOCTYPE html>
<html dir="ltr" lang="en-UK">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Corsa</title>
    <link href="/stylesheets/application.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/images/corsa/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/images/corsa/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/images/corsa/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/images/corsa/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/images/corsa/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/images/corsa/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/images/corsa/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/images/corsa/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/images/corsa/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/images/corsa/apple-touch-icon-180x180.png" />
  </head>
  <body>
    <div id="thirteentwelve">
      <header>
        <span class="logo">
          <svg class="logo__vauxhall" viewbox="0 0 24 24"><path d="M24.007 12c0 6.627-5.372 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-15 8.684a10.346 10.346 0 0 1-.744-2.33c-.342-.055-.937-.174-1.464-.401-.25-.108-.592-.207-.532-.116.067.102.149.158.198.231.056.086-.538-.043-.99-.358-.388-.272-.514-.349-.953-.187a3.365 3.365 0 0 0-.553.27 10.004 10.004 0 0 0 4.39 3.373l.647-.482zm4.41-13.104c.055.03.359.182.55.27.19.087.328.066.38.045.05-.021.22-.148.358-.264.094-.077.042-.099-.102-.163a2.764 2.764 0 0 0-.794-.2h-.026c-.072 0-.148.03-.302.148-.075.059-.162.109-.064.164zm6.273 3.183c-.028-4.617-4.328-7.777-9.365-6.833-.9.169-1.575.28-.03-.677.951-.59 2.217-.983 3.437-1.067a10.122 10.122 0 0 0-1.701-.144c-5.514 0-9.984 4.436-9.984 9.908 0 .825.103 1.627.295 2.394.31-.109.506-.155.506-.155a9.489 9.489 0 0 1 .134-4.764l-.002.007.004-.014a9.392 9.392 0 0 1 1.799-3.387l5.293-.002-2.08 3.68H3.902a8.65 8.65 0 0 0-.063 4.584c.022.043.46.865 1.927.86.235-.002.91-.007 2.137-.03a.264.264 0 0 0 .203-.096.433.433 0 0 0 .09-.234c.022-.164.045-.32.005-.39-.053-.09-.203-.069-.535.16-.233.16-.319.089-.316-.11-.009-.264.159-.807.466-1.59.14-.358.352-.858.383-.936.172-.43.362-.627.053-.512-.632.235.439-1.261 1.063-2.006.29-.346.596-.6.28-.546-.479.08.745-1.063 1.258-1.391.345-.222.498-.368.65-.526.458-.482.517-.629.898-1.029.376-.393.638-.564.761-.564.095 0 .108.1.03.278-.369.83-.494 1.36 1.284 1.254.97-.059.91.727.912.727 2.614.121 1.166 2.35 1.161 2.337-.26-.811-1.16-.766-1.77-.675-.536.079-.095.17.065.223.997.333.798.698.71.68-1.37-.27-1.757.47-1.759 1.186-.006 2.14 1.019 4.17 2.688 4.774 1.863-.786 3.225-2.302 3.207-5.374zM5.654 6.856c.052.26.426 1.947.468 2.121.046.196.085.286.254.286h.904c.145 0 .187-.032.268-.172.132-.23 1.315-2.266 1.315-2.266s.127-.199-.152-.199h-.543c-.046 0-.094.024-.126.08a536.81 536.81 0 0 0-1.104 1.962l-.399-1.914s-.008-.128-.163-.128l-.537-.001c-.11.001-.227.02-.185.231z"/></svg>
        </span>
      </header>
      <main id="content">
        <section id="lease-miles-calculator">
          <dl>
            <dt>Odometer:</dt>
            <dd>
              <input id="odometer" type="text" value="0" pattern="[0-9]"> miles
            </dd>
          </dl>

          <p>
            <button id="calculate">Calculate</button>
          </p>

          <dl>
            <dt>Miles driven</dt>
            <dd id="milesDriven"></dd>
            <dt>Target miles to date:</dt>
            <dd id="targetMilesToDate"></dd>
            <dt>Diff. from target:</dt>
            <dd id="milesDiff"></dd>
          </dl>

          <div class="bars">
            <div class="bars__bar bars__bar--target" id="barMilesTarget" title="target"></div>
            <div class="bars__bar bars__bar--driven" id="barodometer" title="driven"></div>
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
            </dl>
            <dl class="col">
              <dt>Start miles:</dt>
              <dd>
                <input id="startMiles" type="text" value="0" pattern="[0-9]"> miles
              </dd>
              <dt>Insured miles:</dt>
              <dd>
                <input id="insuredMiles" type="text" value="9000" pattern="[0-9]"> miles
              </dd>
            </dl>
          </div>

          <div class="cols">
            <dl class="col">
              <dt>Date today:</dt>
              <dd id="dateToday"></dd>
              <dt>Date end (at midnight):</dt>
              <dd id="dateEnd"></dd>
              <dt>Days into policy:</dt>
              <dd id="daysIntoLease"></dd>
              <dt>Total days of policy:</dt>
              <dd id="totalDays"></dd>
              <dt>Total miles allowed:</dt>
              <dd id="totalMiles"></dd>
              <dt>Policy miles available per day:</dt>
              <dd id="leaseMilesPerDay"></dd>
              <dt>Policy miles available per week:</dt>
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
          var nameSpace = 'corsa';
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
            document.getElementById("startMiles").value = parseInt(localStorage.getItem(nameSpace+"_ins_startMiles", startMiles)) || 56674;
            document.getElementById("odometer").value = parseInt(localStorage.getItem(nameSpace+"_ins_odometer", odometer)) || 56674;
            document.getElementById("dateStart_day").value = parseInt(localStorage.getItem(nameSpace+"_ins_dateStart_day",dateStart_day)) || 13;
            document.getElementById("dateStart_month").value = (parseInt(localStorage.getItem(nameSpace+"_ins_dateStart_month", dateStart_month)) + 1) || 1;
            document.getElementById("dateStart_year").value = parseInt(localStorage.getItem(nameSpace+"_ins_dateStart_year", dateStart_year)) || 2024;
            document.getElementById("insuredMiles").value = parseInt(localStorage.getItem(nameSpace+"_ins_insuredMiles", insuredMiles)) || 10000;
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
              var odometer = parseInt(document.getElementById("odometer").value);
              var dateStart_day = parseInt(document.getElementById("dateStart_day").value);
              var dateStart_month = parseInt(document.getElementById("dateStart_month").value) - 1;
              var dateStart_year = parseInt(document.getElementById("dateStart_year").value);
              var insuredMiles = parseInt(document.getElementById("insuredMiles").value);

              if (typeof(Storage) !== "undefined") {
                localStorage.setItem(nameSpace+"_ins_startMiles", startMiles);
                localStorage.setItem(nameSpace+"_ins_odometer", odometer);
                localStorage.setItem(nameSpace+"_ins_dateStart_day",dateStart_day);
                localStorage.setItem(nameSpace+"_ins_dateStart_month", dateStart_month);
                localStorage.setItem(nameSpace+"_ins_dateStart_year", dateStart_year);
                localStorage.setItem(nameSpace+"_ins_insuredMiles", insuredMiles);
              }

              var dateStart = new Date(dateStart_year, dateStart_month, dateStart_day);
              var dateEnd = new Date(new Date(dateStart).setMonth(dateStart.getMonth()+12));
              dateEnd = new Date(dateEnd.setDate(dateEnd.getDate()-1));
              var totalMiles = insuredMiles;
              var totalDays = Math.round(Math.abs((dateStart.getTime() - dateEnd.getTime())/(oneDay)));
              var dateToday = new Date();
              dateToday = new Date(dateToday.setHours(0,0,0,0));
              var daysIntoLease = Math.round(Math.abs((dateStart.getTime() - dateToday.getTime())/(oneDay)));
              var milesDriven = odometer - startMiles;
              var leaseMilesPerDay = totalMiles / totalDays;
              var leaseMilesPerWeek = leaseMilesPerDay * 7;
              var targetMilesToDate = leaseMilesPerDay * daysIntoLease;
              var targetMilesToDatePercentageOfTotal = (targetMilesToDate * 100) / totalMiles;
              odometer = odometer - startMiles;
              var milesDiff = odometer - targetMilesToDate;
              var milesDiffPercent = (milesDiff * 100)/targetMilesToDate;
              var milesRemaining = totalMiles - odometer;
              var odometerPercentageOfTotal = (odometer * 100) / totalMiles;
              var milesRemainingPerDay = milesRemaining / (totalDays - daysIntoLease);
              var milesRemainingPerWeek = milesRemainingPerDay * 7;

              document.getElementById("dateEnd").textContent = dateEnd.getDate() + " " + monthNames[dateEnd.getMonth()] + " " + dateEnd.getFullYear();
              document.getElementById("milesDriven").textContent = milesDriven;
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
                  document.getElementById("barodometer").style.width = odometerPercentageOfTotal + "%";
                },500);
              } else {
                document.getElementById("barMilesTarget").style.width = targetMilesToDatePercentageOfTotal + "%";
                document.getElementById("barodometer").style.width = odometerPercentageOfTotal + "%";
              }

              if (milesDiff > 0) {
                document.getElementById("milesDiff").className = "too-many";
                document.getElementById("barMilesTarget").style.zIndex = 2;
              } else {
                document.getElementById("milesDiff").className = "too-few";
                document.getElementById("barMilesTarget").style.zIndex = "initial";
              }
            } catch(err) {
              alert("Did you put numbers in the start date, miles per annum and miles driven?");
            }
          }

          document.getElementById("calculate").addEventListener("click",update);

          update();
        </script>
      </main>
    </div>
  </body>
</html>
