<?php

require '../../function.php';

// die(var_dump($data));

if (isset($_POST["konfirmasi"]) ) {

    if(update_donasi($_POST) == 1 ) {
        echo "<script>
                alert('Terima kasih, Donasi sudah berhasil di konfimasi');
				document.location.href = '../';
				</script>";
        
    } else {
        echo "<script>
                alert('bukti transaksi tidak dapat dikirim');
            </script>";
    } 
}

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
  <link rel="shortcut icon" href="../../img/icon/logo_favicon.png"/>
  <link rel="stylesheet" href="../../fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../css/bank.css">
  <title>Dompet Donasi - Kirim Resi</title>

  <style type="text/css">
    a.btn.btn.donasi{
      font-weight: bold;
    }

  </style>

</head>
  <body>
      <!-- Start Header -->
          <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: white;">
            <div class="container">
              <a class="navbar-brand" href="https://dompetdonasi.com/login_user/" style=""><img src="../../img/icon/logo2.png" style="width: 4em;"></a>
            </div>
          </nav>
            <div class="container"  class="shadow-sm" style="padding: 10px;margin-top: 40px;">
              
              <div class="konfirmasi shadow-sm" style="background-color: white; padding: 30px; border-radius: 10px;">
              <h5 class="konfirmasi-donasi" style="font-weight:bold; text-align:center;">KONFIRMASI DONASI ANDA</h5>
              <p  style="margin:0; text-align:center;">Mari bantu mempermudah pengecekan data kami dan memeriksa uangnya sudah masuk atau belum kak!</p>
              
              <form method="post" action="" enctype="multipart/form-data" name="redirect" onsubmit="return validasi_input(this)" >
                <div class="form-konfimasi" style="padding-top: 20px;">
                <input class="form-control form-control-md" type="text" name="nama" placeholder="Nama" aria-label=".form-control-md example" style="margin-bottom:15px;" 
                required="required" oninvalid="this.setCustomValidity('Masukkan Nama Anda')" oninput="setCustomValidity('')">  

                      <div class="input-group mb-3" style="margin-bottom:15px;">
                        <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
                        <input type="text" name="donasi" id="rupiah" maxlength="12" class="form-control" placeholder="Jumlah Nominal" aria-label="Username" 
                        aria-describedby="basic-addon1" required="" oninvalid="this.setCustomValidity('Masukkan Donasi Anda')" oninput="setCustomValidity('')" autocomplete="off">
                      </div>

                    <div class="mb-3" style="margin-bottom:15px;">
                        <input class="form-control" name="gambar" type="file"   id="formFileMultiple" accept="image/*" multiple required="" 
                        oninvalid="this.setCustomValidity('Upload Foto Resi Kak')" oninput="setCustomValidity('')">
                        <label for="formFileMultiple" class="form-label" style="color:red; font-size:12px;">*Ekstensi .jpg, .jpeg</label>
                    </div>

                    <div class="konfirmasi-sekarang">
                      <input type="submit" class="btn btn-primary" name="konfirmasi" value="upload" 
                      style="background-color: #f77527;width: 100%; padding: 11px; margin-bottom: 0; 
                      border-radius: 15px 15px  15px; font-size: 16px; text-align: center; font-weight:bold;">
                    </div>
                  
                </div>
              </form>
            </div>
  </body>

  <script>
     // rupiah
     var rupiah = document.getElementById('rupiah');
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
  </script>

</html>