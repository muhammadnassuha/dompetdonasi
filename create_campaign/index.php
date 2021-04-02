<?php 
   error_reporting(0);
   
    session_start();

      if (!isset($_SESSION["user"]) ) {
        header("Location: ../user/login");
        exit;
    }


  require '../function.php';
     
  
  if (isset($_POST["daftar"]) ) {

      if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('Masukkan Foto Penggalangan Dana Kamu');
                document.location.href = 'upload_img/';
            </script>";
            
      } 
        else {
          echo mysqli_error($conn);
      }


  }
  $ind = date('Y-m-d');

  $satu = date('Y-m-d',strtotime('+30 days',strtotime($ind)));
  $dua  = date('Y-m-d',strtotime('+60 days',strtotime($ind)));
  $tiga = date('Y-m-d',strtotime('+90 days',strtotime($ind)));

  // die(var_dump($tiga));

 ?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dompet Donasi - Buat Campaign Baru</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/new-campaign.css">
    <link rel="shortcut icon" href="../img/icon/logo_favicon.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/redactor.min.css" />

    <style type="text/css">
        a.re-button.re-html.re-button-icon {
            display: none;
        }

        a.re-button.re-link.re-button-icon {
            display: none;
        }

        a.re-button.re-format.re-button-icon {
            display: none;
        }

        a.re-button.re-deleted.re-button-icon {
            display: none;
        }
        
        .redactor-styles address, .redactor-styles blockquote, .redactor-styles dl, .redactor-styles figure, .redactor-styles hr, .redactor-styles p, .redactor-styles pre, .redactor-styles table {
            font-size: 1em;
        }
    </style>

    <!-- Custom styles for this template -->
  </head>

  <body>

    <!-- desktop -->
    <div class="desktop">
        <!-- Start Header -->
          <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: white;">
            <div class="container">
              <img src="../img/icon/logo.png" style="width: 4em;"><a class="navbar-brand" href="../login_user/" style="">Dompet Donasi</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              </div>
            </div>
          </nav>
           <!-- isi -->
          <div class="daftar">
            <div class="container" style="width:95%;">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="box-white">
                    <p style="text-align:center; font-weight:bold; font-size:20px; margin-bottom:10px;padding-top: ">Buat Campaign</p>
                    <form method="post" enctype="multipart/form-data" action="" id="postForm" onsubmit="return validasi_input(this)">

                      <div class="form-group" style="margin-bottom:10px;">
                        <input type="text" class="form-control" name="judul" placeholder="Judul Campaign">
                        <input type="hidden" class="form-control" name="nama" value="<?php echo $_SESSION['nama_lengkap']; ?>">
                        <input type="hidden" class="form-control" name="kategori" value="campaign">
                        
                      </div>

                    <div class="input-group" style="margin-bottom:10px;">
                      <div class="input-group-text" id="basic-addon3">dompetdonasi.com/</div>
                      <input type="text" class="form-control" name="link_donasi" id="tanpaspasi" placeholder="Link Donasi Kamu">
                    </div>
                
                    <div class="input-group" style="margin-bottom: 20px;">
                      <div class="input-group-text" id="basic-addon3">Rp</div>
                      <input type="text" class="form-control" name="target" maxlength="13" id="rupiah" placeholder="Target Donasi">
                      <input type="hidden" class="form-control" name="donasi" value="0">
                    </div>

                      <div class="form-group" style="margin-bottom: 20px;">
                        <label for="inputState" class="form-label">Batas Waktu Penggalangan Dana</label>
                          <select id="inputState" name="periode" class="form-control">
                            <option selected disabled="">- Jumlah Hari -</option>
                            <option value="<?php echo $satu; ?>">30 Hari</option>
                            <option value="<?php echo $dua; ?>">60 Hari</option>
                            <option value="<?php echo $tiga; ?>">90 Hari</option>
                          </select>
                      </div>

                      <div class="form-group" style="margin-bottom:10px;">
                        <label for="inputState" class="form-label">Masukkan Cerita Penggalangan Dana Kamu</label>
                        <textarea id="content" name="deskripsi" placeholder="Masukkan Cerita Kamu" rows="20"></textarea>
                          </select>
                      </div>
                      
                       <button type="submit" name="daftar" class="btn btn-daftar_akun">Selanjutnya</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

