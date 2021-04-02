<?php 

require '../function.php';
session_start();


if (isset($_POST["bayar-zakat"]) ) {
        
        $idUser = $_SESSION["id"];
        $hisab = 5000000;
        $total = 0;
        $pendapatan = str_replace('.', '', $_POST['pendapatan']);
        $bonus  = str_replace('.', '', $_POST['bonus']);
        $hutang = str_replace('.', '', $_POST['hutang']);

        if ($hutang == 1) {
          $total  = $pendapatan + $bonus;
        } else {
          $total  = $pendapatan + $bonus - $hutang;
        }


        $hasil =  "INSERT INTO zakat VALUES('', '$pendapatan', '$bonus', '$hutang', '$idUser', '$total', '')";
        $query = mysqli_query($conn, $hasil)or die(mysqli_error($conn));


        if($total >= 5000000){

        

         header("location:https://dompetdonasi.com/zakat/hasil");

        }else {

          header("location:https://dompetdonasi.com/zakat/hasil");
        }

}




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/zakat.css">
    <link rel="shortcut icon" href="../img/icon/logo_favicon.png">

    <title>Dompet Donasi - Zakat Online</title>
  </head>
  <body>

    <!-- desktop -->
    <div class="desktop" style="background-color: #f9fff6">

        <!-- Start Header -->
          <div class="nav-desktop">
            <nav class="navbar navbar-expand-lg shadow-sm">
              <div class="container">
                <img src="../img/icon/logo.png" style="width: 4em;"><a class="navbar-brand" href="../">Dompet Donasi</a>
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
                      <a class="nav-link" href="../create_campaign/">Buat Campaign</a>
                    </li>
                  </ul>
                  <form class="d-flex">
                      <a href="../user/login" class="masuk">Masuk</a><a href="../user/register" class="daftar">Daftar</a>
                  </form>
                </div>
              </div>
            </nav>
          </div>


          <div class="nav-hp">
            <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: white;">
              <div class="container">
                <img src="../img/icon/logo.png" style="width: 3em;"><a class="navbar-brand" href="index" style="">Dompet Donasi</a>
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
                      <a class="nav-link" href="create_campaign/">Buat Campaign</a>
                    </li>
                  </ul>
                  <form class="d-flex">
                      <a href="user/login" class="masuk">Masuk</a><a href="user/register" class="daftar">Daftar</a>
                  </form>
                </div>
              </div>
            </nav>
          </div>
        <!-- End Header -->

        <!-- zakat -->
        <div id="zakat">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-4">
                <div class="kotak">
                  <div class="profesi">
                    <label>KALKULATOR ZAKAT</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row justify-content-center">
              <div class="col-md-4">
                <div class="kotak">
                  <div class="profesi">
                    <label><i class="far fa-id-card"></i> Profesi</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row justify-content-center">
              <div class="col-md-4">
                <div class="kotak form-zakat" style="margin-bottom: 50px;">
                  <form action="" method="post" onsubmit="return validasi_input(this)" autocomplete="off">
                    <label style="font-weight: 500; margin-bottom: 10px;" >Pendapatan <span style="color: red"> *</span></label>
                    <br>
                    <label for="rupiah" class="form-label">Penghasilan per bulan</label>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">Rp.</span>
                      <input type="text" name="pendapatan" class="form-control" id="rupiah" placeholder="Penghasilan per bulan" onkeypress="return hanyaAngka(event)" onkeyup="manage(this)">
                    </div>

                    <label for="rupiah2" class="form-label">Pendapatan lain per bulan (opsional)</label>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">Rp.</span>
                      <input type="text" name="bonus" class="form-control" id="rupiah2" placeholder="Pendapatan lain per bulan (opsional)" onkeypress="return hanyaAngka(event)">
                    </div>

                    <label for="rupiah3" class="form-label">Utang / Cicilan</label>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">Rp.</span>
                       <input type="text" name="hutang" class="form-control" id="rupiah3" placeholder="Utang / Cicilan" onkeypress="return hanyaAngka(event)">
                    </div>

                    <div class="button">
                      <input type="submit" class="btn btn-masuk" name="bayar-zakat" value="Hitung Zakat" id="btSubmit" disabled>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

         <!-- footer desktop -->
        <div class="footer-desk">
          <footer>
            <div class="container">
              <div class="row row-3">
                <div class="col-4 footer">
                  <p class="text-footer">Dompetdonasi.com, Yayasan Crowdfunding dimana orang orang dapat membuat penggalangan dana dan memberikan bantuan secara transparansi sehingga dapat memberikan senyumanan terhadap semua orang. Dengan daftar Yayasan Nomor : AHU-005109.AH.01.12.TAHUN 2020</p>
                </div>
                <div class="col-4 footer">
                  <i class="far fa-envelope"> support@dompetdonasi.com</i>
                </div>
                <div class="col-4 footer">
                  <h5 style="font-weight: bold; color: white; margin-bottom: 10px;">Sosial Media :</h5>
                  <div class="row">
                    <div class="col-2">
                      <a href=""><div class="media-sosial-whatsapp">
                        <i class="fab fa-whatsapp" style="margin-left: -2px;"></i>
                      </div></a>
                    </div>
                    <div class="col-2">
                      <a href=""><div class="media-sosial-facebook">
                        <i class="fab fa-facebook-f"></i>
                      </div></a>
                    </div>
                    <div class="col-2">
                      <a href=""><div class="media-sosial-instagram">
                        <i class="fab fa-instagram" style="margin-left: -2px; margin-top: -1px;"></i>
                      </div></a>
                    </div>
                    <div class="col-2">
                      <a href=""><div class="media-sosial-youtube">
                        <i class="fab fa-youtube" style="margin-left: -4px; margin-top: -1px;"></i>
                      </div></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </footer>
        </div>

      <!-- footer-hp -->
      <div class="footer-hp">
        <div class="footer-fix-hp fixed-bottom">
              <div class="row row-cols-4">
                <div class="col-3">
                  <p class="text-footer-fixed-hp"><a href="../" class="link-text-footer"><i class="fas fa-home"></i><br>Home</a></p>
                </div>
                <div class="col-3">
                    <p class="text-footer-fixed-hp"><a href="#" class="link-text-footer" style="color:#35a04c;"><i class="fas fa-hand-holding-heart"></i><br>Donasi</a></p>
                </div>
                <div class="col-3">
                    <p class="text-footer-fixed-hp"><a href="../user/login.php" class="link-text-footer"><i class="fas fa-plus-circle"></i><br>Campaign</a></p>
                </div>
                <div class="col-3">
                    <p class="text-footer-fixed-hp"><a href="../user/login.php" class="link-text-footer"><i class="fas fa-user"></i><br>Akun</a></p>
                </div>
                
              </div>
          </div>
      </div>
    </div>

    <!-- end tampilan HP -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/zakat.js"></script>
   <!--  <script>
      // rupiah
      var rupiah = document.getElementById('target');
      rupiah.addEventListener('keyup', function (e) {
          // tambahkan 'Rp.' pada saat form di ketik
          // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
          rupiah.value = formatRupiah(this.value, 'Rp. ');
      });
      /* Fungsi formatRupiah */
      function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);
          // tambahkan titik jika yang di input sudah menjadi angka ribuan
          if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
          }
          rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
          return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
      }
  </script> -->


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
