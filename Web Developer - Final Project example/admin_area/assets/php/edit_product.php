<?php
$id  = $_GET['id'];

$con = mysqli_connect("localhost","root","","electronix");

echo $id;
$sql = "SELECT * FROM products where prd_id = '$id'";

$run_pro = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($run_pro)) {
    echo "ds";
        $prd_title = $row["prd_title"];
        $prd_brand = $row["prd_brand"];
        $prd_cat = $row["prd_cat"];
        $prd_price = $row["prd_price"];
        $prd_desc = $row["prd_desc"];
        $prd_keyword = $row["prd_keyword"];

    }

echo $prd_title;
?>




<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Syndash - Bootstrap4 Admin Template</title>
    <!--favicon-->
    <link rel="icon" href="../images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="/admin_area/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="/admin_area/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="/admin_area/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="/admin_area/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="/admin_area/assets/css/pace.min.css" rel="stylesheet" />
    <script src="/admin_area/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/admin_area/assets/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="/admin_area/assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="/admin_area/assets/css/app.css" />
    <link rel="stylesheet" href="/admin_area/assets/css/dark-header.css" />
    <link rel="stylesheet" href="/admin_area/assets/css/dark-theme.css" />
</head>

<body>
<!-- wrapper -->
<div class="wrapper">
    <!--header-->
    <!--header-->
    <header>
        <?php
        include "header.php"
        ?>

    </header>
    <!--end header-->
    <!--navigation-->
    <div class="nav-container">

        <?php

        include "nav.php"
        ?>
    </div>
    <!--end navigation-->
    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                    <div class="breadcrumb-title pr-3">User Profile</div>
                    <div class="pl-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">General Data</h4>
                            </div>
                            <hr/>

                            <div class="form-group">
                                <input class="form-control" type = "text" placeholder="Name" value="<?php echo htmlspecialchars
                                ($prd_title)?>" id="name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Price" value="<?php echo htmlspecialchars
                                ($prd_price)?>" id="price">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Description" value="<?php echo htmlspecialchars
                                ($prd_desc)?>" id="description">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Key words" value="<?php echo htmlspecialchars
                                ($prd_keyword)?> "id="key_words">
                            </div>
                        </div>

                    </div>
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">Image</h4>
                            </div>
                            <hr/>
                            <form>
                                <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-0">Brand and Categories</h4>
                        </div>
                        <hr/>

                        <div class="form-group">
                            <select class="form-control" id="categories" >
                                <option value="null">Tip angajat</option>
                                <option value="1"<?php if($prd_cat == 2) echo "selected"; ?> >Laptops</option>
                                <option value="2" <?php if($prd_cat == 2) echo "selected"; ?>>Motherboards</option>
                                <option value="3" <?php if($prd_cat == 3) echo "selected"; ?>>Desktops</option>
                                <option value="4" <?php if($prd_cat == 4) echo "selected"; ?>>Cameras</option>
                                <option value="5" <?php if($prd_cat == 5) echo "selected"; ?>>Mobiles</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="brands">
                                <option value="null" >Studii</option>
                                <option value="1" <?php if($prd_brand == 1) echo "selected"; ?>>HP</option>
                                <option value="2" <?php if($prd_brand == 2) echo "selected"; ?>>Asus</option>
                                <option value="3" <?php if($prd_brand == 3) echo "selected"; ?>>Dell</option>
                                <option value="4" <?php if($prd_brand == 4) echo "selected"; ?>>Nikon</option>
                                <option value="5" <?php if($prd_brand == 5) echo "selected"; ?>>Samsung</option>
                                <option value="7" <?php if($prd_brand == 7) echo "selected"; ?>>Motorola</option>
                                <option value="8" <?php if($prd_brand == 8) echo "selected"; ?>>Intel</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
<!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->
<!--start overlay-->
<div class="overlay toggle-btn-mobile"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javascript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<!--footer -->
<div class="footer">

    </p>
</div>
<!-- end footer -->
</div>
<!-- end wrapper -->
<!--start switcher-->
<div class="switcher-wrapper">
    <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
        <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
        <hr/>
        <h6 class="mb-0">Theme Styles</h6>
        <hr/>
        <div class="d-flex align-items-center justify-content-between">
            <div class="custom-control custom-radio">
                <input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="darkmode">Dark Mode</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
                <label class="custom-control-label" for="lightmode">Light Mode</label>
            </div>
        </div>
        <hr/>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="DarkHeader">
            <label class="custom-control-label" for="DarkHeader">Dark Header</label>
        </div>
        <hr/>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="DarkMenu">
            <label class="custom-control-label" for="DarkMenu">Dark Menu</label>
        </div>
        <hr/>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="ColorLessIcons">
            <label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
        </div>
    </div>
</div>
<!--end switcher-->
<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/admin_area/assets/js/jquery.min.js"></script>
<script src="/admin_area/assets/js/popper.min.js"></script>
<script src="/admin_area/assets/js/bootstrap.min.js"></script>
<!--plugins-->
<script src="/admin_area/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="/admin_area/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="/admin_area/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!-- App JS -->
<script src="/admin_area/assets/js/app.js"></script>
<script src="/admin_area/assets/js/update_user.js"></script>
</body>

</html>