</<?php 

session_start();

require '../function.php';

 if (!isset($_SESSION["admin"]) ) {
    header("Location: ../");
    exit;
 }


// total campaign
$query   = mysqli_query($conn, "SELECT * FROM `campaign`  ORDER BY `id` DESC ");
$total    = mysqli_num_rows($query);

// jumlah donasi
$i = 0;
$sql1 = mysqli_query($conn, "SELECT * FROM campaign WHERE kategori = 'campaign' ");
while($data2 = mysqli_fetch_array($sql1))
{
  $harga = $data2['donasi'];
  $i++;
  $hargatotal[$i] = $harga;
  $jumlah  = array_sum($hargatotal);
}


//jumlah donatur 

$donatur         = mysqli_query($conn, "SELECT * FROM donasi WHERE keterangan = 'OK' ");
$para_donatur    = mysqli_num_rows($donatur);

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

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Pencairan Dana</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item active">Hai <?php echo $_SESSION["nama"]; ?>, Selamat Datang di Halaman Admin </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/01.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Jumlah Campaign</h5>
                                            <h4 class="font-weight-medium font-size-24"><?php echo $total; ?></h4>
                                        </div>
                                        <div class="pt-2">
                                            <p class="text-white-50 mb-0 mt-1">Terbaru</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/02.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Jumlah Donasi</h5>
                                            <h4 class="font-weight-medium font-size-24">Rp. <?php echo number_format($jumlah); ?></h4>
                                        </div>
                                        <div class="pt-2">
                                            <p class="text-white-50 mb-0 mt-1">Terbaru</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/03.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Jumlah Donatur</h5>
                                            <h4 class="font-weight-medium font-size-24"><?php echo $para_donatur; ?> Orang</h4>
                                        </div>
                                        <div class="pt-2">
                                            <p class="text-white-50 mb-0 mt-1">Terbaru</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/04.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Pemasukan DYPA</h5>
                                            <h4 class="font-weight-medium font-size-24">0 </h4>
                                        </div>
                                        <div class="pt-2">
                                            <p class="text-white-50 mb-0 mt-1">Terbaru</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <!-- end row -->

                      
                                <div class="card">
                                    <div class="card-body">Transaksi Terakhir</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                    	<th scope="col">No</th>
                                                        <th scope="col">Id</th>
                                                        <th scope="col">Kategory</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Judul</th>
                                                        <th scope="col">Link</th>
                                                        <th scope="col">Target</th>
                                                        <th scope="col">Donasi</th>
                                                        <th scope="col">Periode</th>
                                                        <th scope="col">Dibuat</th>
                                                        <th scope="col">Deskripsi</th>
                                                         <th scope="col">gambar</th>
                                                        <th scope="col" colspan="2">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <!-- lopping donasi -->
                                                    <?php 
                                                    	include "../config/config.php";

                                                    	$query = mysqli_query($koneksi, "SELECT * FROM campaign")or die(mysqli_error($koneksi));

                                                    	$no = 1;
                                                    	while ($hasil = mysqli_fetch_array($query)) {
                                                        ?>

                                                        <tr>
                                                        	<td><?php echo $no++; ?></td>
                                                            <th scope="row"><?php echo $hasil["id"]; ?></th>
                                                            <td><?php echo $hasil["kategori"]; ?></td>
                                                            <td> <?php echo $hasil["nama"]; ?></td>
                                                            <td><?php echo $hasil["judul"]; ?></td>
                                                            <td><?php echo $hasil["link"]; ?></td>
                                                            <td><?php echo $hasil["target"]; ?></td>
                                                            <td>Rp. <?php echo $hasil["donasi"]; ?></td>
                                                            <td><?php echo $hasil["periode"]; ?></td>
                                                            <td><?php echo $hasil["dibuat"]; ?></td>
                                                            <td><?php echo $hasil["deskripsi"]; ?></td>
                                                             <td class="foto_resi"><img id="myImg" src="../img/foto-campaign/<?php echo $hasil["gambar"]; ?>" style="width: 4rem; cursor: pointer;" onclick="onClick(this)"></td>
                                                            
                                                            
                                                            <td>
                                                                <div>
                                                                    <a href="form-update?id=<?php echo $hasil["id"]; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr> 
                                                    <?php } ?> 
                                                    <div id="modal01" class="w3-modal" onclick="this.style.display='none'" style="z-index: 999999">
                                                      <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                                                      <div class="w3-modal-content w3-animate-zoom" style="z-index: 999999">
                                                    <img id="img01" style="width:100%">
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
          <script type="text/javascript">
            $(document).ready(function(){
                setTimeout(function() {
                    location.reload();
                }, 10000);
            })
        </script>

    </body>


<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 14:19:11 GMT -->
</html>