<?php
$id  = $_POST['id_'];

$con = mysqli_connect("localhost","root","","electronix");

$sql = "Delete FROM products where  prd_id= '$id'";
$con->query($sql);

?>"