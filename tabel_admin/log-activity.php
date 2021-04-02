</<?php 

session_start();

require '../function.php';

 if (!isset($_SESSION["admin"]) ) {
    header("Location: ../");
    exit;
 }

?>


<!doctype html>
<html lang="en">


<head>
        <meta charset="utf-8" />
        <title>Admin | <?php echo $_SESSION["username"]; ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../img/icon/logo.png">

        <link href="assets/libs/chartist/chartist.min.css" rel="stylesheet">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>

    <body data-sidebar="dark">
    <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="https://dompetdonasi.com/tabel_admin/" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="../img/icon/logo.png" alt="" height="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="../img/icon/logo.png" alt="" height="50">
                                </span>
                            </a>

                            <a href="https://dompetdonasi.com/tabel_admin/" class="logo logo-light">
                                <span class="logo-sm mt-3">
                                    <img src="../img/icon/logo.png" alt="" height="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="../img/icon/logo.png" alt="" height="50">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        
                        <div class="d-none d-sm-block">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="../img/icon/logo.png"
                                    alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item text-danger" href="../admin/logout.php"><i class="bx bx-power-off font-size-17 align-middle mr-1 text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
   <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">
                <div data-simplebar class="h-100">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="https://dompetdonasi.com/tabel_admin/" class="waves-effect">
                                <i class="ti-home"></i><span class="badge badge-pill badge-primary float-right"></span>
                                <span>Dashboard</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="grafik" class="waves-effect">
                                <i class="ti-pie-chart"></i><span class="badge badge-pill badge-primary float-right"></span>
                                <span>Grafik Bulanan</span>
                                </a>
                            </li>
                         
                            <li>
                                <a href="donasi-succes" class="waves-effect">
                                <i class="mdi mdi-clipboard-list"></i><span class="badge badge-pill badge-primary float-right"></span>
                                <span>Donasi Succes</span>
                                </a>
                            </li>
                        
                            <li>
                                <a href="konfirmasi-campaign" class="waves-effect">
                                <i class="mdi mdi-clipboard-list"></i><span class="badge badge-pill badge-primary float-right"></span>
                                <span>Konfirmasi Campaign</span>
                                </a>
                            </li>
                      
                            <li>
                                <a href="pencairan-dana" class="waves-effect">
                                <i class="mdi mdi-cash-usd-outline"></i><span class="badge badge-pill badge-primary float-right"></span>
                                <span>Pencairan Dana</span>
                                </a>
                            </li>
                            <li>
                                <a href="zakat" class="waves-effect">
                                <i class="mdi mdi-cash-usd-outline"></i><span class="badge badge-pill badge-primary float-right"></span>
                                <span>Zakat</span>
                                </a>
                            </li>
                            <li>
                                <a href="log-activity" class="waves-effect">
                                <i class="mdi mdi-clipboard-list"></i><span class="badge badge-pill badge-primary float-right"></span>
                                <span>Log Activity</span>
                                </a>
                            </li>
                        <!--<li>-->
                        <!--    <a href="maps" class="waves-effect">-->
                        <!--    <i class="ti-location-pin"></i><span class="badge badge-pill badge-primary float-right"></span>-->
                        <!--    <span>Google Map</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
        </div>
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Log Activity Admin</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item active">Hai <?php echo $_SESSION["nama"]; ?>, Selamat Datang di Halaman log Activity </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="card">
                            <div class="card-body">Log Activity Admin</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-centered table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                            	<th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">IP</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col" colspan="2">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- lopping donasi -->
                                                <?php
                                                    include "../config/config.php";
                                                    $query  = mysqli_query($conn, "SELECT a.nama, b.description, b.ip, b.date, a.status FROM `log_activity` as b join admin as a on a.id = b.user_id order by date DESC ");
                                                    $no = 1;
                                                    while($data = mysqli_fetch_array($query)){
                                                ?>

                                                <tr>
                                                	<td><?php echo $no++; ?></td>
                                                    <th><?php echo $data["nama"]; ?></th>
                                                    <td><?php echo $data["description"]; ?></td>
                                                    <td> <?php echo $data["ip"]; ?></td>
                                                    <td><?php echo $data["date"]; ?></td>
                                                    <td> <?php echo $data["status"]; ?></td>
                                                   
                                                </tr> 
                                            <?php } ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
          
               
                        <footer class="footer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        © <script>document.write(new Date().getFullYear())</script> DYPA<span class="d-none d-sm-inline-block"> <i class="mdi mdi-heart text-danger"></i></span>
                                    </div>
                                </div>
                            </div>
                        </footer>
       

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- Peity chart-->
<script src="assets/libs/peity/jquery.peity.min.js"></script>

<!-- Plugin Js-->
<script src="assets/libs/chartist/chartist.min.js"></script>
<script src="assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>

<script src="assets/js/pages/dashboard.init.js"></script>
<script src="assets/js/app.js"></script>
 <script>
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
    }
</script>
    </body>
</html>