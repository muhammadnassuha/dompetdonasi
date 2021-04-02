<?php  

require '../function.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/all_campaign.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="../img/icon/logo_favicon.png">

    <style type="text/css">
      #ajax-loader{
         text-align: center;
         margin:10px;
         display: none !important;
      }
    </style>

    <title>Dompet Donasi</title>
</head>

<body>
  <!-- navbar-desktop -->
      <div class="nav-desktop">
        <nav class="navbar navbar-expand-lg fixed-top nav-desk">
          <div class="container">
            <img src="../img/icon/logo.png" style="width: 4em;"><a class="navbar-brand" href="https://dompetdonasi.com" style="">Dompet Donasi</a>
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
                  <a href="../user/login" class="masuk">Masuk</a><a href="../user/register" class="daftar">Daftar</a>
              </form>
            </div>
          </div>
        </nav>
      </div>

  <!-- navbar hp -->
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
                  <a href="../user/login" class="masuk">Masuk</a><a href="../user/register" class="daftar">Daftar</a>
              </form>
            </div>
          </div>
        </nav>
      </div>

      <div class="container" style="width:80%; margin-top: 20vh">
        <h1 class="first-text-judul-campaign">Semua Campaign</h1>
        <p class="second-text-judul-campaign">Membantu sesama bukanlah pilihan melainkan kewajiban</p>
      </div>

      <div class="container">
          <div class="row row-cols-3 justify-content-center" id="dynamic-posts2">

          </div>

          <div id="ajax-loader">
              <p>Please wait..!</p>
          </div>
          <div class="scat3" style="height: 10vh;">
                             
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
                  <p class="text-footer-fixed-hp"><a href="../" class="link-text-footer"><i class="fas fa-home""></i><br>Home</a></p>
                </div>
                <div class="col-3">
                    <p class="text-footer-fixed-hp"><a href="" class="link-text-footer" style="color:#35a04c;"><i class="fas fa-hand-holding-heart"></i><br>Donasi</a></p>
                </div>
                <div class="col-3">
                    <p class="text-footer-fixed-hp"><a href="../create_campaign/" class="link-text-footer"><i class="fas fa-plus-circle"></i><br>Campaign</a></p>
                </div>
                <div class="col-3">
                    <p class="text-footer-fixed-hp"><a href="../login_user/dashboard" class="link-text-footer"><i class="fas fa-user"></i><br>Akun</a></p>
                </div>
                
              </div>
          </div>
      </div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
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
  $(document).ready(function() {
    var page_num = 1;
    load_page(page_num, false);

    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 20) {
            page_num++;
            load_page(page_num, false)
        }

    });

});

function load_page(page_num, loading) {
    if (loading == false) {
        loading = true;
        $.ajax({
            url: 'post.php',
            type: "post",
            data: {
                page_num: page_num
            },
            beforeSend: function() {
                $('#ajax-loader').show();
                return;
            }
        }).done(function(data) {
            $('#ajax-loader').hide();
            loading = false;
            $("#dynamic-posts2").append(data);
        }).fail(function(jqXHR, ajaxOptions, thrownError) {
            $('#ajax-loader').hide();
        });

    }

}

</script>
</html>