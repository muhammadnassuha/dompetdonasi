<?php

session_start();

if (!isset($_SESSION["user"]) ) {
    header("Location: ../user/login");
    exit;
}

?>



<html lang="en">
<head>
  <title>Dompet Donasi - Upload Cover Campaign</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
  <link rel="shortcut icon" href="../../img/icon/logo_favicon.png">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <style>
    /*HPP*/
@media (max-width: 767.98px) {
  .desktop {
    display: none;
  }
  
}

/*DESKTOP*/
@media (min-width: 992px) {
  .hp {
    display: none;
  }  
}

body{
    background-color:#f7f7f7;
}

.navbar-expand-lg{
  background-color: white;
  padding: 15px;
}

a.navbar-brand{
  text-decoration: none;
  color: #55A746;
  font-weight: bold;
}

a.navbar-brand:hover{
  text-decoration: none;
}

  button.btn-pratinjau{
  background-color: #369b7e;
  font-size: 16px;
  font-weight: bold;
  color: white;
  width: 100%;
  border-radius: 20px;
  padding: 12px;
  margin-top: 10px;
}

button.btn-pratinjau:hover{
  background-color: #297761;
  font-size: 16px;
  font-weight: bold;
  color: white;
  width: 100%;
  border-radius: 20px;
  padding: 12px;
}


.cek label {
  font-size: 22px;
  font-weight: bold;
  margin-left: 20px;

}

.cek input {
  margin-top: 20px;
}

.cek label span {
  margin-left: 20px;
  margin-top: -10px !important;
}

input#enabled.cagree {
  width: 20px !important;
  height: 20px !important;
}

.btn-gambar{
  background-color: #297761;
  font-size: 16px;
  font-weight: bold;
  color: white;
  width: 100%;
  border-radius: 20px;
  padding: 12px;
  margin-top: 10px;
}
.btn-gambar:disabled{
  background-color: #f1f1f1;
}

</style>
</head>

<body>
<!-- desktop -->
        <div class="desktop">
            
            <!-- Start Header -->
              <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: white;">
                <div class="container">
                  <img src="../../img/icon/logo.png" style="width: 4em;"><a class="navbar-brand" href="#" style="">Dompet Donasi</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
                </div>
              </nav>
            <div class="container">
              <div class="card shadow-sm" style="border:none; padding:25px; border-radius:15px; margin-top:20px;">
                <div class="card-body">
                    <p style="margin-top:20px; margin-bottom:10px;">Sesuaikan ukuran cover campaign kamu :</p>
                    <div id="upload-demo" style="background:#b3b3b3;width:540;height:357; margin-top:10px; background-style:cover;"></div>
                        <div class="upload-image" style="margin-top:5%">
                            <input type="file" id="image" accept="image/*" >
                        </div>
                        <button class="btn btn-pratinjau btn-block btn-upload-image" style="margin-top:2%; font-weight:bold;">PRATINJAU GAMBAR</button>
            
                    <p style="margin-top:25px; margin-bottom:10px; color:red; font-size:16px;">*Cover campaign penggalangan dana kamu :</p>
                    <div id="preview-crop-image" style="background:#b3b3b3;width:540;;height:357;"></div>
                    </div>
                    <div class="cek">
                      <label><input type="checkbox" id="enabled" name="enabled" class="cagree"><span>Saya membuat Campaign ini</span></label>
                      <a href="../../login_user/"><input type="button" value="Buat Campaign Baru" name="buat_campaign" class="btn btn-gambar" id="submit-button" disabled="disabled" onclick="myFunction()"></a>
                    </div>
                </div>
              </div>
            </div>    
        </div>


        <!-- hp -->
        <div class="hp">
            <p>saa</p>    
        </div>

<script>
function myFunction() {
  alert("Mohon Menunggu, Admin akan mengkonfirmasi penggalangan dana kamu");
}
</script>

<script type="text/javascript">


var resize = $('#upload-demo').croppie({
    enableOrientation: true,    
    viewport: { // Default { width: 100, height: 100, type: 'square' } 
        width: 540,
        height: 357,
        type: 'box' //square
    }, 
        boundary: {
        width: 540,
        height: 357,
    }
});


$('#image').on('change', function () { 
  var reader = new FileReader();
    reader.onload = function (e) {
      resize.croppie('bind',{
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
});


$('.btn-upload-image').on('click', function (ev) {
  resize.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (img) {
    $.ajax({
      url: "croppie.php",
      type: "POST",
      data: {"image":img},
      success: function (data) {
        html = '<img src="' + img + '" />';
        $("#preview-crop-image").html(html);
      }
    });
  });
});


</script>


<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script> 
        $('#enabled').click(function () { 
            if ($('#submit-button').is(':disabled')) { 
                $('#submit-button').removeAttr('disabled'); 
            } else { 
                $('#submit-button').attr('disabled', 'disabled'); 
            } 
        }); 
    </script> 


</body>
</html>