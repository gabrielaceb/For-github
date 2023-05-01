<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="electronix";

$con = mysqli_connect($servername, $username, $password, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

function count_brands($id){
    global  $con;
    $count_ob = "select count(prd_id) from products where prd_brand = $id ";
    $brands_run = mysqli_query($con, $count_ob);
    $row_brands = mysqli_fetch_array($brands_run);
    $num = $row_brands["count(prd_id)"];

    return $num;
}

function count_cat($id){
    global  $con;
    $count_ob = "select count(prd_id) from products where prd_cat = $id ";
    $cat_run = mysqli_query($con, $count_ob);
    $row_cat = mysqli_fetch_array($cat_run);
    $num = $row_cat["count(prd_id)"];

    return $num;
}

//getting categories

function getcats()
{
    global $con;

    $get_cats = "select * from categories";
    $run_cats = mysqli_query($con, $get_cats);


    while ($row_cats = mysqli_fetch_array($run_cats)) {
        $cat_title = $row_cats["cat_title"];
        $cat_id = $row_cats["cat_id"];
        $num = count_cat($cat_id);

        echo <<<EOT
        <a href="../?cat=$cat_id">
        <li class='list-group-item d-flex justify-content-between align-items-center'>$cat_title
        <span class='badge badge-primary badge-pill'>$num</span>
        </li>
        </a>
        EOT;
    }
}

//getting brands

function getbrands()
{
    global $con;

    $get_brands = "select * from brands";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $brand_title = $row_brands["brand_title"];
        $brand_id = $row_brands["brand_id"];
        $num = count_brands($brand_id);

        echo
        <<<EOT
        <a href="../?brand=$brand_id">
        <li class='list-group-item'>$brand_title
        <span class='badge badge-primary badge-pill'>$num</span>
        </li>
        </a>
        EOT;
    }
}

function getpro()
{
    global $con;
    if (isset($_GET["cat"])) {
        $cat_id = $_GET["cat"];
        $get_pro = "select * from products where prd_cat='$cat_id' ";
    }
    if (isset($_GET["brand"])) {
        $brand_id = $_GET["brand"];
        $get_pro = "select * from products where prd_brand='$brand_id' ";
    }
    if (!isset($_GET["cat"]) && !isset($_GET["brand"])) {
        $get_pro = "select * from products";
    }

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $product_id = $row_pro["prd_id"];
        $product_category = $row_pro["prd_cat"];
        $product_brand = $row_pro["prd_brand"];
        $product_title = $row_pro["prd_title"];
        $product_price = $row_pro["prd_price"];
        $product_image = $row_pro["prd_img"];


        echo
        <<<EOT
            <div class="col-12 col-lg-4 col-xl-4">
				<div class="card">
					<img src="admin_area/product_images/$product_image" class="card-img-top" width="400" height="250"alt="...">
						<div class="card-body">
							<h5 class="card-title">$product_title</h5>
							<p class="card-text">$product_price</p> <a href="#" 
							class="btn btn-primary">Buy this product</a>
						</div>
				</div>
			</div>
EOT;
    }
}