<!-- hp -->
    <div class="hp">
        <!-- Start Header -->
      <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: white;">
        <div class="container">
          <img src="../img/icon/logo.png" style="width: 3em;"><a class="navbar-brand" href="../login_user/" style="">Dompet Donasi</a>
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
            </ul>
          </div>
        </div>
      </nav>
      
      <!-- Start Footer -->
            <div class="footer-fix-hp fixed-bottom">
                <div class="row row-cols-4">
                  <div class="col-3">
                    <p class="text-footer-fixed-hp"><a href="../login_user/index.php" class="link-text-footer"><i class="fas fa-home"></i><br>Home</a></p>
                  </div>
                  <div class="col-3">
                      <p class="text-footer-fixed-hp"><a href="" class="link-text-footer"><i class="fas fa-hand-holding-heart"></i><br>Donasi</a></p>
                  </div>
                  <div class="col-3">
                      <p class="text-footer-fixed-hp"><a href="" class="link-text-footer" style="color:#35a04c;"><i class="fas fa-plus-circle"></i><br>Campaign</a></p>
                  </div>
                  <div class="col-3">
                      <p class="text-footer-fixed-hp"><a href="../user/login.php" class="link-text-footer"><i class="fas fa-user"></i><br>Akun</a></p>
                  </div>
                  
                </div>
            </div>
            
            
        <div class="daftar">
            <div class="container" style="width:95%;">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="box-white-hp  shadow-sm" style="padding:30px;">
                    <p style="text-align:center; font-weight:bold;">Tambah Penggalangan Dana</p>
                    <form method="post" enctype="multipart/form-data" action="" id="akun" onsubmit="return validasi_input(this)">
                      <div class="form-group" style="margin-bottom:10px;">
                        <input type="hidden" class="form-control" name="kategori" value="campaign">
                        <input type="hidden" class="form-control" name="nama" value="<?php echo $_SESSION['nama_lengkap']; ?>">
                        <input type="text" class="form-control" name="judul" placeholder="Judul Campaign">
                      </div>
        
                    <div class="input-group" style="margin-bottom:10px;">
                      <div class="input-group-text" id="basic-addon3">dompetdonasi.com/</div>
                      <input type="text" class="form-control" name="link_donasi" id="tanpaspasi" placeholder="Link Donasi Kamu">
                    </div>
                
                    <div class="input-group" style="margin-bottom: 20px;">
                      <div class="input-group-text" id="basic-addon3">Rp</div>
                      <input type="text" class="form-control" name="target" maxlength="13" id="rupiah2" placeholder="Target Donasi">
                      <input type="hidden" class="form-control" name="donasi" value="0">
                    </div>
        
                      <div class="form-group-md" style="margin-bottom:10px;">
                        <label for="inputState" class="form-label">Batas Waktu Penggalangan Dana</label>
                          <select id="inputState" name="periode" class="form-control">
                            <option selected disabled="">- Jumlah Hari -</option>
                            <option value="<?php echo $satu; ?>">30 Hari</option>
                            <option value="<?php echo $dua; ?>">60 Hari</option>
                            <option value="<?php echo $tiga; ?>">90 Hari</option>
                          </select>
                      </div>

                      <div class="form-group mb-3">
                        <label for="inputState" class="form-label">Batas Waktu Penggalangan Dana</label>
                        <textarea id="content" name="deskripsi" placeholder="Masukkan Cerita Kamu"></textarea>
                      </div>
                      
                        <button type="submit" name="daftar" class="btn btn-daftar_akun">Selanjutnya</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <!-- redactor js -->
    <script src="../js/redactor3.js"></script>

    <!-- plugin js -->
    <script src="../js/imagemanager.js"></script>
    <script type="text/javascript" src="../js/donasi.js"></script>
  
    <script>
      $R('#content', {
          plugins: ['imagemanager'],
          imageUpload: 'upload_img.php'
      });
    </script>
  
    <script type="text/javascript">
// validasi Input
      function validasi_input(form) {
        var minchar = 10;
        var minchars = 5; //membuat minimal char dari inputan username
        var minchars2 = 9;
        pola_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
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
        } else if (form.link_donasi.value == "") {
          alert("Link Donasi Harus Diisi!");
          form.link_donasi.focus();
          return (false);
        } else if (form.link_donasi.value.length <= minchars) {
          alert("Link Donasi Harus Minimal 12  Karakter!");
          form.link_donasi.focus();
          return (false);
        } else if (form.target.value == "") {
          alert("Target Donasi Harus Diisi!");
          form.target.focus();
          return (false);
        } else if (form.target.value.length <= minchars2) {
          alert("Target Donasi Minimal Rp 10.000.000");
          form.target.focus();
          return (false);
        } else if (form.periode.selectedIndex < 1) {
          alert("Batas Waktu Harap Pilih Salah Satu!");
          form.periode.focus();
          return (false);
        } else if (form.deskripsi.value == "") {
          alert("Cerita Harus Diisi!");
          form.deskripsi.focus();
          return (false);
        }

      }
    </script>

    <script type="text/javascript">
      $("#tanpaspasi").on({
        keydown: function(e) {
          if (e.which === 32)
            return false;
        },
        keyup: function(){
          this.value = this.value.toLowerCase();
        },
        change: function() {
          this.value = this.value.replace(/\s/g, "");
          
        }
      });
    </script>  

</body></html>