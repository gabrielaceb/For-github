<?php

$con = mysqli_connect("localhost","root","","electronix");

$product_title = $_POST["name_"];
$product_cat = $_POST["categories_"];
$product_brand = $_POST["brands_"];
$product_price = $_POST["price_"];
$product_desc = $_POST["description_"];
$product_keywords = $_POST["product_keywords_"];

//getting image data
$product_image = $_FILES["image"]["name"];
$product_image_tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($product_image_tmp, "product_images/$product_image");

$insert_product = "insert into products (prd_cat,prd_brand,prd_title,prd_price,prd_desc,prd_img,prd_keyword) values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";

$run_product = mysqli_query($con, $insert_product);
echo "sda";
?>