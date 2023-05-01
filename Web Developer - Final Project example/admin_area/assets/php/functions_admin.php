<?php
$con = mysqli_connect("localhost", "root", "", "electronix");

if (mysqli_connect_errno()) {
    echo "Failed to connect : " . mysqli_connect_error();
}

if (isset($_POST['add_brand'])) {
    set_brand();
}

function set_brand()
{
    global $con;
    $brand_name = $_POST['brand_name'];

    $sql = "INSERT INTO brands VALUES (Null,'$brand_name')";

    if (mysqli_query($con, $sql)) {
        echo "all done";
    } else {
        echo " error";
    }
}

function count_brands($id)
{
    global  $con;
    $count_ob = "select count(prd_id) from products where prd_brand = $id ";
    $brands_run = mysqli_query($con, $count_ob);
    $row_brands = mysqli_fetch_array($brands_run);
    $num = $row_brands["count(prd_id)"];

    return $num;
}

function count_cat($id)
{
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
        <a href="/admin_area/productlist.php/?cat=$cat_id">
        <li class='list-group-item d-flex justify-content-between align-items-center'>$cat_title
        <span class='badge badge-primary badge-pill'>$num</span>
        </li>
        </a>
        EOT;
    }
}
// counting brands


//getting brands
function getbrands()
{
    global $con;

    $get_brands = "select * from brands ";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $brand_title = $row_brands["brand_title"];
        $brand_id = $row_brands["brand_id"];
        $num = count_brands($brand_id);

        echo
        <<<EOT
        <a href="/admin_area/productlist.php/?brand=$brand_id">
        <li class='list-group-item d-flex justify-content-between align-items-center'>$brand_title
        <span class='badge badge-primary badge-pill'>$num</span>
        </li>
        </a>
        EOT;
    }
}


//getting products randomly
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
									class="btn btn-primary">Buy</a>
								</div>
							</div>
						</div>

            
EOT;
    }
}


//details data
function details()
{
    global $con;

    if (isset($_GET["pro_id"])) {
        $prod_id = $_GET["pro_id"];
        $get_pro = "select * from products where prd_id = '$prod_id'";
        $run_pro = mysqli_query($con, $get_pro);

        while ($row_pro = mysqli_fetch_array($run_pro)) {
            $product_id = $row_pro["prd_id"];
            $product_description = $row_pro["prd_desc"];
            $product_brand = $row_pro["prd_brand"];
            $product_title = $row_pro["prd_title"];
            $product_price = $row_pro["prd_price"];
            $product_image = $row_pro["prd_img"];

            echo "
     
                     <div class='center_title_bar'>$product_title</div>
                     <div class='prod_box_big'>
            <div class='top_prod_box_big'></div>
            <div class='center_prod_box_big'>
              <div class='product_img_big'> <a href='javascript:popImage('admin_area/product_images/$product_image','Some Title')' title='header=[<img src=admin_area/product_images/$product_image>] body=[&nbsp;] fade=[on]'><img src='admin_area/product_images/$product_image' height=200 width=185 alt='' border='0' /></a>
                </div>
              <div class='details_big_box'>
                <div class='product_title_big'>$product_title</div>
                <div class='specifications'>
                $product_description
                </div>
                <div class='prod_price_big'> <span class='price'>Rs $product_price</span></div>
                <a href='details.php?addcart=$product_id' class='addtocart'>add to cart</a> <a href='index.php' class='compare'>Home</a> </div>
            </div>
            <div class='bottom_prod_box_big'></div>
          </div>
    
        ";
        }
    }
}

