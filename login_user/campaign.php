<?php 

require '../function.php';

session_start();

if (!isset($_SESSION["user"]) ) {
    header("Location: ../");
    exit;
 }

$id     = mysqli_escape_string($conn, $_GET["id"]); 

// detail campaign desktop dan hp
$query  = mysqli_query($conn, "SELECT * FROM campaign WHERE link= '$id'");
$data   = mysqli_fetch_assoc($query);


$nama       = $data["nama"];
$judul      = $data["judul"];
$link       = $data["link"];
$donasi     = $data["donasi"];
$target     = $data["target"];
$foto       = $data["gambar"];
$deskripsi  = $data["deskripsi"];



$dateawal   = date("Y-m-d");
$dateakhir  = $data["periode"];

$awal       = new DateTime($dateakhir);
$akhir      = new DateTime($dateawal);

// die(var_dump($dateakhir));


$sisa       = $akhir->diff($awal);

// die(var_dump($sisa->days));

$harga1     = $data["donasi"];
$harga1     = (int) $harga1;


$harga      = $data["target"];
$harga      = str_replace(".","",$harga);
$harga      = (int) $harga;

$Tdonasi    = $harga;
$persen     = round($harga1/$Tdonasi * 100,2);

// update cerita
$query6          = mysqli_query($conn, "SELECT * FROM update_campaign WHERE link= '$id'");

// jumlah donatur

$query2  = mysqli_query($conn, "SELECT * FROM donasi WHERE link = '$id' and keterangan = 'OK' ");
$donatur = mysqli_num_rows($query2);


// list donatur desktop
$query3  = mysqli_query($conn, "SELECT * FROM donasi WHERE link = '$id' and keterangan = 'OK' ORDER BY `id` DESC ");

