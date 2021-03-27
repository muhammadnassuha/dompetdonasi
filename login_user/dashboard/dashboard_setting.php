<?php 

session_start();

if (!isset($_SESSION["user"]) ) {
    header("Location: ../../");
    exit;
}


require '../../function.php';


if (isset($_POST["save"]) ) {

    if(update_akun($_POST) == 1 ) {
        echo "<script>
                alert('Akun Berhasil Diperbarui, Mohon Untuk Login Ulang');
        document.location.href = 'index';
        </script>";
        
    } else {
        echo "<script>
                alert('Sepertinya Ada Masalah');
            </script>";
    } 
}


$nama     = $_SESSION["nama_lengkap"];

// looping campaign desktop
$query    = mysqli_query($conn, "SELECT * FROM `campaign` WHERE nama = '$nama' ");

// jumlah donatur

$query2   = mysqli_query($conn, "SELECT * FROM `campaign` WHERE nama = '$nama' ");
$campaign = mysqli_num_rows($query2);

// lupa Passwprd

if(isset($_POST['save_pw']) ){
    //membuat variabel untuk menyimpan data inputan yang di isikan di form
    $password_lama      = $_POST['password_lama'];
    $password_baru      = $_POST['password_baru'];
    $konfirmasi_password  = $_POST['konfirmasi_password'];
    
    //cek dahulu ke database dengan query SELECT
    //kondisi adalah WHERE (dimana) kolom password adalah $password_lama di encrypt m5
    //encrypt -> md5($password_lama)

    $password_lama  = password_verify($password_lama, $_SESSION["password"]);
    // die(var_dump($password_lama));

    if($password_lama === TRUE){

          if($password_baru === $konfirmasi_password){

          $password_baru  = password_hash($password_baru, PASSWORD_DEFAULT);
          $id_user    = $_SESSION['id']; //ini dari session saat login
          // die(var_dump($password_lama));

          $update     = $conn->query("UPDATE account SET password='$password_baru' WHERE id ='$id_user'");
          if($update){
            //kondisi jika proses query UPDATE berhasil
            echo "<script>
                    alert('Password Sudah Berhasil Diperbarui');
                  </script>";
          }         
        }else{
      //kondisi jika password lama tidak cocok dengan data yang ada di database
      echo "<script>
              alert('Konfirmasi Password Tidak Sama');
            </script>";
      }
    }else{
      //kondisi jika password lama tidak cocok dengan data yang ada di database
      echo "<script>
              alert('Password Saat Ini Tidak Sesuai');
            </script>";
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

    <link rel="stylesheet" type="text/css" href="../../css/dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/responsive_user.css">
    <link rel="stylesheet" type="text/css" href="../../css/sidebar.css">
    <link rel="shortcut icon" href="../../img/icon/logo_favicon.png"/>

    <style type="text/css">

      .btn-save {
        font-weight: bold;
        background-color: #45aaf2;
        color: white;
        width: 25%;
      }

      .btn-save:hover {
        background-color: #45aaf2;
        color: white;
        border-radius: 25px;
        transition: .7s;
      }   

      label {
        font-weight: bold;
      }   

      .fa-eye, .fa-eye-slash {
        font-size: 1.2em;
        margin-left: 10px;
      }
    </style>

    <title>Dompet Donasi - Campaign Saya</title>
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
                  <li class="nav-item w-100" >
                      <a href="index" class="nav-link text-light pl-4"><i class="fas fa-home" style="padding-right: 
                      10px;"></i>Beranda Akun</a>
                  </li>
                  <li class="nav-item w-100">
                      <a href="dashboard_campaign" class="nav-link text-light pl-4"><i class="fas fa-flag" style="padding-right: 
                      10px;"></i>Campaign Saya</a>
                  </li>
                  <li class="nav-item active w-100">
                      <a href="dashboard_setting" class="nav-link text-light pl-4"><i class="fas fa-cog" style="padding-right: 
                      10px;"></i>Pengaturan</a>
                  </li>
              </ul>
          </nav>
          <section class="p-4 my-container active-cont">
              <button class="btn my-4" id="menu-btn">Menu Lainnya</button>
              <h1 style="font-weight: bold;">Pengaturan Akun</h1>
                <!-- Hal2 -->
                  <div class="hal2">
                    <div class="container"style="display: inline-block; padding-left: 10em;">
                      <div class="data-profil">
                        <div class="row row-cols-2">
                          <div class="col-12">
                            <p class="text-campaign-donasi" style="font-size: 1.4em;">1. Biodata Diri</p>
                            <form action="" method="post" onsubmit="return validasi_input(this)" autocomplete="off" style="padding: 0 25px;">
                              <div class="mb-3"  style="background-color: white;">
                                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" aria-label="Nama Lengkap" aria-describedby="basic-addon1" value="<?php echo $_SESSION["nama_lengkap"]; ?>">
                              </div>

                              <div class="mb-3"  style="background-color: white;">
                                <label for="exampleFormControlInput1" class="form-label">No. HP</label>
                                <input type="text" class="form-control" name="hp" maxlength="13" aria-label="Nomor Telepon" aria-describedby="basic-addon1" oninput="setCustomValidity('')"onkeypress="return hanyaAngka(event)" value="<?php echo $_SESSION["telepon"]; ?>">
                              </div>

                              <div class="mb-3"  style="background-color: white;">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" name="disable" aria-label="Email" aria-describedby="basic-addon1" value="<?php echo $_SESSION["email"]; ?>" disabled style="cursor: not-allowed;" >
                                <input type="hidden" name="email" value="<?php echo $_SESSION["email"]; ?>">
                              </div>

                              <div class="bio_save" style="text-align: center;">
                                <input type="submit" name="save" class="btn btn-save" value="Simpan">
                              </div>

                            </form>
                          </div>
                        </div>
                      </div>

                      <div class="data-profil mt-3">
                        <div class="row row-cols-2">
                          <div class="col-12">
                            <p class="text-campaign-donasi" style="font-size: 1.4em;">2. Password Akun</p>
                             <form action="" method="post" onsubmit="return validasi_input2(this)" autocomplete="off" style="padding: 0 25px;">
                              <div class="mb-3"  style="background-color: white;">
                                <label for="password-field" class="form-label">Password Saat Ini</label>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <input type="password" class="form-control" name="password_lama" id="password-field" placeholder="Password Saat Ini" aria-describedby="basic-addon1" maxlength="32">
                              </div>

                              <div class="mb-3"  style="background-color: white;">
                                <label for="password-field2" class="form-label">Password Baru</label>
                                <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <input type="password" class="form-control" name="password_baru" id="password-field2" placeholder="Password Baru" aria-describedby="basic-addon1" maxlength="32">
                              </div>

                              <div class="mb-3"  style="background-color: white;">
                                <label for="password-field3" class="form-label">Konfirmasi Password</label>
                                <span toggle="#password-field3" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <input type="password" class="form-control" name="konfirmasi_password" id="password-field3" placeholder="Konfirmasi Password" aria-describedby="basic-addon1" maxlength="32">
                              </div>

                              <div class="bio_save" style="text-align: center;">
                                <input type="submit" name="save_pw" class="btn btn-save" value="Simpan">
                              </div>

                            </form> 
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
              <img src="../../img/icon/logo.png" style="width: 3em;"><a class="nav-link" href="../" style=" margin-right: -60px;"><?php echo $_SESSION['nama_lengkap']; ?></a>
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
                    <a class="nav-link" href="../../admin/logout.php">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- sidebar -->
          <div id="sidebar-hp">
            <nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar2">
              <a href="#" class="navbar-brand text-light mt-5">
                  <div class="display-5 font-weight-bold">Dashboard</div>
              </a>
              <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                  <li class="nav-item w-100" >
                      <a href="index" class="nav-link text-light pl-4"><i class="fas fa-home" style="padding-right: 
                      10px;"></i>Beranda Akun</a>
                  </li>
                  <li class="nav-item w-100">
                      <a href="dashboard_campaign" class="nav-link text-light pl-4"><i class="fas fa-flag" style="padding-right: 
                      10px;"></i>Campaign Saya</a>
                  </li>
                  <li class="nav-item active w-100">
                      <a href="dashboard_setting" class="nav-link text-light pl-4"><i class="fas fa-cog" style="padding-right: 
                      10px;"></i>Pengaturan</a>
                  </li>
              </ul>
               <button class="btn my-4" id="menu-btn-kembali">Kembali</button>
          </nav>
          <section class="p-4 my-container-hp">
              <button class="btn my-4" id="menu-btn-hp">Menu Lainnya</button>
              <h1 style="font-weight: bold;">Pengaturan Akun</h1>

              <!-- Hal2 -->
                <div class="hal2">
                  <div class="container"style="display: inline-block;">
                    <div class="data-profil">
                      <div class="row row-cols-2">
                        <div class="col-12">
                          <p class="text-campaign-donasi" style="font-size: 1.1em;">1. Biodata Diri</p>
                          <form action="" method="post" onsubmit="return validasi_input(this)" autocomplete="off" style="padding: 0 20px;">
                            <div class="mb-3"  style="background-color: white;">
                              <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control" name="nama" aria-label="Nama Lengkap" aria-describedby="basic-addon1" value="<?php echo $_SESSION["nama_lengkap"]; ?>">
                            </div>

                            <div class="mb-3"  style="background-color: white;">
                              <label for="exampleFormControlInput1" class="form-label">No. HP</label>
                              <input type="text" class="form-control" name="hp" maxlength="13" aria-label="Nomor Telepon" aria-describedby="basic-addon1" oninput="setCustomValidity('')"onkeypress="return hanyaAngka(event)" value="<?php echo $_SESSION["telepon"]; ?>">
                            </div>

                            <div class="mb-3"  style="background-color: white;">
                              <label for="exampleFormControlInput1" class="form-label">Email</label>
                              <input type="email" class="form-control" name="disable" aria-label="Email" aria-describedby="basic-addon1" value="<?php echo $_SESSION["email"]; ?>" disabled style="cursor: not-allowed;" >
                              <input type="hidden" name="email" value="<?php echo $_SESSION["email"]; ?>">
                            </div>

                            <div class="bio_save" style="text-align: center;">
                              <input type="submit" name="save" class="btn btn-save" value="Simpan">
                            </div>

                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="data-profil mt-3">
                      <div class="row row-cols-2">
                        <div class="col-12">
                          <p class="text-campaign-donasi" style="font-size: 1.1em;">2. Password Akun</p>
                           <form action="" method="post" onsubmit="return validasi_input2(this)" autocomplete="off" style="padding: 0 20px;">
                            <div class="mb-3"  style="background-color: white;">
                              <label for="password-field4" class="form-label">Password Saat Ini</label>
                              <span toggle="#password-field4" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                              <input type="password" class="form-control" name="password_lama" id="password-field4" placeholder="Password Saat Ini" aria-describedby="basic-addon1" maxlength="32">
                            </div>

                            <div class="mb-3"  style="background-color: white;">
                              <label for="password-field5" class="form-label">Password Baru</label>
                              <span toggle="#password-field5" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                              <input type="password" class="form-control" name="password_baru" id="password-field5" placeholder="Password Baru" aria-describedby="basic-addon1" maxlength="32">
                            </div>

                            <div class="mb-3"  style="background-color: white;">
                              <label for="password-field6" class="form-label">Konfirmasi Password</label>
                              <span toggle="#password-field6" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                              <input type="password" class="form-control" name="konfirmasi_password" id="password-field6" placeholder="Konfirmasi Password" aria-describedby="basic-addon1" maxlength="32">
                            </div>

                            <div class="bio_save" style="text-align: center;">
                              <input type="submit" name="save_pw" class="btn btn-save" value="Simpan">
                            </div>

                          </form> 
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


        // hanya angka
        function hanyaAngka(evt) {
              var charCode = (evt.which) ? evt.which : event.keyCode
               if (charCode > 31 && (charCode < 48 || charCode > 57))
         
                return false;
              return true;
            }

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

        // validasi input
function validasi_input(form) {
        var minchar = 3;
        var minchars = 10;
        pola_email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
        //membuat pattern inputan email

        //validasi dimulai
        if (form.nama.value == "") {
          alert("Nama Lengkap Harus Diisi!");
          form.nama.focus();
          return (false);
        } 

          else if (form.nama.value.length <= minchar) {
          alert("Nama Lengkap Harus lebih 4  Karakter!");
          form.nama.focus();
          return (false);
        } 

          else if (form.hp.value == "") {
          alert("No HP Harus Diisi!");
          form.hp.focus();
          return (false);

        } else if (form.hp.value.length <= minchars) {
          alert("No Hp Kurang!");
          form.hp.focus();
          return (false);
        }

      }

      // validasi input
function validasi_input2(form) {
        var minchar = 3;
        //membuat pattern inputan email 

        if (form.password_lama.value == "") {
          alert("Password Lama Harus Diisi!");
          form.password_lama.focus();
          return (false);
        }
          else if (form.password_baru.value == "") {
          alert("Password Harus Diisi!");
          form.password_baru.focus();
          return (false);
        } 

          else if (form.password_baru.value.length <= minchar) {
          alert("Password Harus lebih 4  Karakter!");
          form.password_baru.focus();
          return (false);
        }

          else if (form.konfirmasi_password.value == "") {
          alert("Konfirmasi Password Harus Diisi!");
          form.konfirmasi_password.focus();
          return (false);
        } 


      }
    </script>
</html>
