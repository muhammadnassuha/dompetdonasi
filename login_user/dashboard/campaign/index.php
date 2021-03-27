<?php 

session_start();

if (!isset($_SESSION["user"]) ) {
    header("Location: ../../");
    exit;
}


require '../../../function.php';

$nama     = $_SESSION["nama_lengkap"];

$id     = mysqli_escape_string($conn, $_GET["id"]); 

// detail campaign desktop dan hp
$query  = mysqli_query($conn, "SELECT * FROM campaign WHERE link= '$id'");
$data   = mysqli_fetch_assoc($query);

// jumlah donatur

$query2  = mysqli_query($conn, "SELECT * FROM donasi WHERE link = '$id' and keterangan = 'OK' ");
$donatur = mysqli_num_rows($query2);


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../../../css/dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../../../fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../../css/responsive_user.css">
    <link rel="stylesheet" type="text/css" href="../../../css/sidebar.css">
    <link rel="shortcut icon" href="../../../img/icon/logo_favicon.png"/>

    <title>Campaign Saya</title>
  </head>
  <body >
    <!-- desktop -->
      <div class="desktop">

        <!-- Start Header -->
          <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: white;">
            <div class="container">
              <img src="../../../img/icon/logo.png" style="width: 4em;"><a class="navbar-brand" href="../../">Dompet Donasi</a>
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
                    <a class="nav-link" href="../../../create_campaign/">Buat Campaign</a>
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
                      <a href="../../../admin/logout.php" class="nav-user"><i class="fa fa-sign-out" aria-hidden="true" width="100%"></i>Logout</a>
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
                  <div class="display-5 font-weight-bold"></div>
              </a>
              <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                  <li class="nav-item active w-100" >
                      <a href="https://dompetdonasi.com/login_user/dashboard/campaign/?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-desktop" style="padding-right: 
                      10px;"></i>Overview</a>
                  </li>
                  <li class="nav-item w-100">
                      <a href="https://dompetdonasi.com/login_user/dashboard/campaign/donatur?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-heart" style="padding-right: 
                      10px;"></i>Donatur</a>
                  </li>
                  <li class="nav-item w-100">
                      <a href="https://dompetdonasi.com/login_user/dashboard/campaign/pencairan_dana?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-money-check-alt" style="padding-right: 
                      10px;"></i>Pencaiaran Dana</a>
                  </li>
                  <li class="nav-item w-100">
                      <a href="https://dompetdonasi.com/create_campaign/update?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-pen-nib" style="padding-right: 
                      10px;"></i>Info Terbaru</a>
                  </li>
                  <li class="nav-item w-100">
                      <a href="https://dompetdonasi.com/login_user/dashboard/campaign/edit?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-pen-nib" style="padding-right: 
                      10px;"></i>Edit Campaign</a>
                  </li>
              </ul>
          </nav>
          <section class="p-4 my-container active-cont">
              <button class="btn my-4" id="menu-btn">Menu Lainnya</button>
              <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb" style="font-weight: bold;">
                  <li class="breadcrumb-item"><a href="../">Campaign Saya</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo $data["judul"]; ?></li>
                </ol>
              </nav>
                <!-- Hal2 -->
              <div class="hal2">
                <div class="container"style="display: inline-block; padding-left: 10em;">
                  <div class="data-profil">
                    <div class="row row-cols-2">
                      <div class="col-8">
                        <p class="text-campaign-donasi">Pencapaian</p>
                        <hr>
                      </div>
                    </div>
                    <!-- card Campaign -->
                    <div class="row row-cols-3">
                      <div class="col-6">
                        <div class="card campaign-user" style="">
                          <div class="card-title">
                            Donasi Terkumpul
                          </div>
                          <div class="card-terkumpul">
                            Rp. <?php echo number_format($data["donasi"]); ?>
                          </div>
                        </div>
                      </div>

                      <div class="col-6">
                        <div class="card campaign-user" style="">
                          <div class="card-title">
                            total Donatur
                          </div>
                          <div class="card-terkumpul">
                            <?php echo $donatur; ?> Orang
                          </div>
                        </div>
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
              <img src="../../../img/icon/logo.png" style="width: 3em;"><a class="nav-link" href="../" style=" margin-right: -60px;"><?php echo $_SESSION['nama_lengkap']; ?></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="user">
                    <img src="https://dompetdonasi.com/img/user_account/<?php echo $_SESSION["profil"]; ?>" style="width: 40px; height: 40px;" id="foto" >
                </div>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align:right;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="dashboard/">Dahboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../../admin/logout.php">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- sidebar -->
          <div id="sidebar-hp">
            <nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar2">
              <a href="#" class="navbar-brand text-light mt-5">
                  <div class="display-5 font-weight-bold"></div>
              </a>
                <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                    <li class="nav-item active w-100" >
                        <a href="https://dompetdonasi.com/login_user/dashboard/campaign/?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-desktop" style="padding-right: 
                        10px;"></i>Overview</a>
                    </li>
                    <li class="nav-item w-100">
                        <a href="https://dompetdonasi.com/login_user/dashboard/campaign/donatur?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-heart" style="padding-right: 
                        10px;"></i>Donatur</a>
                    </li>
                    <li class="nav-item w-100">
                        <a href="https://dompetdonasi.com/login_user/dashboard/campaign/pencairan_dana?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-money-check-alt" style="padding-right: 
                        10px;"></i>Pencaiaran Dana</a>
                    </li>
                    <li class="nav-item w-100">
                        <a href="https://dompetdonasi.com/create_campaign/update?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-pen-nib" style="padding-right: 
                        10px;"></i>Info Terbaru</a>
                    </li>
                    <li class="nav-item w-100">
                        <a href="https://dompetdonasi.com/login_user/dashboard/campaign/edit?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-pen-nib" style="padding-right: 
                        10px;"></i>Edit Campaign</a>
                    </li>
                </ul>
               <button class="btn my-4" id="menu-btn-kembali">Kembali</button>
          </nav>
          <section class="p-4 my-container-hp">
              <button class="btn my-4" id="menu-btn-hp">Menu Lainnya</button>
              <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb" style="font-weight: bold;">
                  <li class="breadcrumb-item"><a href="../">Campaign Saya</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo $data["judul"]; ?></li>
                </ol>
              </nav>
                <!-- Hal2 -->
              <div class="hal2">
                <div class="container"style="display: inline-block;">
                  <div class="data-profil">
                    <div class="row row-cols-2">
                      <div class="col-8">
                        <p class="text-campaign-donasi">Pencapaian</p>
                        <hr>
                      </div>
                    </div>
                    <!-- card Campaign -->
                    <div class="row">
                      <div class="col-12">
                        <div class="card campaign-user" style="">
                          <div class="card-title">
                            Terkumpul
                          </div>
                          <div class="card-terkumpul">
                            Rp. <?php echo number_format($data["donasi"]); ?>
                          </div>
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="card campaign-user" style="">
                          <div class="card-title">
                            Donatur
                          </div>
                          <div class="card-terkumpul">
                            <?php echo $donatur; ?> Orang
                          </div>
                        </div>
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
