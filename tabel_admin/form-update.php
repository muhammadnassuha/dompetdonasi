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

    
<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 14:18:25 GMT -->
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

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="../img/icon/logo.png" alt="" height="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="../img/icon/logo.png" alt="" height="50">
                                </span>
                            </a>

                            <a href="" class="logo logo-light">
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
                                <!-- item-->
                                
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
                                <a href="" class="waves-effect">
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
            <!-- Left Sidebar End -->

        
             <div class="main-content">

                        <div class="page-content">
                            <div class="container-fluid">

                                <!-- start page title -->
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <div class="page-title-box">
                                        
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="float-right d-none d-md-block">
                                            <div class="dropdown">
                                             
                                            </div>
                                        </div>
                                    </div>
                        </div>     
                        <!-- end page title -->
                        <?php
                             include "../config/config.php";

                             $id = $_GET['id'];
                                $query = mysqli_query($koneksi, "SELECT * FROM campaign where id='$id' ")or die(mysqli_error($koneksi));

                             $no = 1;
                             while ($hasil = mysqli_fetch_array($query)) {
                        ?>
                            <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Pencairan Dana</h4>
                                                <form class="outer-repeater" method="POST">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="formname">Kategory :</label>
                                                            <input type="text" name="kategori" class="form-control" id="formname" value="<?php echo $hasil['kategori'] ?>">
                                                        </div>
                                                    
                                                        <div class="form-group col-md-6">
                                                            <label for="formname">Nama :</label>
                                                            <input type="text" name="nama" class="form-control" id="formname" value="<?php echo $hasil['nama'] ?>">
                                                        </div>
                                                        
                                                        <div class="form-group col-md-6">
                                                            <label for="formname">Judul :</label>
                                                            <input type="text" name="judul" class="form-control" id="formname" value="<?php echo $hasil['judul'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="formname">Link :</label>
                                                            <input type="text" name="link" class="form-control" id="formname" value="<?php echo $hasil['link'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="formname">Target :</label>
                                                            <input type="text" name="target" class="form-control" id="formname" value="<?php echo $hasil['target'] ?>">
                                                        </div>


                                                        <div class="form-group col-md-6">
                                                            <label for="formname">Donasi :</label>
                                                            <input type="text" name="jumlah" class="form-control" id="formname" value="<?php echo number_format($hasil['donasi']) ?>">
                                                        </div>


                                                        <div class="form-group col-md-6">
                                                            <label for="formname">periode :</label>
                                                            <input type="date" name="periode" class="form-control" id="formname" value="<?php echo $hasil['periode'] ?>">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="formname">dibuat :</label>
                                                            <input type="date" name="dibuat" class="form-control" id="formname" value="<?php echo $hasil['dibuat'] ?>">
                                                        </div>
                                                        </div> 

                                                        <div class="form-group">
                                                            <label for="formmessage">Deskripsi :</label>
                                                            <textarea id="formmessage" name="deskripsi"  class="form-control" rows="3" ><?php echo $hasil['deskripsi']; "<img src='assets/images/$hasil[deskripsi]' style='width: 80px; height: 80px;' />" ?></textarea>
                                                        </div>
                                                          

                                                         <div class="form-group">
                                                            <label for="formmessage">Gambar :</label>
                                                             <input type="text" name="dibuat" class="form-control" id="formname" value="<?php echo "<img src='upload/$hasil[gambar]' style='width: 80px; height: 80px;' />"?>">
                                                        </div>    
                                                    <div>
                                                 <input type="submit" name="cek" class="btn btn-primary" value="CEK PENCAIRAN">
                                             </div> 
                                         </form>
                                     </div>
                                 </div>
                            </div>
                        </div>
                        <?php }?>

                        <?php

                            $jumlah = $_POST['jumlah'];
                            $replace = str_replace(',', '', $jumlah);

                                if (isset($_POST['cek'])) {
                                
                                     $pendapatan_dypa = 10 * $replace / 100;

                                    $hasil_user = $replace - $pendapatan_dypa;
                                     echo "<table class='table table-hover table-centered table-nowrap mb-0'";
                                     echo "<tr>";
                                     echo "Hasil Pendapatan DYPA:   "  . number_format($pendapatan_dypa) .'<br>'; 
                                     echo "<tr>";
                                     echo "Hasil Pendapatan User: " . number_format($hasil_user);
                                     echo "</table>";
                            }
                        ?>

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
    <script src="assets/libs/peity/jquery.peity.min.js"></script>
    <script src="assets/libs/chartist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/js/pages/dashboard.init.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/libs/jquery.repeater/jquery.repeater.min.js"></script>
    <script src="assets/js/pages/form-repeater.int.js"></script>
    <script src="assets/js/app.js"></script>

    </body>
</html>