<?php
include "assets/php/functions_admin.php";
cart();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin </title>
    <!--favicon-->
    <link rel="icon" href="assets/images/impact_logo-01.png" type="image/png" />
    <!-- Vector CSS -->
    <link href="/admin_area/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--plugins-->
    <link href="/admin_area/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="/admin_area/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="/admin_area/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
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

    <!--[if IE 6]>

    <![endif]-->
    <script type="text/javascript" src="js/boxOver.js"></script>
</head>

<body>
<!-- wrapper -->
<div class="wrapper">
    <!--header-->
    <header>
        <?php
        include "assets/php/header.php"
        ?>

    </header>
    <!--end header-->
    <!--navigation-->
    <?php
    include "assets/php/nav.php"
    ?>
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">


                <div class="row">
                    <div class="col">

                        <div class="card radius-15">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4 class="mb-0">Brands</h4>
                                </div>
                                <hr>
                                <ul class="list-group">
                                    <?php
                                    getbrands();
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="row ">
                            <?php
                            getpro_list();

                            ?>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card radius-15">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4 class="mb-0">Categories</h4>
                                </div>
                                <hr>
                                <ul class="list-group">
                                    <?php
                                    getcats();
                                    ?>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end of main_container -->
</body>
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
<!-- Vector map JavaScript -->
<script src="/admin_area/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/admin_area/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/admin_area/assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
<script src="/admin_area/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="/admin_area/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
<script src="/admin_area/assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
<script src="/admin_area/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="/admin_area/assets/js/add_product.js"></script>
<!-- App JS -->
<script src="/admin_area/assets/js/app.js"></script>
</html>