

function myFunction() {
    const inpObj = document.getElementById("id1");
    if (!inpObj.checkValidity()) {
      document.getElementById("message").innerHTML = inpObj.validationMessage;
    } else {
      document.getElementById("message").innerHTML = "Input OK";
    }
}

