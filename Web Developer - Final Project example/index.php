<?php
include "functions/functions.php";
include "includes/db.php";
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
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/dark-header.css" />
    <link rel="stylesheet" href="assets/css/dark-theme.css" />

    <!--[if IE 6]>

    <![endif]-->
    <script type="text/javascript" src="js/boxOver.js"></script>
</head>

<body>

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
        <!-- end navigation-->

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
                            <div class="row justify-content-center">
                                <?php
                                getpro();
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--plugins-->
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!-- Vector map JavaScript -->
<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="assets/js/index.js"></script>
<!-- App JS -->
<script src="assets/js/app.js"></script>
<!-- Index JS -->
<script src="assets/js/index.js"></script>
</html>