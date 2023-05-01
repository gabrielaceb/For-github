var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("test").innerHTML = this.responseText;
        }
    };
    let aux = "tip"

    let car = document.getElementById("car").innerText;
    xmlhttp.open("GET","../php/show_users.php?car="+car,true);
    xmlhttp.send();






