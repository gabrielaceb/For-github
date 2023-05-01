let mySeconds;
let intervalHandle;

function tick() {
  var secDisplay = document.getElementById("seconds");
  var minDisplay = document.getElementById("minutes");

  var min = Math.floor(mySeconds / 60);
  var sec = mySeconds - min * 60;

  if (sec < 10) {
    sec = "0" + sec;
  }

  if (min < 10) {
    min = "0" + min;
  }

  secDisplay.innerHTML = sec + "s";
  minDisplay.innerHTML = min + "m";

  if (mySeconds === 0) {
    alert("Done");
    clearInterval(intervalHandle);
  }
  mySeconds--;
}

function startCounter() {
  var myInput = document.getElementById("inputArea").value;
  if (isNaN(myInput)) {
    alert("Type a valid number please");
    return;
  }
  mySeconds = myInput;

  intervalHandle = setInterval(tick, 1000);

  document.getElementById("inputArea").value = "";
}

function stopCounter() {
  seconds.innerHTML = "00s";
  minutes.innerHTML = "00m";
  clearInterval(intervalHandle);
}

document.getElementById("start").addEventListener("click", startCounter);
document.getElementById("stop").addEventListener("click", stopCounter);
