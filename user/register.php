<?php 

error_reporting(0);

require "../function.php";
// pengambilan ID

if (isset($_POST["daftar"]) ) {

      if(buat_akun($_POST) > 0 ) {
        echo "<script>
                alert('Buat Akun Sukses, Silahkan Login Terlebih Dahulu');
                document.location.href = 'login';
            </script>";

    
      } else {

          echo mysqli_error($conn);

      }

  }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="../img/icon/logo_favicon.png">

    <title>Dompet Donasi - Register</title>
  </head>
  <body style="background-color: #f7f7f7;">
      <!-- tampilan Desktop -->
        <div class="desktop">
      <!-- Start Header -->
          <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: white;">
            <div class="container">
              <img src="../img/icon/logo.png" style="width: 4em;"><a class="navbar-brand" href="../" style="">Dompet Donasi</a>
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
                    <a class="nav-link" href="../create_campaign/">Buat Campaign</a>
                  </li>
                </ul>
                <form class="d-flex">
                    <a href="login" class="masuk">Masuk</a>
                </form>
              </div>
            </div>
          </nav>
      <!-- Login -->
        <div class="login">
          <div class="container" style="width: 30em;">
            <div class="card-login-hp shadow-sm">
              <h4 class="text-header">Daftar Akun Baru</h4>

              <form action="" method="post" onsubmit="return validasi_input(this)" autocomplete="off">
                <div class="input-group mb-3"  style="background-color: white;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" aria-label="Nama Lengkap" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3"  style="background-color: white;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                       <i class="fas fa-phone" aria-hidden="true" width="100%"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="hp" maxlength="13" placeholder="Nomor Telepon" aria-label="Nomor Telepon" aria-describedby="basic-addon1" oninput="setCustomValidity('')"onkeypress="return hanyaAngka(event)">
                  <input type="hidden" name="profile" value="profile_default.png">
                </div>

                <div class="input-group mb-3"  style="background-color: white;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                       <i class="fas fa-envelope" aria-hidden="true" width="100%"></i>
                    </span>
                  </div>
                  <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3"  style="background-color: white;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                       <i class="fas fa-lock" aria-hidden="true" width="100%"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="password" id="password-field" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>

                <div class="input-group mb-3"  style="background-color: white;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                       <i class="fas fa-lock" aria-hidden="true" width="100%"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="password2" id="password-field2" placeholder="Konfirmasi Password" aria-label="Password" aria-describedby="basic-addon1">
                  <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>

                <input type="submit" class="btn btn-masuk" name="daftar" value="DAFTAR">


                <p style="text-align:center ;color: #2f2f2f; font-size: 14px;">Sudah punya akun ? <a href="login" class="register">Masuk disini</a></p>
                

              </form>
              

            </div>
          </div>
        </div>
       </div>
       
       <!-- tampilan Desktop -->
        <div class="hp">
            <!-- Start Header -->
          <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: white;">
            <div class="container">
              <img src="../img/icon/logo.png" style="width: 3em;"><a class="navbar-brand" href="../" style="">Dompet Amanah</a>
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
                    <a class="nav-link" href="../create_campaign/">Buat Campaign</a>
                  </li>
                </ul>
                <form class="d-flex">
                    <a href="login" class="masuk">Masuk</a>
                </form>
              </div>
            </div>
          </nav>
            <!-- Login -->
        <div class="login">
          <div class="container" style="width: 90%;">
            <div class="card-login-hp shadow-sm">
              <p class="text-header-hp">Daftar Akun Baru</p>

              <form action="" method="post" onsubmit="return validasi_input(this)">
                <div class="input-group mb-3"  style="background-color: white;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" aria-label="Nama Lengkap" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3"  style="background-color: white;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                       <i class="fas fa-phone" aria-hidden="true" width="100%"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="hp" placeholder="Nomor Telepon" aria-label="Nomor Telepon" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3"  style="background-color: white;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                       <i class="fas fa-envelope" aria-hidden="true" width="100%"></i>
                    </span>
                  </div>
                  <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3"  style="background-color: white;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                       <i class="fas fa-lock" aria-hidden="true" width="100%"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="password" id="password-field3" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                  <span toggle="#password-field3" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>

                <div class="input-group mb-3"  style="background-color: white;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                       <i class="fas fa-lock" aria-hidden="true" width="100%"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="password2" id="password-field4" placeholder="Konfirmasi Password" aria-label="Password" aria-describedby="basic-addon1">
                  <span toggle="#password-field4" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>

                <input type="submit" class="btn btn-masuk" name="daftar" value="DAFTAR">

                <p style="text-align:center ;color: #2f2f2f; font-size: 14px;">Sudah punya akun ? <a href="login" class="register">Masuk disini</a></p>
                

              </form>
              

              <!-- <div class="footer-hp-share">
                <div class="container">
                  <div class="row row-cols-3">
                    <div class="col-2">
                      <p><a href="" class="btn btn-fbfooter">FB</a></p>
                    </div>
                    <div class="col-2">
                      <p><a href="" class="btn btn-wafooter">WA</a></p>
                    </div>
                    <div class="col-8">
                      <p><a href="" class="btn btn-donasifooter">DONASI</a></p>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script type="text/javascript" src="../js/validasi_akun.js"></script>
    <script type="text/javascript">
      
    </script>
  </body>
</html>