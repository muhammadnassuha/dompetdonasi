<?php

function posts($page_num) {

    $Per_Page =6;
    if (isset($page_num)) {
        $page_num = $page_num;
    } else {
        $page_num = 1;
    }

    $Page_Start = ($page_num - 1) * $Per_Page;

    require '../function.php';

    $query = $conn->query("SELECT * FROM campaign WHERE konfirmasi = 'OK' ORDER BY id DESC LIMIT $Page_Start,$Per_Page");
    return $query;
}
?>

<?php if (isset($_POST['page_num'])): ?>
    <?php $query = posts($_POST['page_num']); ?>
    <?php while ($data = $query->fetch_assoc()): ?>
    <?php
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
        <div class="col" style="width: 25em; margin-bottom: 20px">
          <a href="https://dompetdonasi.com/campaign/campaign?id=<?php echo $data["link"]; ?>" class="campaign" style="text-decoration: none;">
            <div class="card campaign">
              <img src="https://dompetdonasi.com/img/foto-campaign/<?php echo $data["gambar"]; ?>" >
              <div class="content">
                <div class="judul-campaign">
                  <p><?php echo $data["judul"]; ?></p>
                </div>
                <div class="nama">
                  <div class="row row-cols-2">
                    <div class="col">
                      <div class="penggalangan-dana">
                        <p>Oleh <?php echo $data["nama"]; ?></p>
                      </div>
                    </div>
    
                    <div class="col">
                      <div class="sisa-hari">
                        <p><?php echo $sisa->days; ?> Hari Lagi</p>
                      </div>
                    </div>
                  </div>
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
                      <p class="text-kekurangan">Kekurangan</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
      </div>
    <?php endwhile; ?>
<?php endif ?>
