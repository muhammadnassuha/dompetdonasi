<?php 

require "../../function.php";
require '../../PHPMailer/src/PHPMailer.php' ;
require '../../PHPMailer/src/SMTP.php';
require '../../PHPMailer/src/Exception.php';
// pengambilan ID

if (isset($_POST["transfer"]) ) {

      if(donasi($_POST) > 0 ) {
        echo "<script>
                alert('Harap di transfer dalam waktu 24jam');
                document.location.href = '../../bank/bri';
            </script>";

    
      } else {

          echo mysqli_error($conn);

      }

  }


  if (isset($_POST["transfer2"]) ) {

      if(donasi2($_POST) > 0 ) {
        echo "<script>
                alert('Harap di transfer dalam waktu 24jam');
                document.location.href = '../../bank/bni';
            </script>";

    
      } else {

          echo mysqli_error($conn);

      }

}


$id     = mysqli_escape_string($conn, $_GET["id"]);    
$query  = mysqli_query($conn, "SELECT * FROM campaign WHERE link = '$id' ");
$data   = mysqli_fetch_assoc($query);

$link   = $data["link"];
$nama  = $data["nama"];
$foto   = $data["gambar"];


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/donasi.css">
    <link rel="shortcut icon" href="../../img/icon/logo_favicon.png"/>

    <title>Dompet Donasi - Donasi</title>
  </head>
  <body>
    <!-- desktop -->
      <div class="desktop">
        <!-- Start Header -->
          <nav class="navbar navbar-expand-lg shadow-sm">
            <div class="container">
              <img src="../../img/icon/logo.png" style="width: 4em;"><a class="navbar-brand" href="../../">Dompet Donasi</a>
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
                <form class="d-flex">
                    <a href="../../user/login" class="masuk">Masuk</a><a href="..../user/register" class="daftar">Daftar</a>
                </form>
              </div>
            </div>
          </nav>
        <!-- End Header -->

        <!-- Table Donasi -->
          <div class="container" style="width: 30em;">
            <div class="halsatu shadow-sm">
              <div class="row row-cols-2">
                <div class="col-4 cover">
                  <img src="https://dompetdonasi.com/img/foto-campaign/<?php echo $foto; ?>" width="100%" style="border-radius: 20px;">
                </div>
                <div class="col-7 penggalang-dana">
                    <p class="text-first-penggalangan-dana">Penggalang Dana :</p>
                    <p class="text-second-penggalangan-dana"><?php echo $nama; ?></p>
                </div>

              </div>
            </div>

            <form method="post">
              <div class="haldua shadow-sm">
                <div class="input-group">
                  <input type="hidden" name="link" value="<?php echo($link); ?>">
                  <input type="text" name="nama" class="form-control" aria-label="Sizing example input"  placeholder="Nama" required="required" oninvalid="this.setCustomValidity('Masukkan Nama Kamu')" oninput="setCustomValidity('')">
                </div>
                <div class="input-group">
                  <input type="text" class="form-control" name="hp" maxlength="13" id="inputAddress" aria-label="Sizing example input"  placeholder="Nomor Telphone / Whatsapp" oninput="setCustomValidity('')"onkeypress="return hanyaAngka(event)" required="required" oninvalid="this.setCustomValidity('Masukkan No Whatsapp/Telephone')" oninput="setCustomValidity('')">
                </div>
                
                <div class="input-group">
                  <input type="email" class="form-control" name="email" id="inputAddress" aria-label="Sizing example input"  placeholder="Masukkan Email Anda" required="required" oninvalid="this.setCustomValidity('Masukkan Email Anda')" oninput="setCustomValidity('')">
                </div>
                
                <div class="input-group flex-nowrap">
                  <span class="input-group-text" id="addon-wrapping"><b>RP</b></span>
                  <input type="text" class="form-control" name="donasi" id="rupiah" maxlength="12" placeholder="Nominal Donasi" aria-label="nominal" required="required" oninvalid="this.setCustomValidity('Masukan Nilai Donasi Kamu')" 
                  oninput="setCustomValidity('')" autocomplete="off">
                </div>

                <div class="input-group">
                  <textarea class="form-control" name="keterangan" aria-label="With textarea" placeholder="Doa-doa :)"></textarea>
                </div>

                <label style="font-size: 14px; color:  #575157;">Melalui Bank :</label>
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><img src="../../img/icon/bri.png" style="width:35%; margin-right:10px;">
                        Bank BRI
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="card-body">
                            <input type="hidden" name="name_rek" value="Yayasan Dompet Yatim Piatu Amanah">
                            <input type="hidden" name="norek" value="0523 0100 0259 302">
                            
                            <div class="donasi">
                              <input type="submit" class="btn btn-donasi-sekarang" name="transfer" style="width: 100%;"
                                value="DONASI">
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><img src="../../img/icon/bni.png" style="width:28%; margin-right:10px;">
                        Bank BNI
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="card-body">
                            <input type="hidden" name="name_rek2" value="Dompet Yatim Piatu Amanah">
                            <input type="hidden" name="norek2" value="946 713 835">
                            
                            <div class="donasi">
                              <input type="submit" class="btn btn-donasi-sekarang" name="transfer2" style="width: 100%;"
                                value="DONASI">
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
      </div>


    <!-- HP -->
      <div class="hp">
          <!-- Start Header -->
          <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: white;">
            <div class="container">
              <img src="../../img/icon/logo.png" style="width: 3em;">
            </div>
          </nav>
        <!-- Table Donasi -->
          <div class="container" style="margin-bottom: 5px; margin-top:40px;">
            <div class="halsatu-hp shadow-sm">
              <div class="row row-cols-2">
                <div class="col-4 cover">
                  <img src="https://dompetdonasi.com/img/foto-campaign/<?php echo $foto; ?>" width="100%" style="border-radius: 10px;">
                </div>
                <div class="col-7 penggalang-dana">
                    <p class="text-first-penggalangan-dana-hp">Penggalang Dana :</p>
                    <p class="text-second-penggalangan-dana-hp"><?php echo $nama; ?></p>
                </div>

              </div>
            </div>

            <form method="post">
              <div class="haldua-hp shadow-sm"  style="margin-bottom: 20px;">
                <div class="input-group">
                  <input type="hidden" name="link" value="<?php echo($link); ?>">
                  <input type="text" name="nama" class="form-control" aria-label="Sizing example input"  placeholder="Nama" required="required" oninvalid="this.setCustomValidity('Masukkan Nama Kamu')" oninput="setCustomValidity('')">
                </div>
                <div class="input-group">
                  <input type="text" class="form-control" name="hp" maxlength="13" id="inputAddress" aria-label="Sizing example input"  placeholder="Nomor Telphone / Whatsapp" oninput="setCustomValidity('')"onkeypress="return hanyaAngka(event)" required="required" oninvalid="this.setCustomValidity('Masukkan No Whatsapp/Telephone')" oninput="setCustomValidity('')">
                </div>
                
                <div class="input-group">
                  <input type="email" class="form-control" name="email" id="inputAddress" aria-label="Sizing example input"  placeholder="Masukkan Email Anda" required="required" oninvalid="this.setCustomValidity('Masukkan Email Anda')" oninput="setCustomValidity('')">
                </div>
                
                <div class="input-group flex-nowrap">
                  <span class="input-group-text" id="addon-wrapping"><b>RP</b></span>
                  <input type="text" class="form-control" name="donasi" id="rupiah2" maxlength="12" placeholder="Nominal Donasi" aria-label="nominal" required="required" oninvalid="this.setCustomValidity('Masukan Nilai Donasi Kamu')" 
                  oninput="setCustomValidity('')" autocomplete="off">
                </div>

                <div class="input-group">
                  <textarea class="form-control" name="keterangan" aria-label="With textarea" placeholder="Doa-doa :)"></textarea>
                </div>

                <label style="font-size: 14px; color:  #575157; margin-bottom: 8px;">Melalui Bank :</label>
                <div class="accordion" id="accordionExample2">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                        <img src="../../img/icon/bri.png" style="width:35%; margin-right:10px;">Bank BRI
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                      <div class="accordion-body">
                        <div class="card-body-hp" style="padding: 0;">
                            <input type="hidden" name="name_rek" value="Yayasan Dompet Yatim Piatu Amanah">
                            <input type="hidden" name="norek" value="0523 0100 0259 302">
                            
                            <div class="donasi">
                              <input type="submit" class="btn btn-donasi-sekarang-hp" name="transfer" style="width: 100%;"
                                value="DONASI">
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                        <img src="../../img/icon/bni.png" style="width:28%; margin-right:10px;">Bank BNI
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                      <div class="accordion-body">
                        <div class="card-body-hp"  style="padding: 0;">
                            <input type="hidden" name="name_rek2" value="Dompet Yatim Piatu Amanah">
                            <input type="hidden" name="norek2" value="946 713 835">
                            
                            <div class="donasi">
                              <input type="submit" class="btn btn-donasi-sekarang-hp" name="transfer2" style="width: 100%;"
                                value="DONASI">
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form> 

            <p style="font-size: 8px; color: color: #575157; text-align: center; margin-bottom: 10px;">&copy; 2021 Dompet Yatim Amanah | All Reserved</p>
            
          </div>
      </div>  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../js/donasi.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
