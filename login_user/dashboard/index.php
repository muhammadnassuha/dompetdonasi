<?php 

session_start();

if (!isset($_SESSION["user"]) ) {
    header("Location: ../../user/login");
    exit;
}


require '../../function.php';

$nama     = $_SESSION["nama_lengkap"];

// looping campaign desktop
$query    = mysqli_query($conn, "SELECT * FROM `campaign` WHERE nama = '$nama' ");

// looping campaign hp
$query3    = mysqli_query($conn, "SELECT * FROM `campaign` WHERE nama = '$nama' ");

// jumlah donatur

$query2   = mysqli_query($conn, "SELECT * FROM `campaign` WHERE nama = '$nama' ");
$campaign = mysqli_num_rows($query2);



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../../css/dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/responsive_user.css">
    <link rel="stylesheet" type="text/css" href="../../css/sidebar.css">
    <link rel="shortcut icon" href="../../img/icon/logo_favicon.png"/>

    <title>Dompet Donasi - Dasboard</title>
  </head>
  <body >
    <!-- desktop -->
      <div class="desktop">

        <!-- Start Header -->
          <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: white;">
            <div class="container">
              <img src="../../img/icon/logo.png" style="width: 4em;"><a class="navbar-brand" href="../" style="">Dompet Donasi</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Donasi Rutin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Zakat</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Wakaf</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../create_campaign/">Buat Campaign</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-top: 12px; font-weight: bold; margin-right: -10px;"><?php echo $nama; ?></a>
                  </li>
                </ul>
                  <div class="dropdown">
                    <button class="dropbtn">
                      <div class="container">
                        <div class="row row-cols-2">
                          <div class="col">
                            <div class="user">
                                <img src="https://dompetdonasi.com/img/user_account/<?php echo $_SESSION["profil"]; ?>" style="width: 40px; height: 40px;" id="foto" >
                            </div>
                          </div>
                        </div>
                      </div></button>
                    <div class="dropdown-content">
                      <a href="#" class="nav-user"><i class="fas fa-home" aria-hidden="true" width="100%"></i> Dashboard</a>
                      <a href="../../admin/logout.php" class="nav-user"><i class="fa fa-sign-out" aria-hidden="true" width="100%"></i>Logout</a>
                    </div>
                  </div> 
                </form>
              </div>
            </div>
          </nav>

          <!-- sidebar -->
          <div id="sidebar-desktop">
            <nav class="navbar navbar-expand d-flex flex-column align-item-start active-nav" id="sidebar1">
              <a href="#" class="navbar-brand text-light mt-5">
                  <div class="display-5 font-weight-bold">Dashboard</div>
              </a>
              <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                  <li class="nav-item active w-100" >
                      <a href="index" class="nav-link text-light pl-4"><i class="fas fa-home" style="padding-right: 
                      10px;"></i>Beranda Akun</a>
                  </li>
                  <li class="nav-item w-100">
                      <a href="dashboard_campaign" class="nav-link text-light pl-4"><i class="fas fa-flag" style="padding-right: 
                      10px;"></i>Campaign Saya</a>
                  </li>
                  <li class="nav-item w-100">
                      <a href="dashboard_setting" class="nav-link text-light pl-4"><i class="fas fa-cog" style="padding-right: 
                      10px;"></i>Pengaturan</a>
                  </li>
              </ul>
          </nav>
          <section class="p-4 my-container active-cont">
              <button class="btn my-4" id="menu-btn">Menu Lainnya</button>
              <h1 style="font-weight: bold;">Beranda Dan Informasi Akun Kamu</h1>
              <!-- Hal1 -->
                  <div class="hal1">
                    <div class="container" style="display: inline-block; padding-left: 10em;">
                      <div class="data-profil">
                        <div class="row row-cols-3">

                          <div class="col-2">
                            <div class="user2">
                              <img src="https://dompetdonasi.com/img/user_account/<?php echo $_SESSION["profil"]; ?>" style="width: 90px; height: 90px;" id="foto" >
                              
                            </div>
                          </div>

                          <div class="col-4">
                            <h3 class="text-account"><?php echo $nama; ?></h3>
                            <p class="gmail-account"><?php echo $_SESSION['email']; ?></p>
                          </div>

                          <div class="col-6">

                            <div class="table-dana">

                              <div class="row row-cols-2">

                                <div class="col-5">
                                  <label class="text-campaign">Jumlah Campaign</label>
                                  <h2 class="jumlah-campaign"><?php echo "$campaign";  ?></h3>
                                </div>

                                <div class="col-6">
                                  <label class="text-campaign">Uang yang bisa diambil :</label>
                                  <h2 class="jumlah-campaign">Rp. <?php echo number_format($campaign["donasi"]);  ?></h3>
                                </div>

                              </div>

                            </div>

                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

                <!-- Hal2 -->
                  <div class="hal2">
                    <div class="container"style="display: inline-block; padding-left: 10em;">
                      <div class="data-profil">
                        <div class="row row-cols-2">
                          <div class="col-8">
                            <p class="text-campaign-donasi">Campaign Donasi</p>
                            

                            <hr>
                          </div>
                          <div class="col-4">
                            <a href="" class="ajukan-campaign"><i class="fas fa-plus" style="margin-right: 2px;"></i>  Ajukan Campaign</a>
                            <a href="" class="ajukan-campaign"><i class="fas fa-book" style="margin-right: 2px;"></i>  Riwayat Transaksi</a>
                          </div>
                        </div>
                        <!-- card Campaign -->
                        <div class="row row-cols-3">

                          <!-- looping -->
                              <?php if(mysqli_num_rows($query)){ ?>
                              <?php
                                      $no = '<i class="far fa-user-circle fa-3x"></i>';
                                      while($data = mysqli_fetch_array($query)){
                                  ?><?php
                                  $dateawal = date("Y-m-d");
                                  $dateakhir = $data["periode"];
                  
                                  $awal = new DateTime($dateakhir);
                                  $akhir = new DateTime($dateawal);

                                  // die(var_dump($dateakhir));
                            
                  
                                  $sisa = $akhir->diff($awal);
                  
                                  // die(var_dump($sisa->days))
                  
                                    $harga1 = $data["donasi"];
                                    // $harga1 = substr($harga1,3);
                                    $harga1 = (int) $harga1;

                  
                                    $harga = $data["target"];
                                    $harga = str_replace(".","",$harga);
                                    $harga = (int) $harga;
                  
                                    $Tdonasi = $harga;
                                    $persen  = round($harga1/$Tdonasi * 100,2);
                                    

                      
                                    
                                  // endpersen 
                            ?>

                          <div class="col"  style="width: 20em;">
                            <a href="https://dompetdonasi.com/login_user/campaign?id=<?php echo $data["link"]; ?>" class="campaign" style="text-decoration: none;">
                              <div class="card campaign">
                                <img src="https://dompetdonasi.com/img/foto-campaign/<?php echo $data["gambar"]; ?>" >
                                <div class="content">
                                  <div class="judul-campaign">
                                    <p><?php echo $data["judul"]; ?></p>
                                  </div>
                                  <div class="penggalangan-dana">
                                    <p>Oleh <?php echo $data["nama"]; ?></p>
                                  </div>
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?php echo $persen; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <div class="nominal-donasi">
                                    <div class="row row-cols-3">
                                      <div class="col terdanai">
                                        <p class="nominal-terdanai">Rp. <?php echo number_format($data["donasi"]); ?></p>
                                        <p class="text-kekurangan">Terdanai</p>
                                      </div>
                                      <div class="col kekurangan">
                                        <p class="nominal-kekurangan">Rp. <?php echo $data["target"]; ?></p>
                                        <p class="text-kekurangan">Target</p>
                                      </div>
                                      
                                      <div class="col kekurangan">
                                        <p class="nominal-kekurangan"><?php echo $data["konfirmasi"]; ?></p>
                                        <p class="text-kekurangan">Status</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>

                          <?php $no++; } ?>
                      <?php } ?>

                        </div>
                      </div>
                    </div>
                  </div>
          </section>
            <!-- end sidebar -->
          </div>

      </div>

    <!-- HP -->
      <div class="hp">
        <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: white;">
            <div class="container">
              <img src="../../img/icon/logo.png" style="width: 3em;"><a class="nav-link" href="../" style=" margin-right: -150px; font-size:14px;"><?php echo $_SESSION['nama_lengkap']; ?></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-user"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align:right;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="dashboard/">Dahboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../admin/logout.php">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          
          <!-- Start Footer -->
            <div class="footer-fix-hp fixed-bottom">
                <div class="row row-cols-4">
                  <div class="col-3">
                    <p class="text-footer-fixed-hp"><a href="../../login_user/index.php" class="link-text-footer" style=""><i class="fas fa-home"></i><br>Home</a></p>
                  </div>
                  <div class="col-3">
                      <p class="text-footer-fixed-hp"><a href="" class="link-text-footer"><i class="fas fa-hand-holding-heart"></i><br>Donasi</a></p>
                  </div>
                  <div class="col-3">
                      <p class="text-footer-fixed-hp"><a href="../../create_campaign/" class="link-text-footer"><i class="fas fa-plus-circle"></i><br>Campaign</a></p>
                  </div>
                  <div class="col-3">
                      <p class="text-footer-fixed-hp"><a href="dashboard/" class="link-text-footer"><i class="fas fa-user"style="color:#35a04c;"></i><br>Akun</a></p>
                  </div>
                  
                </div>
            </div>
            
          <!-- sidebar -->
          <div id="sidebar-hp">
            <nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar2">
              <a href="#" class="navbar-brand text-light mt-5">
                  <div class="display-5 font-weight-bold">Dashboard</div>
              </a>
              <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                  <li class="nav-item active w-100" >
                      <a href="index" class="nav-link text-light pl-4"><i class="fas fa-home" style="padding-right: 
                      10px;"></i>Beranda Akun</a>
                  </li>
                  <li class="nav-item w-100">
                      <a href="dashboard_campaign" class="nav-link text-light pl-4"><i class="fas fa-flag" style="padding-right: 
                      10px;"></i>Campaign Saya</a>
                  </li>
                  <li class="nav-item w-100">
                      <a href="dashboard_setting" class="nav-link text-light pl-4"><i class="fas fa-cog" style="padding-right: 
                      10px;"></i>Pengaturan</a>
                  </li>
              </ul>
               <button class="btn my-4" id="menu-btn-kembali">Kembali</button>
          </nav>
          <section class="p-4 my-container-hp">
              <button class="btn my-4" id="menu-btn-hp">Menu Lainnya</button>
              <h1 style="font-weight: bold;">Beranda Dan Informasi Akun Kamu</h1>
              <!-- Hal1 -->
                  <div class="hal1">
                    <div class="container" style="display: inline-block;">
                      <div class="data-profil">
                        <div class="row row-cols-3">

                          <div class="col-3">
                            <div class="user2">
                              <img src="https://dompetdonasi.com/img/user_account/<?php echo $_SESSION["profil"]; ?>" style="width: 50px; height: 50px;" id="foto" >
                              
                            </div>
                          </div>

                          <div class="col-9">
                            <h3 class="text-account"><?php echo $nama; ?></h3>
                            <p class="gmail-account"><?php echo $_SESSION['email']; ?></p>
                          </div>

                          <div class="col-12">
                            <div class="table-dana">
                              <div class="row row-cols-2">
                                <div class="col-6">
                                  <label class="text-campaign">Jumlah Campaign</label>
                                  <h2 class="jumlah-campaign"><?php echo "$campaign";  ?></h3>
                                </div>

                                <div class="col-6">
                                  <label class="text-campaign">Uang yang bisa diambil :</label>
                                  <h2 class="jumlah-campaign">Rp. <?php echo number_format($campaign["donasi"]);  ?></h3>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                <!-- Hal2 -->
                  <div class="hal2">
                    <div class="container"style="display: inline-block;">
                      <div class="data-profil">
                        <div class="row row-cols-2">
                          <div class="col-8">
                            <p class="text-campaign-donasi">Campaign Donasi</p>
                            <hr>
                          </div>
                          <div class="col-12">
                            <a href="../../create_campaign/" class="ajukan-campaign"><i class="fas fa-plus" style="margin-right: 2px;"></i>Ajukan</a>
                            <a href="" class="ajukan-campaign"><i class="fas fa-book" style="margin-right: 2px;"></i>Riwayat</a>
                          </div>
                        </div>
                        <!-- card Campaign -->
                        <div class="row row-cols-3">

                          <!-- looping -->
                              <?php if(mysqli_num_rows($query3)){ ?>
                              <?php
                                      $no = '<i class="far fa-user-circle fa-3x"></i>';
                                      while($data3 = mysqli_fetch_array($query3)){
                                  ?><?php
                                  $dateawal2 = date("Y-m-d");
                                  $dateakhir2 = $data3["periode"];
                  
                                  $awal2 = new DateTime($dateakhir2);
                                  $akhir2 = new DateTime($dateawal2);

                                  // die(var_dump($dateakhir));
                            
                  
                                  $sisa2 = $akhir2->diff($awal2);
                  
                                  // die(var_dump($sisa->days))
                  
                                    $harga2 = $data3["donasi"];
                                    // $harga1 = substr($harga1,3);
                                    $harga2 = (int) $harga2;

                  
                                    $harga3 = $data3["target"];
                                    $harga3 = str_replace(".","",$harga3);
                                    $harga3 = (int) $harga3;
                  
                                    $Tdonasi2 = $harga3;
                                    $persen2  = round($harga2/$Tdonasi2 * 100,2);
                                    

                      
                                    
                                  // endpersen 
                            ?>

                          <div class="col"  style="width: 18em;">
                            <a href="https://dompetdonasi.com/login_user/campaign?id=<?php echo $data3["link"]; ?>" class="campaign" style="text-decoration: none;">
                              <div class="card campaign">
                                <img src="https://dompetdonasi.com/img/foto-campaign/<?php echo $data3["gambar"]; ?>" >
                                <div class="content">
                                  <div class="judul-campaign">
                                    <p><?php echo $data3["judul"]; ?></p>
                                  </div>
                                  <div class="penggalangan-dana">
                                    <p>Oleh <?php echo $data3["nama"]; ?></p>
                                  </div>
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?php echo $persen2; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <div class="nominal-donasi">
                                    <div class="row row-cols-2">
                                      <div class="col terdanai">
                                        <p class="nominal-terdanai">Rp. <?php echo number_format($data3["donasi"]); ?></p>
                                        <p class="text-kekurangan">Terdanai</p>
                                      </div>
                                      <div class="col kekurangan">
                                        <p class="nominal-kekurangan">Rp. <?php echo $data3["target"]; ?></p>
                                        <p class="text-kekurangan">Target</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>

                          <?php $no++; } ?>
                      <?php } ?>

                        </div>
                      </div>
                    </div>
                  </div>
          </section>
            <!-- end sidebar -->
          </div>
      </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar1")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })

        var menu_btn2 = document.querySelector("#menu-btn-hp")
        var sidebar2 = document.querySelector("#sidebar2")
        var container2 = document.querySelector(".my-container-hp")
        menu_btn2.addEventListener("click", () => {
            sidebar2.classList.toggle("active-nav")
        })

        var menu_btn3 = document.querySelector("#menu-btn-kembali")
        var sidebar2 = document.querySelector("#sidebar2")
        var container2 = document.querySelector(".my-container-hp")
        menu_btn3.addEventListener("click", () => {
            sidebar2.classList.toggle("active-nav")
        })
    </script>
</html>
