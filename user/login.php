<?php 
session_start();

require '../function.php'; 

  if (isset($_POST["login"]) ) {

    $email    = $_POST ["email"];
    $password = $_POST ["password"];

    $result = mysqli_query($conn, "SELECT * FROM account WHERE email = '$email' " );
//cek username database
        
        if (mysqli_num_rows($result) === 1 ) {


          // cek password database

        $row = mysqli_fetch_assoc($result);
    // die(var_dump($row));

        
        if (password_verify($password, $row["password"]) ) {

          // set session

          $_SESSION["user"] = true ;
          

          $_SESSION["id"]           = $row["id"];
          $_SESSION["profil"]       = $row["profil"];
          $_SESSION["nama_lengkap"] = $row["nama_lengkap"];
          $_SESSION["telepon"]      = $row["telepon"];
          $_SESSION["email"]        = $row["email"];
          $_SESSION["password"]     = $row["password"];

           

          header("Location: ../login_user/");


          exit; 
        }


    }

    $error = true;
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
    

    <title>Dompet Donasi - Login</title>
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
                    <a href="register" class="daftar">Daftar</a>
                </form>
              </div>
            </div>
          </nav>
      <!-- Login -->
        <div class="login">
          <div class="container" style="width: 30em;">
            <div class="card-login shadow-sm">
              <h4 class="text-header">Masuk ke Akun Saya</h4>

              <form action="" method="post">
                <div class="input-group mb-3"  style="background-color: white;">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-user" aria-hidden="true" width="100%"></i>
                  </span>
                  </div>
                  <input type="text" class="form-control" name="email" placeholder="Email/Telepon" aria-label="Email/Telepon" aria-describedby="basic-addon1">
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
                <?php if (isset ($error) ) : ?>
                    <p style="color: red; font-style: italic;">Email/Password salah!</p>
                  <?php endif ?>

                <input type="submit" name="login" class="btn btn-masuk" value="MASUK">

                <p style="text-align:center ;color: #2f2f2f; font-size: 14px;">Belum punya akun ? <a href="register" class="register">Daftar Disini</a></p>
                

              </form>
              

            </div>
          </div>
        </div>
        </div>
        
        <!-- tampilan HP -->
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
                    <a href="register" class="daftar">Daftar</a>
                </form>
              </div>
            </div>
          </nav>
      <!-- Login -->
        <div class="login">
          <div class="container" style="width: 90%;">
            <div class="card-login-hp shadow-sm">
              <p class="text-header-hp">Masuk ke Akun Saya</p>

              <form action="" method="post">
                <div class="input-group mb-3"  style="background-color: white;">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-user" aria-hidden="true" width="100%"></i>
                  </span>
                  </div>
                  <input type="text" class="form-control" name="email" placeholder="Email/Telepon" aria-label="Email/Telepon" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3"  style="background-color: white;">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                      <i class="fas fa-lock" aria-hidden="true" width="100%"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="password" id="password-field2" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                  <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <?php if (isset ($error) ) : ?>
                    <p style="color: red; font-style: italic;font-size: 12px;">Email/Password salah!</p>
                  <?php endif ?>

                <input type="submit" name="login" class="btn btn-masuk" value="MASUK">

                <p style="text-align:center ;color: #2f2f2f; font-size: 14px;">Belum punya akun ? <a href="register" class="register">Daftar Disini</a></p>
                

              </form>
            </div>
           </div>
          </div>
        </div>
      <!-- end HP -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script type="text/javascript">
      // hide unhide password 
        $(".toggle-password").click(function() {

          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $($(this).attr("toggle"));
          if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
        });

    </script>

  </body>
</html>