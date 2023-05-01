<?php

$con = mysqli_connect("localhost","root","","electronix");

$product_title = $_POST["name_"];
$product_cat = $_POST["categories_"];
$product_brand = $_POST["brands_"];
$product_price = $_POST["price_"];
$product_desc = $_POST["description_"];
$product_keywords = $_POST["key_words_"];

echo  $product_brand;
//getting image data
$product_image = $_FILES["image-uploadify"]["name"];
echo $product_image;


$insert_product = "insert into products (prd_cat,prd_brand,prd_title,prd_price,prd_desc,prd_img,prd_keyword) values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$image_name','$product_keywords')";
uploadProdImg($product_image);


$run_product = mysqli_query($con, $insert_product);

function uploadProdImg($img)
{
    $target_dir = "../product_images";
    $target_file = $target_dir.basename($img["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($img["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($img["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        return false;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($img["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($img["name"])) . " has been uploaded.";
            return true;
        } else {
            echo "Sorry, there was an error uploading your file.";
            return false;
        }
    }
}

if ($run_product) {
    echo "Added ";

}
    else{
        echo "Something went Wrong";
    }



?>