// list donatur hp
$query4  = mysqli_query($conn, "SELECT * FROM donasi WHERE link = '$id' and keterangan = 'OK' ORDER BY `id` DESC ");

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- share Fb -->
    <meta property="og:url"           content="https://dompetdonasi.com/campaign/campaign?id=<?php echo $data["link"]; ?>" />
    <meta property="og:type"          content="Website"/>
    <meta property="og:title"         content="Dompet Donasi - <?php echo $data["judul"]; ?>" />
    <meta property="og:description"   content='<?php echo htmlspecialchars_decode($deskripsi); ?>' >
    <meta property="og:image"         content='https://dompetdonasi.com/img/foto-campaign/<?php echo $foto; ?>' />
    <meta property="og:image:type"    content="image/png">
    <meta property="og:image:width"   content="256" />
    <meta property="og:image:height"  content="256" />
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/campaign.css">
    <link rel="shortcut icon" href="../img/icon/logo_favicon.png">

    <style type="text/css">
      .tab-content p img, .haltiga-hp p img, .halempat-hp p img{
        width: 100% !important;
        height: auto !important;
      }
    </style>

    <title>Donasi - <?php echo $data["judul"]; ?></title>
  </head>
  <body>
    <!--share fb-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="JsIbpaz1"></script>

    <!-- desktop -->
    <div class="desktop">
    <!-- campaign -->
      <div class="halsatu">

        <!-- Start Header -->
          <nav class="navbar navbar-expand-lg fixed-top nav-desk">
            <div class="container">
              <img src="../img/icon/logo.png" style="width: 4em;"><a class="navbar-brand" href="https://dompetdonasi.com/login_user/" style="">Dompet Donasi</a>
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
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-top: 12px; font-weight: bold; margin-right: 5px;"><?php echo $_SESSION['nama_lengkap']; ?></a>
                  </li>
                </ul>
                  <div class="dropdown">
                    <button class="dropbtn">
                      <div class="container">
                        <div class="row row-cols-2">
                          <div class="col">
                            <div class="user-header">
                              <img src="https://dompetdonasi.com/img/user_account/<?php echo $_SESSION["profil"]; ?>" style="width: 40px; height: 40px;" >
                            </div>
                          </div>
                        </div>
                      </div></button>
                    <div class="dropdown-content">
                      <a href="dashboard/" class="nav-user"><i class="fas fa-home" aria-hidden="true" width="100%"></i> Dashboard</a>
                      <a href="../admin/logout.php" class="nav-user"><i class="fa fa-sign-out" aria-hidden="true" width="100%"></i>Logout</a>
                    </div>
                  </div> 
                </form>
              </div>
            </div>
          </nav>
        <!-- End Header -->

        <div class="container">
            <div class="judul-campaign">
              <h3 class="judul-campaign"><?php echo $data["judul"]; ?></h3>
            </div>
          <div class="row row-cols-2">
            <div class="col-8 campaign" style="">
               <img src="https://dompetdonasi.com/img/foto-campaign/<?php echo $foto; ?>" width="100%">
            </div>
            <div class="col-4 campaign" style="">

              <div class="col terdanai">
                <h2 class="nominal-terdanai">Rp. <?php echo number_format($donasi); ?></h2>
                <p class="text-terdanai">Terdanai</p>
              </div>

              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo $persen; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <div class="nominal-keterangan">
                <div class="row row-cols-2">
                  <div class="col waktu">
                    <p class="text-sisa-hari"><?php echo $sisa->days; ?> Hari</p>
                    <p class="sisa-waktu">Sisa Waktu</p>
                    
                  </div>
                  <div class="col kekurangan">
                    <p class="text-kekurangan">Rp. <?php echo $target; ?></p>
                    <p class="nominal-kekurangan">Kekurangan</p>
                  </div>
                </div>
              </div>

              <div class="donasi">
                <a href="https://dompetdonasi.com/login_user/donasi?id=<?php echo $data["link"]; ?>" class="btn btn-donasi-sekarang">DONASIKAN</a>
              </div>
              <div class="fb-share-button" data-href="https://dompetdonasi.com/campaign/campaign?id=<?php echo $data["link"]; ?>">
                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://dompetdonasi.com/campaign/campaign?id=<?php echo $data["link"]; ?>&amp;src=sdkpreparse" 
                class="btn btn-facebook fb-xfbml-parse-ignore"><i class="fab fa-facebook-square" style="margin-right: 2px;"></i>Share di Facebook</a>
              </div>

              <div class="user">
                <div class="row">
                  <div class="col-3">
                    <div class="lingkaran">
                      <img src="https://dompetdonasi.com/img/user_account/<?php echo $_SESSION["profil"]; ?>" style="width: 70px; height: 70px;" >
                  </div>
                  </div>
                  <div class="col-9">
                    <div class="penggalangan-dana">
                      <p class="text-first-penggalangan-dana">Penggalang Dana :</p>
                      <p class="text-second-penggalangan-dana"><?php echo $nama; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="haldua">
        
        <div class="container">
          <div class="row row-cols-2">
            <div class="col-9 informasi shadow-sm">
              <!-- Tab -->
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Cerita</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Update</button>
                </li>
              </ul>
              <hr>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div style="text-align: justify;">
                    <?php echo htmlspecialchars_decode($deskripsi); ?>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <?php if(mysqli_num_rows($query6)){ ?>
                <?php
                    $no = '<i class="far fa-user-circle fa-3x"></i>';
                    while($data6 = mysqli_fetch_array($query6)){

                      ?> 

                    <?php echo htmlspecialchars_decode($data6['update_terbaru']); ?>
                  
                  <?php $no++; } ?>
                <?php } ?>
                </div>
              </div>
            </div>
            <div class="col-3 donatur">
              <p class="text-donatur">DONATUR (<?php echo $donatur ?>)</p>
              <?php if(mysqli_num_rows($query3)){ ?>
                <?php
                    $no = '<i class="far fa-user-circle fa-3x"></i>';
                    while($data3 = mysqli_fetch_array($query3)){
                      $jam3    = $data3["dibuat"];
                      $waktu3  = date("d-m-Y H:i", strtotime($jam3));

                ?> 

                <div class="list-donasi shadow-sm">
                  <div class="container">
                    <div class="row row-cols-2">
                      <div class="col-2">
                        <div class="orang-donasi" style="">
                          <img src="https://dompetdonasi.com/img/user_account/<?php echo $_SESSION["profil"]; ?>" style="width: 50px; height: 50px;" >
                        </div>
                      </div>
                      <div class="col-10" class="data-donasi">
                        <p class="donasi-donatur">Donasi <b style="font-weight: bold; color: #2fb777;"><?php echo number_format($data3["jumlah_donasi"]); ?></b></p>
                        <p class="nama-donatur"><?php echo $data3["nama"]; ?></p>
                        <p class="waktu-tanggal-donatur"><?php echo $waktu3; ?></p>
                        <p class="keterangan-donatur"><?php echo $data3["doa"]; ?></p>
                      </div>
                    </div>
                  </div>
                </div>

              <?php $no++; } ?>
                <?php } ?>
            </div>
            
          </div>
        </div>
      </div>
    <!-- end desktop -->
    </div>

    <!-- tampilan HP -->
    <div class="hp">
        
        <!-- Header Fixed -->
        <div id="top-nav">
            <nav class="navbar-hp shadow-sm">
              <div class="container-fluid" style="margin-top:8px; margin-bottom:-5px;">
                  <div class="row row-2">
                      <div class="col-1">
                         <a href="../" style="color:black;"><i class="fas fa-arrow-left"></i></a>
                      </div>
                      <div class="col-11">
                         <p style="margin left:15px; font-size:12px;"><?php echo $data["judul"]; ?></p> 
                      </div>
                  </div>
              </div>
            </nav>
        </div>
        
      <div class="halsatu-hp shadow-sm">
        <img src="https://dompetdonasi.com/img/foto-campaign/<?php echo $foto; ?>" width="100%">
        <div class="container">
          <div class="judul-campaign-hp">
            <p class="judul-campaign-hp"><?php echo $data["judul"]; ?></p>
          </div>
          <p class="nominal-terdanai-hp"><b style="font-size: 14px; color:#3bd78e;">Rp. <?php echo number_format($donasi); ?></b> terkumpul dari Rp. <?php echo $target; ?></p>
          <div class="progress ">
            <div class="progress-bar" role="progressbar" style="width: <?php echo $persen; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="keterangan-doantur-hp" style="height: 2vh; margin-top: -2px;">
            <div class="row row-cols-2">
              <div class="donatur-hp">
                <b style="color: black;"><?php echo $donatur ?></b> Donasi
              </div>
              <div class="hari-hp">
                <b style="color: black;"><?php echo $sisa->days; ?></b> Hari lagi
              </div>
            </div>
          </div>
          
          <div class="donasi-hp">
            <a href="https://dompetdonasi.com/login_user/donasi?id=<?php echo $data["link"]; ?>" class="btn btn-donasi-sekarang-hp">DONASI SEKARANG</a>
          </div>
        </div>
      </div>

      <div class="haldua-hp shadow-sm">
        <div class="container">
          <p class="text-header-penggalangan-dana-hp">Informasi Penggalangan Dana</p>
            <div class="penggalang-dana">
              <div class="row row-cols-2">
                <div class="col-2 icon-user-hp" style="margin-right: 6px;">
                  <div class="user-hp">
                   <img src="https://dompetdonasi.com/img/user_account/<?php echo $_SESSION["profil"]; ?>" style="width: 40px; height: 40px;" id="foto" >
                  </div>
                </div>
                <div class="col-9 nama-user-hp">
                  <a href="" class="first-text-user-hp"><?php echo $nama; ?></a>
                  <p href="" class="second-text-user-hp">Penggalang Dana</p>
                </div>
              </div> 
            </div>
        </div>
      </div>

      <div class="haltiga-hp shadow-sm">
        <div class="container">
          <p class="text-header-penggalangan-dana-hp">Cerita</p>
          <div style="text-align: justify;">
            
          </div>
          <!-- Accordion -->
            <p>
              <a class="btn btn lihat-selengkapnya" data-toggle="collapse" href="#cerita" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Lihat Selengkapnya <i class="fas fa-angle-down" style="margin-right: 2px;"></i></a></a>
            </p>

              <div class="col">
                <div class="collapse multi-collapse" id="cerita">
                  <div class="card card-body">
                    <p class="text-cerita-hp"><?php echo htmlspecialchars_decode($deskripsi); ?></p>
                  </div>
                </div>
              </div>
          
        </div>
      </div>

      <div class="halempat-hp shadow-sm">
        <div class="container">
          <p class="text-header-penggalangan-dana-hp">Kabar Terbaru</p>
          <!-- Accordion -->
            <p>
              <a class="btn btn lihat-selengkapnya" data-toggle="collapse" href="#kabarterbaru" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Lihat Selengkapnya <i class="fas fa-angle-down" style="margin-right: 2px;"></i></a>
            </p>

              <div class="col">
                <div class="collapse multi-collapse" id="kabarterbaru">
                  <div class="card card-body">
                    <?php echo htmlspecialchars_decode($update_terbaru); ?>
                  </div>
                </div>
              </div>

        </div>
      </div>

      <div class="hallima-hp shadow-sm">
        <div class="container">
          <p class="text-header-penggalangan-dana-hp">Donatur (<?php echo $donatur ?>)</p>
          <?php if(mysqli_num_rows($query4)){ ?>
                <?php
                    $no = '<i class="far fa-user-circle fa-3x"></i>';
                    while($data4 = mysqli_fetch_array($query4)){
                      $jam4    = $data4["dibuat"];
                      $waktu4  = date("d-m-Y H:i", strtotime($jam4));

                ?> 

          <div class="table-donasi-hp">
            <div class="row row-cols-2">
              <div class="col-2 icon-donastur-hp" style="margin-right: 6px;">
                <div class="icon-donatur-hp">
                  <img src="https://dompetdonasi.com/img/user_account/<?php echo $_SESSION["profil"]; ?>" style="width: 50px; height: 50px;" >
                </div>
              </div>
              <div class="col-9 list-donasi-hp">
                <div class="col-10" class="data-donasi">
                  <p class="nama-donatur-hp"><?php echo $data4["nama"]; ?></p>
                  <p class="donasi-donatur-hp">Donasi <b style="font-weight: bold; color: black;">Rp. <?php echo number_format($data4["jumlah_donasi"]); ?></b></p>
                  <p class="waktu-tanggal-donatur-hp"><?php echo $waktu4; ?></p>
                  <p class="keterangan-donatur-hp"><?php echo $data4["doa"]; ?></p>
                </div>
              </div>
            </div>
          </div>
          <?php $no++; } ?>
                <?php } ?>

        </div>
      </div>
      
      <div class="scat" style="height:9vh;">
          
      </div>
      
      <!-- Footer Share -->
            <div id="footer-nav">
                <div class="footer-share-hp">
                    <div class="share-hp">
                      <div class="container">
                        <div class="row row-cols-3">
                          <div class="col-2">
                            <p style="text-align:center"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://dompetdonasi.com/campaign/campaign?id=<?php echo $data["link"]; ?>&amp;src=sdkpreparse"  class="btn btn-facebook-bottom"><i class="fab fa-facebook-f"></i></a></p>
                          </div>
                          <div class="col-2">
                            <p style="text-align:center"><a class="btn btn-whatsapp-bottom"><i class="fab fa-whatsapp"></i></a></p>
                          </div>
                          <div class="col-8">
                            <p style="text-align:center"><a href="https://dompetdonasi.com/campaign/donasi/donasi?id=<?php echo $data["link"]; ?>"  class="btn btn-donasi-bottom">DONASI SEKARANG</a></p>
                          </div>
                        </div>
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
      $(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        $('.nav-desk').addClass('transparent');
      } else {
        $('.nav-desk').removeClass('transparent');
      }
    });
    </script>
    
    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("top-nav").style.top = "0";
              } else {
                document.getElementById("top-nav").style.top = "-50px";
              } 
                
              if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById("footer-nav").style.bottom = "0";
              } else {
                document.getElementById("footer-nav").style.bottom = "-50px";
            }
        }
    </script>
  </body>
</html>
