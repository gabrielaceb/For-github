
<?php include "assets/php/functions_admin.php"?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Add Employer</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/impact_logo-01.png" type="image/png" />
    <!--plugins-->
    <link href="../assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet" />
    <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="../assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />
    <link href="../assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
    <link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="../assets/plugins/metismenu/css/metisMenu.min.css " rel="stylesheet" />
    <!-- loader-->
    <link href="../assets/css/pace.min.css" rel="stylesheet" />
    <script src="../assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="../assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="../assets/css/app.css" />
    <link rel="stylesheet" href="../assets/css/dark-header.css" />
    <link rel="stylesheet" href="../assets/css/dark-theme.css" />


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
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->

            <!--end breadcrumb-->
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">General Data</h4>
                    </div>
                    <hr/>

                    <div class="form-group">
                        <input class="form-control" type = "text" placeholder="Name" id="name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Price" id="price">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Description" id="description">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Key words" id="key_words">
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
                            <option value="" >Categories</option>
                            <?php get_cat_option(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control", id="brands">
                            <option value="">Brand</option>
                            <?php get_brands_options(); ?>
                        </select>
                    </div>
                </div>
            </div>



            <button type="button" class="btn btn-light-success m-1 px-5 radius-30" onclick="add_pr()">Add</button>
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



<!-- end of main_container -->
</body>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--plugins-->
<script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!-- Vector map JavaScript -->
<script src="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
<script src="../assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="../assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
<script src="../assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
<script src="../assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="../assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
<script src="../assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
<script src="../assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
<script src="../assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
<script src="../assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>

<script>
    $(document).ready(function () {
        $('#image-uploadify').imageuploadify();
    });
</script>
<!-- App JS -->
<script src="../assets/js/app.js"></script>
<script src="assets/js/add_product.js"></script>
</html>


