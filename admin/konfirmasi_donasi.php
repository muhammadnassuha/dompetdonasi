<?php 
date_default_timezone_set("Asia/Bangkok");

session_start();

if (!isset($_SESSION["admin"]) ) {
    header("Location: login.php");
    exit;
 }




require '../function.php';
include 'utility.php';

$date = date("Y-m-d H:i:s");
$ip = get_client_ip();

$data = $_SESSION['id'];

if (isset($_POST["admin"]) ) {
       
    if(update_donasi_admin($_POST) == 1 ) {
        echo "<script>
                alert('Terima kasih, Donasi sudah berhasil di konfimasi');
        document.location.href = '../tabel_admin/';
        </script>";
        
         $log_qry = "insert into log_activity (user_id, ip, description, date) VALUES ('$data', '$ip', 'Konfirmasi Donasi', '$date')";
           
        $log_act = mysqli_query($conn, $log_qry);
       
        
     
        
    
   
    } else {
        echo "<script>
                alert('bukti transaksi tidak dapat dikirim');
            </script>";
    } 
}


 $id     = mysqli_escape_string($conn, $_GET["id"]);
 $nama   = mysqli_escape_string($conn, $_GET["nama"]);

// detail campaign desktop dan hp
$query  = mysqli_query($conn, "SELECT * FROM donasi WHERE id= '$id' AND nama= '$nama' ");
$data   = mysqli_fetch_assoc($query);

$id         = $data["id"];
$nama       = $data["nama"];
$donasi     = $data["donasi"];
$link       = $data["link"];
$donasi     = $data["donasi"];
$kode_unik  = $data["kode_unik"];
$total      = $data["jumlah_donasi"];
$konfimasi  = $data["keterangan"];

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
  <link rel="shortcut icon" href="../img/icon/logo.png"/>
  <link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.min.css">
  <link rel="stylesheet" href="../css/bank.css">

  <title>Donasi - Admin</title>

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

    <div class="jumbotron"  style="
        background-image: url('../img/icon/cover.jpg'); /* The image used */
        backgorund-size:100%,100%;
        background-size:cover;
        height:100%;
        width:100%;
        position:absolute;">
            <div class="container"  class="shadow-sm" style="padding: 10px;margin-top: 40px;">
              
              <div class="konfirmasi shadow-sm" style="background-color: white; padding: 30px; border-radius: 10px;">
                <p class="konfirmasi-donasi" style="margin-bottom: 20px">Konfirmasi Donasi Admin</p>

                <table class="table">
                <tr>
                  <td align="left">Nama</td>
                  <th style="text-align: right;"><?php echo $nama; ?></th>
                </tr>

                <tr>
                  <td align="left">donasi</td>
                  <th style="text-align: right;"><?php echo $donasi; ?></th>
                </tr>

                <tr>
                  <td align="left">kode unik</td>
                  <th style="text-align: right;"><?php echo $kode_unik; ?></th>
                </tr>

                <tr>
                  <td align="left">Total donasi</td>
                  <th style="text-align: right;">Rp. <?php echo $total; ?></th>
                </tr> 
                
                <tr>
                  <td align="left">Konfirmasi donasi</td>
                  <th style="text-align: right;"><?php echo $konfimasi; ?></th>
                </tr>
              </table>
                <form method="post" action=""onsubmit="return validasi_input(this)" autocomplete="off">
                <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" >
                <input type="hidden" name="link" class="form-control" value="<?php echo $link; ?>" >
                    <div class="form-group">
                      <input type="text" class="form-control" name="nama" placeholder="nama yg akan di tampilkan di kolom donatur" value="<?php echo $hasil['dibuat'] ?>">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" name="rupiah" id="rupiah" placeholder="Masukan uang yg di transfer">
                    </div>
                    <p style="color:red; font-size:14px; margin-top:-19px;">*masukkan sesuai dgn nilai transfer</p>

                    <div class="tombol">
                      <div class="row justify-content-center">
                        <div class="col-md-5">
                      <button type="submit" name="admin" class="btn btn-danger" style="width:100%;">OK</button></div>
                      </div>
                    </div>
                </form>
              </div>  
            </div>
    </div>


    <script>

function validasi_input(form){
  
    //validasi dimulai
    if (form.rupiah.value=="") {
     alert("Butuh Kepastian!");
     form.rupiah.focus();
     return (false);
    }


}
  
  var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e){
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
 
    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split       = number_string.split(','),
      sisa        = split[0].length % 3,
      rupiah      = split[0].substr(0, sisa),
      ribuan      = split[0].substr(sisa).match(/\d{3}/gi);
 
      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }
 
      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

  
  </script>
  </body>

</html>