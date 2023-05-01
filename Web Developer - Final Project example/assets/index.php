<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$db="companie_exemplu";

$conn = mysqli_connect($servername, $username, $password, $db);

$sql = "SELECT * FROM `analiza_angajat` where id_aa = 2021";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {

    $mucitori = $row["mucitori"];
    $personal_operativ = $row["personal_operativ"];
    $paza = $row["paza"];
    $functie_conducere = $row["functie_conducere"];
    $studii_liceu_postl = $row["studii_liceu_postl"];
    $maistri = $row["maistri"];
    $superioare = $row["superioare"];
    $specialisti = $row["specialisti"];
    $salariati = $row["salariati"];
    $partt = $row["partt"];
    $temorari= $row["temorari"];
    $contract = $row["contract"];


}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin </title>
    <!--favicon-->
    <link rel="icon" href="assets/images/logo.png" type="image/png" />
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
    <!--end navigation-->
    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">

                <!--end row-->
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-6">

                        <div class="card radius-15">
                            <div class="card-body">
                                <div class="d-lg-flex align-items-center">
                                    <div>
                                        <h5 class="mb-4">Tip de angajați</h5>
                                    </div>
                                </div>
                                <div id="chart5"></div>
                            </div>
                            <ul class="list-group list-group-flush mb-0">
                                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Muncitori
                                    <span id="munc" class="badge badge-danger badge-pill"><?php echo htmlspecialchars($mucitori)?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Pesronal operativ
                                    <span id="po" class="badge badge-primary badge-pill"><?php echo htmlspecialchars($personal_operativ)?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Paza
                                    <span id="paza" class="badge badge-warning badge-pill"><?php echo htmlspecialchars($paza)?></span>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-6">

                        <div class="card radius-15">
                            <div class="card-body">
                                <div class="d-lg-flex align-items-center">
                                    <div>
                                        <h5 class="mb-4">Studii</h5>
                                    </div>
                                </div>
                                <div id="chart6"></div>
                            </div>
                            <ul class="list-group list-group-flush mb-0">
                                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Liceu
                                    <span id="studii_liceu_postl" class="badge badge-info badge-pill"><?php echo htmlspecialchars($studii_liceu_postl)?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Superioare
                                    <span id="superioare" class="badge badge-primary badge-pill"><?php echo htmlspecialchars($superioare)?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Maistrii
                                    <span id="maistri" class="badge badge-warning badge-pill"><?php echo htmlspecialchars($maistri)?></span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!--end row-->


                <div class="card-deck flex-column flex-lg-row">
                    <div class="card radius-15 bg-info">
                        <div class="card-body text-center">
                            <div class="widgets-icons mx-auto rounded-circle bg-white"><i class='bx bx-time'></i>
                            </div>
                            <h4 class="mb-0 font-weight-bold mt-3 text-white"><?php echo htmlspecialchars($temorari)?></h4>
                            <p class="mb-0 text-white">Angajați temorari</p>
                        </div>
                    </div>
                    <div class="card radius-15 bg-wall">
                        <div class="card-body text-center">
                            <div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-bookmark-alt'></i>
                            </div>
                            <h4 class="mb-0 font-weight-bold mt-3 text-white"><?php echo htmlspecialchars($contract)?></h4>
                            <p class="mb-0 text-white">În bază de contract</p>
                        </div>
                    </div>
                    <div class="card radius-15 bg-rose">
                        <div class="card-body text-center">
                            <div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-user'></i>
                            </div>
                            <h4 class="mb-0 font-weight-bold mt-3 text-white"><?php echo htmlspecialchars($functie_conducere)?></h4>
                            <p class="mb-0 text-white">Conducere</p>
                        </div>
                    </div>
                </div>
                <div class="card-deck flex-column flex-lg-row">
                    <div class="card radius-15 bg-danger">
                        <div class="card-body text-center">
                            <div class="widgets-icons mx-auto rounded-circle bg-white"><i class='bx bx-user'></i>
                            </div>
                            <h4 class="mb-0 font-weight-bold mt-3 text-white"><?php echo htmlspecialchars($specialisti)?></h4>
                            <p class="mb-0 text-white">Specialistii</p>
                        </div>
                    </div>
                    <div class="card radius-15 bg-primary">
                        <div class="card-body text-center">
                            <div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-group'></i>
                            </div>
                            <h4 class="mb-0 font-weight-bold mt-3 text-white"><?php echo htmlspecialchars($salariati)?></h4>
                            <p class="mb-0 text-white">Salariați generaliști</p>
                        </div>
                    </div>
                    <div class="card radius-15 bg-success">
                        <div class="card-body text-center">
                            <div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bxs-timer'></i>
                            </div>
                            <h4 class="mb-0 font-weight-bold mt-3 text-white"><?php echo htmlspecialchars($partt)?></h4>
                            <p class="mb-0 text-white">Part Time</p>
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

</body>

</html>