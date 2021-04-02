<?php 

require "../function.php";

$result   = mysqli_query($conn, "SELECT * FROM donasi ORDER BY id DESC LIMIT 1");

$row      = mysqli_fetch_array($result);

$data     = $row["jumlah_donasi"];

// die(var_dump($data));

$subdata  = substr($data,0,-3);
$hasil    = ($subdata);

// die(var_dump($hasil));
$kd_unik  = sprintf('%03d',$row["kode_unik"]);

// akhir
$jam    = $row["berakhir"];
$tgl    = date("d F Y", strtotime($jam));
$waktu  = date("H:i:s", strtotime($jam));


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="shortcut icon" href="../img/icon/logo_favicon.png">
  <link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.min.css">
  <link rel="stylesheet" href="../css/bank.css">

  <title>Dompet Donasi - BRI</title>

  <style type="text/css">

    p.konfirmasi-donasi{
      text-align: center;
      font-weight: bold;
      margin: 0;
      font-size: 16px;
    }



  </style>

</head>
  <body>
      
      <!-- Start Header -->
          <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: white;">
            <div class="container">
              <a class="navbar-brand" href="https://dompetdonasi.com" style=""><img src="../img/icon/logo2.png" style="width: 4em;"></a>
            </div>
          </nav>
          
      <div class="container"  class="shadow-sm" style="padding: 10px;margin-top: 5px;">
        
        <div class="konfirmasi shadow-sm" style="background-color: white; padding: 30px; border-radius: 10px;">
          <p class="konfirmasi-donasi">KONFIRMASI DONASI ANDA</p>

          <p  style="text-align: center; font-size:12px;">Segera lakukan pembayaran dengan nominal :</p>

          <h5 class="donasi" style="text-align: center; color:#53a946; font-size:24px;">Rp. <?php echo $hasil; ?><font class="unik"><?php echo $kd_unik; ?></h5></font>

          <table class="table">
            <tr>
              <td style="text-align: left; font-size:12px;">Jumlah Donasi </td>
              <th style="text-align: right; font-size:12px;"><?php echo $row["donasi"]; ?></th>
            </tr>

            <tr>
              <td style="text-align: left; font-size:12px;">Kode Unik <font color="#FFA07A">*</font></td>
              <th style="text-align: right; font-size:12px;"><?php echo $kd_unik; ?></th>
            </tr>
          </table>

          <div class="title_donasi"  style="text-align: center;">Harap ditransfer Ke Rek a/n <b><?php echo $row["nama_rek"]; ?></b> berikut ini :</div>
            <div class="rekening" style="text-align: center; margin-top: 15px">
              <img src="../img/icon/bri.png" style="float: bottom; width: 10em; margin-bottom:2px;"><p class="no_rek" style="font-size: 18px;"><b><?php echo $row["no_rek"]; ?></b></p>
            </div>
            <p  style="text-align: center; font-size:12px;">Segera lakukan pembayaran sebelum tanggal <br><b><?php echo $tgl; ?> Pukul <?php echo $waktu; ?> WIB</b></p>
          </div>

          <div class="container"style="background-color: white; padding: 10px; border-radius: 10px; margin-top:5px;">
            <a class="btn btn-konfirmasi" href="bank_konfirmasi">Konfirmasi Donasi</a>
          <a class="btn btn-beranda" href="../">Beranda</a>
          
          </div>
     </div>
  </body>

</html>