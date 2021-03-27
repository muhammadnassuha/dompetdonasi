<?php

require 'function.php';
// looping campaign desktop
$query    = mysqli_query($conn, "SELECT * FROM `campaign` WHERE konfirmasi = 'OK'  ORDER BY `id` DESC");

// looping campaign desktop
$query2    = mysqli_query($conn, "SELECT * FROM `campaign` WHERE konfirmasi = 'OK'  ORDER BY `id` DESC");

// looping campaign HP
$query5    = mysqli_query($conn, "SELECT * FROM `campaign`  WHERE konfirmasi = 'OK'  ORDER BY `id` DESC");



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="facebook-domain-verification" content="4r929jcmxoj8q1eet9odbn1saj1nqm" />
    <meta name="google-site-verification" content="SiyXkdUhiPqO1nUd0-828FKL_nQAygEy6e4l2t2kmIY" />
    
    <!-- share Fb -->
    <meta property="og:url"           content="https://dompetdonasi.com/" />
    <meta property="og:type"          content="Dompetdonasi.com - Website Crowdfunding" />
    <meta property="og:title"         content="Dompet Donasi - Berbagi Kebaikan Berkah Melimpah" />
    <meta property="og:description"   content='Yayasan Crowdfunding dimana orang orang dapat membuat penggalangan dana dan memberikan bantuan secara transparansi sehingga dapat memberikan senyumanan terhadap semua orang.' >
    <meta property="og:image"         content='https://dompetdonasi.com/img/icon/cover.jpg'/>
    <meta property="og:image:type"    content="image/jpeg">
    
    <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
    <meta property="og:image:width"   content="300">
    <meta property="og:image:height"  content="300">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="img/icon/logo_favicon.png">
    <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>

    <title>Dompet Donasi - Berbagi Kebaikan Berkah Melimpah</title>
  </head>
  <body>
    <!-- desktop -->
      <div class="desktop">
        <!-- Start Header -->
          <nav class="navbar navbar-expand-lg shadow-sm fixed-top" style="background-color: white;">
            <div class="container">
              <img src="img/icon/logo.png" style="width: 4em;"><a class="navbar-brand" href="" style="">Dompet Donasi</a>
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
        <!-- Slide -->
          <!-- curved -->
          <section class="curved" style=" background-position: center; /* Center the image */
                                          background-repeat: no-repeat; /* Do not repeat the image */
                                          background-image: url('img/icon/cover.jpg'); /* The image used */
                                          background-size: cover;
                                           /* Resize the background image to cover the entire container */
                                          background-color:#56b1ab;">
            <div class="container">
                <p style="text-align: center;"><a href="create_campaign/"  class="btn btn-galangdana">Buat Galang Dana</a></p>
                <p style="text-align: center;"><a href="#"  class="btn btn-tanyakami">Tanya Tentang Dana</a></p> 
            </div>
        </section>
        <!-- End Header -->

       
        
        
        
        <!-- Penggalangan Dana -->
        <div class="container">
          <h1 class="first-text-judul-campaign">Campaign Pilihan</h1>
          <p class="second-text-judul-campaign">Membantu sesama bukanlah pilihan melainkan kewajiban</p>
          <div class="row row-cols-3 justify-content-center">

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

                    <div class="col" style="width: 23em; margin-bottom: 20px">
                      <a href="https://dompetdonasi.com/campaign/campaign?id=<?php echo $data["link"]; ?>" class="campaign" style="text-decoration: none;">
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
                              <div class="row row-cols-2">
                                <div class="col terdanai">
                                  <p class="nominal-terdanai">Rp. <?php echo number_format($data["donasi"]); ?></p>
                                  <p class="text-kekurangan">Terdanai</p>
                                </div>
                                <div class="col kekurangan">
                                  <p class="nominal-kekurangan">Rp. <?php echo $data["target"]; ?></p>
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
        
        
        <!-- Data Penggalangan Dana -->
        <div class="perkenalan" sytle="padding:20px;">
            <div class="container" style="width: 60%; padding:20px;">
              <div class="mengapa-donasi">
                <h2 class="first-text-mengapa-donasi">Mengapa donasi lewat Dompetdonasi.com ?</h2>
                <p class="first-text-mengapa-donasi">Dompetdonasi.com memudahkan Anda dalam melakukan donasi online dan penggalangan dana untuk orang yang membutuhkan, namun mengapa harus Dompetyatimamanah.com?</p>
    
    
                <div class="row row-3">
                  <div class="col-4">
                    <img src="img/icon/tepat-sasaran-01.png" width="100%">
                    <h5 class="text-mengapa-donasi">Tepat Sasaran</h5>
                    <p class="text-mengapa-donasi">Donasi yang terkumpul melalui Dompetdonasi.com akan disalurkan secara langsung ke rumah sakit atau ke keluarga pasien.</p>
                  </div>
                  <div class="col-4">
                    <img src="img/icon/transparan-01.png" width="100%">
                    <h5 class="text-mengapa-donasi">Transparan</h5>
                    <p class="text-mengapa-donasi">Dompetdonasi.com sangat transparan dalam mengelola keuangan. Setiap transaksi dan distribusi donasi dapat dilihat melalui halaman transparansi.</p>
                  </div>
                  <div class="col-4">
                    <img src="img/icon/update-01.png" width="100%">
                    <h5 class="text-mengapa-donasi">Update Pasien</h5>
                    <p class="text-mengapa-donasi">Dompetdonasi.com akan memberikan update mengenai keadaan pasien setelah menerima penanganan medis secara berkala kepada donatur.</p>
                  </div>
                </div>
              </div>  
            </div>    
        </div>
        

        <!-- footer -->
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

    <!-- HP -->
      <div class="hp">
         <!-- Start Header -->
          <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: white;">
            <div class="container">
              <img src="img/icon/logo.png" style="width: 3em;"><a class="navbar-brand" href="index" style="">Dompet Donasi</a>
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
          
          <!-- Start Footer -->
            <div class="footer-fix-hp fixed-bottom">
                <div class="row row-cols-4">
                  <div class="col-3">
                    <p class="text-footer-fixed-hp"><a href="index.php" class="link-text-footer" style="color:#35a04c;"><i class="fas fa-home"style="color:#35a04c;"></i><br>Home</a></p>
                  </div>
                  <div class="col-3">
                      <p class="text-footer-fixed-hp"><a href="" class="link-text-footer"><i class="fas fa-hand-holding-heart"></i><br>Donasi</a></p>
                  </div>
                  <div class="col-3">
                      <p class="text-footer-fixed-hp"><a href="user/login.php" class="link-text-footer"><i class="fas fa-plus-circle"></i><br>Campaign</a></p>
                  </div>
                  <div class="col-3">
                      <p class="text-footer-fixed-hp"><a href="user/login.php" class="link-text-footer"><i class="fas fa-user"></i><br>Akun</a></p>
                  </div>
                  
                </div>
            </div>
          
          
          <!-- curved -->
          <section class="curved-hp" style="background-position: center; /* Center the image */
                                            background-repeat: no-repeat; /* Do not repeat the image */
                                            background-image: url('img/icon/cover.jpg'); /* The image used */
                                            background-size: cover; /* Resize the background image to cover the entire container */
                                            background-color:#56b1ab;">
            <div class="container">
                <p style="text-align: center;"><a href="create_campaign/"  class="btn btn-galangdana">Buat Galang Dana</a></p>
                <p style="text-align: center;"><a href=""  class="btn btn-tanyakami">Tanya Tentang Dana</a></p> 
            </div>
        </section>
        <div class="container">
            
        </div> 
          <!--<div class="app shadow-sm">-->
          <!--  <div class="row row-2">-->
          <!--    <div class="col-6">-->
               
          <!--    </div>-->
          <!--    <div class="col-6">-->
               
          <!--    </div>-->
          <!--  </div>    -->
            
          <!--</div>-->
        
          
          <div class="container" style="width:95%; margin-top:20px;">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="img/slider/Zakat Online-01.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/slider/Zakat Online-01.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/slider/Zakat Online-01.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          
                      
                      
        <!-- Penggalangan Dana -->
        <div class="container" style="width:80%;">
          <h1 class="first-text-judul-campaign-hp">Donasi Inspiratif</h1>
          <p class="second-text-judul-campaign-hp">Membantu sesama bukanlah pilihan melainkan kewajiban</p>
        </div>
        <div class="container" style="width:90%;">
          <div class="row row-cols-3 justify-content-center">
        

            <!-- looping -->
              <?php if(mysqli_num_rows($query2)){ ?>
              <?php
                      $no = '<i class="far fa-user-circle fa-3x"></i>';
                      while($data2 = mysqli_fetch_array($query2)){
                  ?><?php
                  $dateawal2 = date("Y-m-d");
                  $dateakhir2 = $data["periode"];
  
                  $awal2 = new DateTime($dateakhir2);
                  $akhir2 = new DateTime($dateawal2);

                  // die(var_dump($dateakhir));
            
  
                  $sisa2 = $akhir2->diff($awal2);
  
                  // die(var_dump($sisa->days))
  
                    $harga2 = $data2["donasi"];
                    // $harga2 = substr($harga2,3);
                    $harga2 = (int) $harga2;

  
                    $harga3 = $data2["target"];
                    $harga3 = str_replace(".","",$harga3);
                    $harga3 = (int) $harga3;
  
                    $Tdonasi2 = $harga3;
                    $persen2  = round($harga2/$Tdonasi2 * 100,2);
                    
                    
                  // endpersen 
                    ?>

                    <div class="col" style="width: 25em; margin-bottom: 20px">
                      <a href="https://dompetdonasi.com/campaign/campaign?id=<?php echo $data2["link"]; ?>" class="campaign" style="text-decoration: none;">
                        <div class="card campaign">
                          <img src="https://dompetdonasi.com/img/foto-campaign/<?php echo $data2["gambar"]; ?>" >
                          <div class="content">
                            <div class="judul-campaign-hp2">
                              <p><?php echo $data2["judul"]; ?></p>
                            </div>
                            <div class="penggalangan-dana-hp2">
                              <p>Oleh <?php echo $data2["nama"]; ?></p>
                            </div>
                            <div class="progress-hp2">
                              <div class="progress-bar-hp2" role="progressbar" style="width: <?php echo $persen2; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="nominal-donasi-hp2">
                              <div class="row row-cols-2">
                                <div class="col terdanai-hp2">
                                  <p class="nominal-terdanai-hp2">Rp. <?php echo number_format($data2["donasi"]); ?></p>
                                  <p class="text-kekurangan-hp2">Terdanai</p>
                                </div>
                                <div class="col kekurangan-hp2">
                                  <p class="nominal-kekurangan-hp2">Rp. <?php echo $data2["target"]; ?></p>
                                  <p class="text-kekurangan-hp2">Target</p>
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
          
          <!-- selengkapnya -->
          <!--<div class="selengkapnya-hp" style="text-align: center; margin: 20px 0;">-->
          <!--  <a href="selengkapnya" class="btn btn-selengkapnya-hp">Lihat Selengkapnya</a>-->
          <!--</div>-->
          
            <!-- Konfirmasi Donasi-hp -->
            <div class="konfirmasi-donasi-hp">
                <div class="container">
                    <p class="first-text-konfirmasi-hp">Lakukan Konfirmasi Donasi setelah melakukan donasi</p>
                </div>
                
              <div class="konfirmasi-hp" style="text-align: center; margin: 20px 0;">
                <a href="bank/bank_konfirmasi.php" class="btn-konfirmasi-hp">Konfirmasi Donasi</a>
              </div>
            </div>
          
          <!-- Data Penggalangan Dana -->
            <div class="perkenalan" sytle="padding:10px; maregin-top:20px; margin-bottom:80px;">
                <div class="container" style="width: 90%; padding:20px;">
                  <div class="mengapa-donasi">
                    <h2 class="first-text-mengapa-donasi">Mengapa donasi lewat Dompetdonasi.com ?</h2>
                    <p class="first-text-mengapa-donasi">Dompetdonasi.com memudahkan Anda dalam melakukan donasi online dan penggalangan dana untuk orang yang membutuhkan, namun mengapa harus Dompetyatimamanah.com?</p>
        
        
                        <img src="img/icon/tepat-sasaran-01.png" width="100%">
                        <h5 class="text-mengapa-donasi">Tepat Sasaran</h5>
                        <p class="text-mengapa-donasi">Donasi yang terkumpul melalui Dompetdonasi.com akan disalurkan secara langsung ke rumah sakit atau ke keluarga pasien.</p>
                        
                        <img src="img/icon/transparan-01.png" width="100%">
                        <h5 class="text-mengapa-donasi">Transparan</h5>
                        <p class="text-mengapa-donasi">Dompetdonasi.com sangat transparan dalam mengelola keuangan. Setiap transaksi dan distribusi donasi dapat dilihat melalui halaman transparansi.</p>
                        
                        <img src="img/icon/update-01.png" width="100%">
                        <h5 class="text-mengapa-donasi">Update Pasien</h5>
                        <p class="text-mengapa-donasi">Dompetdonasi.com akan memberikan update mengenai keadaan pasien setelah menerima penanganan medis secara berkala kepada donatur.</p>
                         <div class="scat3" style="height:8vh;">
                             
                         </div>
                        </div>
                      </div>  
                    </div>    
                  </div>
                 </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