function get_pro_cat()
{
    if (isset($_GET["cat"])) {
        $cat_id = $_GET["cat"];

        global $con;
        $get_pro_cat = "select * from products where prd_cat ='$cat_id' ";
        $run_pro_cat = mysqli_query($con, $get_pro_cat);
        $count_row = mysqli_num_rows($run_pro_cat);

        if ($count_row == 0) {
            echo "<script>alert('OUT OF STOCK')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }

        while ($row_pro_cat = mysqli_fetch_array($run_pro_cat)) {
            $product_id = $row_pro_cat["prd_id"];
            $product_category = $row_pro_cat["prd_cat"];
            $product_brand = $row_pro_cat["prd_brand"];
            $product_title = $row_pro_cat["prd_title"];
            $product_price = $row_pro_cat["prd_price"];
            $product_image = $row_pro_cat["prd_img"];

            /*echo "<img src = 'admin_area/product_images/$row_pro[prd_img]' height=110 width=90>";*/

            echo "
                    <div class='prod_box'>
            <div class='top_prod_box'></div>
            <div class='center_prod_box'>
              <div class='product_title'><a href='details.php?pro_id=$product_id'>$product_title</a></div>
              <div class='product_img'><a href='details.php?pro_id=$product_id'><img src='admin_area/product_images/$product_image' alt='' border='0' width='90' height='110' /></a></div>
              <div class='prod_price'><span class='price'>Rs $product_price</span></div>
            </div>
            <div class='bottom_prod_box'></div>
            <div class='prod_details_tab'> <a href='index.php?pro_id=$product_id' title='header=[Add to cart] body=[&nbsp;] fade=[on]''><img src='images/cart.gif' alt='' border='0' class='left_bt' /></a>
              <a href='details.php?pro_id=$product_id' class='prod_details'>details</a> </div>
          </div>";
        }
    }
}



//special producr,whats new
function special()
{
    global $con;
    $get_pro = "select * from products order by RAND() LIMIT 0,1";
    $run_pro = mysqli_query($con, $get_pro);
    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $product_id = $row_pro["prd_id"];
        $product_title = $row_pro["prd_title"];
        $product_image = $row_pro["prd_img"];
        $product_price = $row_pro["prd_price"];

        echo "
        <div class='border_box'>
        <div class='product_title'>$product_title</div>
        <div class='product_img'><a href='details.php?pro_id=$product_id'><img src='admin_area/product_images/$product_image' alt='' border='0' width=90 height=110 /></a></div>
        <div class='prod_price'> <span class='price'>Rs $product_price</span></div>
      </div>
        ";
    }
}

function getpro_list()
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
								<img src="/admin_area/product_images/$product_image" class="card-img-top" width="400" height="250"alt="...">
								<div class="card-body">
									<h5 class="card-title">$product_title</h5>
									<p class="card-text">$product_price</p> 
									<a href="/admin_area/assets/php/edit_product.php/?id=$product_id" 
									class="btn btn-primary">Edit</a>
									
									<button class="btn btn-danger" onclick="del_pro($product_id)">Delete</button>
									
								</div>
							</div>
						</div>
EOT;
    }
}


function getip()
{
    $ip = $_SERVER["REMOTE_ADDR"];

    if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }

    return $ip;
}

function cart()
{
    if (isset($_GET["addcart"])) {
        global $con;
        $ip = getip();
        $pro_id = $_GET["addcart"];

        $checkpro = "select * from cart where ip_add = '$ip' AND p_id = '$pro_id'";
        $run_checkpro = mysqli_query($con, $checkpro);

        if (mysqli_num_rows($run_checkpro) > 0) {
            echo "";
        } else {
            $insertpro = "insert into cart (p_id,ip_add,qty) values ('$pro_id','$ip','1')";

            $run_insertpro = mysqli_query($con, $insertpro);
            echo $ip;

            echo "<script>window.open('','_self')</script>";
        }
    }
}

function total_items()
{
    if (isset($_GET["addcart"])) {
        global $con;

        $ip = getip();

        $getitems = "select * from cart where ip_add = '$ip'";
        $run_getitems = mysqli_query($con, $getitems);

        $count_items = mysqli_num_rows($run_getitems);
    } else {
        global $con;

        $ip = getip();

        $getitems = "select * from cart where ip_add = '$ip'";
        $run_getitems = mysqli_query($con, $getitems);

        $count_items = mysqli_num_rows($run_getitems);
    }

    echo $count_items;
}

function get_cat_option()
{
    global $con;

    $get_cats = "select * from categories";
    $run_cats = mysqli_query($con, $get_cats);


    while ($row_cats = mysqli_fetch_array($run_cats)) {
        $cat_title = $row_cats["cat_title"];
        $cat_id = $row_cats["cat_id"];


        echo <<<EOT
        <option value=$cat_id>$cat_title</option>
        EOT;
    }
}

function get_brands_options()
{

    global $con;

    $get_brands = "select * from brands ";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $brand_title = $row_brands["brand_title"];
        $brand_id = $row_brands["brand_id"];

        echo
        <<<EOT
        <option value="$brand_id">$brand_title </option>
        EOT;
    }
}



function total_price()
{
    $total = 0;
    global $con;

    $ip = getip();

    $price = "select * from cart where ip_add = '$ip'";

    $run_price = mysqli_query($con, $price);

    while ($pprice = mysqli_fetch_array($run_price)) {
        $pro_id = $pprice["p_id"];

        $prod_price = "select * from products where prd_id = '$pro_id'";

        $run_pro_price = mysqli_query($con, $prod_price);

        while ($ppprice = mysqli_fetch_array($run_pro_price)) {
            $product_price = [$ppprice["prd_price"]];

            $price_sum = array_sum($product_price);

            $total += $price_sum;

            //echo  $product_price;
        }
    }

    echo $total . "&nbsp;Rs";
}
