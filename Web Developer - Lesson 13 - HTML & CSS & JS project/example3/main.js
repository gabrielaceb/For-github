let num = 0;

function addOneHandle() {
  num++;
  document.getElementById('display').innerHTML = num;
}

function minusOneHandle() {
  num--;
  document.getElementById('display').innerHTML = num;
}

document.getElementById('plus').addEventListener("click", addOneHandle);
document.getElementById('minus').addEventListener("click", minusOneHandle);

