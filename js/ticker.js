let rate = 0.1424; // the average rate since August 2016
let intialDate = new Date("2016-08-01");

var initialNumber;

// Now we have downloads at about one every 2.8 seconds
function startTimer() {
  var myInterval = setInterval(tick, 2800);
}


function tick(initialRun) {


  let el = document.getElementById("ticker");

  // work out the initial number which is around 31 million since August 2016
  if (initialRun) {
    const now = new Date();
    const diffTime = Math.abs(now - intialDate);
    const diffSeconds = Math.ceil(diffTime / 1000);
    var calc = diffSeconds * rate;
    initialNumber = Math.ceil(calc);
  }

  var num = initialNumber+=1;

  el.innerHTML = numberWithCommas(num);
}

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

tick(true);
startTimer();
