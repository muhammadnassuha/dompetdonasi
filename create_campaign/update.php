<?php 

session_start();

if (!isset($_SESSION["user"]) ) {
    header("Location: ../");
    exit;
}


require '../function.php';

if (isset($_POST["update"]) ) {

      if(update_campaign($_POST) > 0 ) {
        echo "<script>
                alert('Update Cerita Kamu Berhasil Diupdate');
                document.location.href = '../login_user/';
            </script>";
            
      } 
        else {
          echo mysqli_error($conn);
  }


}

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

    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/sidebar.css">
    <link rel="shortcut icon" href="../img/icon/logo_favicon.png"/>

    <style type="text/css">
      .tox-statusbar__branding {
        display: none;
      }

      .btn-update {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
        width: 100%;
      }

      .btn-update:hover {
        background-color: #317734;
        color: white;
        border-radius: 25px;
        width: 50%;
        transition: .9s;
      }

      /*HPP*/
      @media (max-width: 767.98px) {
        .desktop .navbar-desktop {
          display: none;
        }

        #sidebar-hp .user2 img {
          margin-top: 20px;
        }

        .data-profil label {
          font-size: 13px;
        }

        .data-profil .form-control {
          font-size: 13px;
        }

        .btn-save {
          width: 100% !important;
        }

        .btn-save:hover {
          border-radius: 25px;
          transition: .7s;
        }

        .breadcrumb-item {
          font-size: 12px;
        }

        .campaign-user .card-title, .campaign-user .card-terkumpul {
          font-size: 13px;
          text-align: center;
        }

        .hal2 .container {
          padding-left: 0 !important;
        }

        .table-bordered tr{
          font-size: 13px;
        }

        .table-bordered td {
          font-size: 11px;
          text-align: center;
        }

        .pagination {
          width: 100%;
        }

        .pagination a {
          font-size: 12px;
        } 

        #sidebar-desktop .navbar-expand {
          transition: 0.4s;
          z-index: 9999;
          width: 200px;
        }

        #sidebar-desktop .active-cont {
          margin-left: 0;
        }

        #sidebar-desktop .nav-link {
          font-size: 1em;
        }

        .form-group {
          padding: 0 !important;
        }

        .btn-update {
          font-size: 12px !important;
        }



      }

      /*DESKTOP*/
      @media (min-width: 992px) {
        .navbar-hp {
          display: none;
        }  

        #menu-btn-kembali {
          display: none;
        }

      }

    </style>

    <title>Campaign Saya</title>
  </head>
  <body >
    <!-- desktop -->
      <div class="desktop">

        <!-- Start Header -->
          <div class="navbar-desktop">
            <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: white;">
              <div class="container">
                <img src="../img/icon/logo.png" style="width: 4em;"><a class="navbar-brand" href="../login_user/">Dompet Donasi</a>
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
                      <a class="nav-link" href="https://dompetdonasi.com/create_campaign/">Buat Campaign</a>
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
                        <a href="../login_user/dashboard/" class="nav-user"><i class="fas fa-home" aria-hidden="true" width="100%"></i> Dashboard</a>
                        <a href="../admin/logout.php" class="nav-user"><i class="fa fa-sign-out" aria-hidden="true" width="100%"></i>Logout</a>
                      </div>
                    </div> 
                  </form>
                </div>
              </div>
            </nav>
          </div>

          <!-- navbar hp -->
          <div class="navbar-hp">
            <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: white;">
              <div class="container">
                <img src="../img/icon/logo.png" style="width: 3em;"><a class="nav-link" href="../login_user/" style=" margin-right: -60px;"><?php echo $_SESSION['nama_lengkap']; ?></a>
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
          </div>
          <!-- end navbar hp -->

          <!-- sidebar -->
          <div id="sidebar-desktop">
            <nav class="navbar navbar-expand d-flex flex-column align-item-start active-nav" id="sidebar">
              <a href="#" class="navbar-brand text-light mt-5">
                  <div class="display-5 font-weight-bold"></div>
              </a>
              <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                  <li class="nav-item w-100" >
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
                  <li class="nav-item active w-100">
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
                        <p class="text-campaign-donasi">Update Campaign Terbaru</p>
                        <hr>
                      </div>
                    </div>
                    <form method="post" enctype="multipart/form-data" action="" id="postForm" onsubmit="return validasi_input(this)">

                      <div class="form-group" style="margin-bottom:10px; padding: 20px;">
                        <label for="inputState" class="form-label" style="font-weight: bold;">Masukan Update Judul Campaign Kamu</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul Campaign">
                        <input type="hidden" class="form-control" name="link" value="<?php echo $data['link']; ?>">
                      </div>

                      <div class="form-group" style="margin-bottom:10px; padding: 20px;">
                        <label for="inputState" class="form-label" style="font-weight: bold;">Tuliskan Update Terbaru Dari Campaign Kamu</label>
                        <textarea id="mytextarea" name="deskripsi" placeholder="Masukkan Cerita Kamu" rows="20"></textarea>
                      </div>
                      
                       <div class="btn-cerita" style="text-align: center;">
                         <button type="submit" name="update" class="btn btn-update">UPDATE CAMPAIGN TERBARU KAMU</button>
                       </div>
                    </form>
                  </div>
                </div>
          </section>
            <!-- end sidebar -->
          </div>

      </div>

    <!-- HP -->
      <div class="hp">
        
      </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/j3k9v18xanbgpajxq2ebwndterw1avtj529tg2es1d5fctpr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">

      tinymce.init({
        selector: '#mytextarea',
        plugins: 'image code',
    toolbar: 'undo redo | image code',

    // without images_upload_url set, Upload tab won't show up
    images_upload_url: 'upload.php',
    
    // override default upload handler to simulate successful upload
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
      
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'upload.php');
      
        xhr.onload = function() {
            var json;
        
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
        
            json = JSON.parse(xhr.responseText);
        
            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
        
            success(json.location);
        };
      
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
      
        xhr.send(formData);
    },
      });


       function validasi_input(form) {
        var minchar = 10;
        //membuat pattern inputan email

        //validasi dimulai
        if (form.judul.value == "") {
          alert("Judul Campaign Harus Diisi!");
          form.judul.focus();
          return (false);
        } else if (form.judul.value.length <= minchar) {
          alert("Judul Harus Minimal 12  Karakter!");
          form.judul.focus();
          return (false);
        } else if (form.deskripsi.value == "") {
          alert("Cerita Harus Diisi!");
          form.deskripsi.focus();
          return (false);
        }

      }

    </script>

    <script type="text/javascript">
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })

        var menu_btn2 = document.querySelector("#menu-btn-kembali")
        var sidebar2 = document.querySelector("#sidebar")
        var container2 = document.querySelector(".my-container")
        menu_btn2.addEventListener("click", () => {
            sidebar2.classList.toggle("active-nav")
        })
    </script>
</html>
