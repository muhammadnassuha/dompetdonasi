<?php 

session_start();

if (!isset($_SESSION["user"]) ) {
    header("Location: ../../");
    exit;
}


require '../../../function.php';

$nama     = $_SESSION["nama_lengkap"];

$id     = mysqli_escape_string($conn, $_GET["id"]); 

// detail campaign desktop dan hp
$query  = mysqli_query($conn, "SELECT * FROM campaign WHERE link= '$id'");
$data   = mysqli_fetch_assoc($query);

// jumlah donatur

$query2  = mysqli_query($conn, "SELECT * FROM donasi WHERE link = '$id' and keterangan = 'OK' ");
$donatur = mysqli_num_rows($query2);


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../css/dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../../../fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../../css/sidebar.css">
    <link rel="shortcut icon" href="../../../img/icon/logo_favicon.png"/>

    <style type="text/css">
/*HPP*/
@media (max-width: 767.98px) {
  .desktop .navbar-desktop {
    display: none;
  }

  #sidebar-hp .user2 img {
    margin-top: 20px;
  }

  .data-profil label {
    font-size: 13px;
  }

  .data-profil .form-control {
    font-size: 13px;
  }

  .btn-save {
    width: 100% !important;
  }

  .btn-save:hover {
    border-radius: 25px;
    transition: .7s;
  }

  .breadcrumb-item {
    font-size: 12px;
  }

  .campaign-user .card-title, .campaign-user .card-terkumpul {
    font-size: 13px;
    text-align: center;
  }

  .hal2 .container {
    padding-left: 0 !important;
  }

  .table-bordered tr{
    font-size: 13px;
  }

  .table-bordered td {
    font-size: 11px;
    text-align: center;
  }

  .pagination {
    width: 100%;
  }

  .pagination a {
    font-size: 12px;
  } 

  #sidebar-desktop .navbar-expand {
    transition: 0.4s;
    z-index: 9999;
    width: 200px;
  }

  #sidebar-desktop .active-cont {
    margin-left: 0;
  }

  #sidebar-desktop .nav-link {
    font-size: 1em;
  }

}

/*DESKTOP*/
@media (min-width: 992px) {
  .navbar-hp {
    display: none;
  }  

  #menu-btn-kembali {
    display: none;
  }

}
    </style>

    <title>Campaign Saya</title>
  </head>
  <body >
    <!-- desktop -->
      <div class="desktop">

        <!-- Start Header -->
        <div class="navbar-desktop">
          <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: white;">
            <div class="container">
              <img src="../../../img/icon/logo.png" style="width: 4em;"><a class="navbar-brand" href="../../">Dompet Donasi</a>
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
                    <a class="nav-link" href="../../../create_campaign/">Buat Campaign</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-top: 12px; font-weight: bold; margin-right: -10px;"><?php echo $nama; ?></a>
                  </li>
                </ul>
                  <div class="dropdown">
                    <button class="dropbtn">
                      <div class="container">
                        <div class="row row-cols-2">
                          <div class="col">
                            <div class="user">
                                <img src="https://dompetdonasi.com/img/user_account/<?php echo $_SESSION["profil"]; ?>" style="width: 40px; height: 40px;" id="foto" >
                            </div>
                          </div>
                        </div>
                      </div></button>
                    <div class="dropdown-content">
                      <a href="#" class="nav-user"><i class="fas fa-home" aria-hidden="true" width="100%"></i> Dashboard</a>
                      <a href="../../../admin/logout.php" class="nav-user"><i class="fa fa-sign-out" aria-hidden="true" width="100%"></i>Logout</a>
                    </div>
                  </div> 
                </form>
              </div>
            </div>
          </nav>
        </div>

        <div class="navbar-hp">
          <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: white;">
            <div class="container">
              <img src="../../../img/icon/logo.png" style="width: 3em;"><a class="nav-link" href="../" style=" margin-right: -60px;"><?php echo $_SESSION['nama_lengkap']; ?></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="user">
                    <img src="https://dompetdonasi.com/img/user_account/<?php echo $_SESSION["profil"]; ?>" style="width: 40px; height: 40px;" id="foto" >
                </div>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align:right;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="dashboard/">Dahboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../../admin/logout.php">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>

          <!-- sidebar -->
          <div id="sidebar-desktop">
            <div class="side-desktop">
              <nav class="navbar navbar-expand d-flex flex-column align-item-start active-nav" id="sidebar">
                  <a href="#" class="navbar-brand text-light mt-5">
                      <div class="display-5 font-weight-bold"></div>
                  </a>
                  <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                      <li class="nav-item w-100" >
                          <a href="https://dompetdonasi.com/login_user/dashboard/campaign/?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-desktop" style="padding-right: 
                          10px;"></i>Overview</a>
                      </li>
                      <li class="nav-item active w-100">
                          <a href="https://dompetdonasi.com/login_user/dashboard/campaign/donatur?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-heart" style="padding-right: 
                          10px;"></i>Donatur</a>
                      </li>
                      <li class="nav-item w-100">
                          <a href="https://dompetdonasi.com/login_user/dashboard/campaign/pencairan_dana?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-money-check-alt" style="padding-right: 
                          10px;"></i>Pencaiaran Dana</a>
                      </li>
                      <li class="nav-item w-100">
                          <a href="https://dompetdonasi.com/create_campaign/update?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-pen-nib" style="padding-right: 
                          10px;"></i>Info Terbaru</a>
                      </li>
                      <li class="nav-item w-100">
                          <a href="https://dompetdonasi.com/login_user/dashboard/campaign/edit?id=<?php echo $data["link"]; ?>" class="nav-link text-light pl-4"><i class="fas fa-pen-nib" style="padding-right: 
                          10px;"></i>Edit Campaign</a>
                      </li>
                  </ul>
                  <button class="btn my-4" id="menu-btn-kembali">Kembali</button>
              </nav>
            </div>
          <section class="p-4 my-container active-cont">
              <button class="btn my-4" id="menu-btn">Menu Lainnya</button>
              <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb" style="font-weight: bold;">
                  <li class="breadcrumb-item"><a href="../">Campaign Saya</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo $data["judul"]; ?></li>
                </ol>
              </nav>

                <!-- Hal2 -->
              <div class="hal2">
                <div class="container"style="display: inline-block; padding-left: 10em;">
                  <div class="data-profil">
                    <div class="row row-cols-2">
                      <div class="col-8">
                        <p class="text-campaign-donasi">List Donatur</p>
                        <hr>
                      </div>
                    </div>
                    <!-- card Campaign -->
                    <div class="row row-cols-3">
                     
                     <table class="table table-striped table-bordered">
                        <thead>
                        <tr style="text-align: center;">
                        <th style='width:150px;'>Nama</th>
                        <th style='width:50px;'>Donasi</th>
                        <th style='width:150px;'>Adm. Platform</th>
                        <th style='width:150px;'>Donasi Bersih</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                          $page_no = $_GET['page_no'];
                          } else {
                            $page_no = 1;
                                }

                          $total_records_per_page = 10;
                          $offset = ($page_no-1) * $total_records_per_page;
                          $previous_page = $page_no - 1;
                          $next_page = $page_no + 1;
                          $adjacents = "2"; 

                          $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `donasi` WHERE link = '$id' and keterangan = 'OK'");
                          $total_records = mysqli_fetch_array($result_count);
                          $total_records = $total_records['total_records'];
                          $total_no_of_pages = ceil($total_records / $total_records_per_page);
                          $second_last = $total_no_of_pages - 1; // total page minus 1

                            $result4    = mysqli_query($conn,"SELECT * FROM `donasi` WHERE link = '$id' and keterangan = 'OK' ORDER BY `id` DESC LIMIT $offset, $total_records_per_page");
                            while($row  = mysqli_fetch_array($result4)){

                            $donasi = number_format($row['jumlah_donasi']);

                            // admin
                            $admin        = (5/100)*$row['jumlah_donasi'];
                            $biaya_admin  = number_format($admin);

                            $total  = $row['jumlah_donasi'] - $admin;
                            $donasi_bersih  = number_format($total);

                            echo "<tr>
                                <td>".$row['nama']."</td>
                                <td>"."Rp. ".$donasi."</td>
                                <td>"."(-) "."Rp. ".$biaya_admin."</td>
                                <td>"."Rp. ".$donasi_bersih."</td>
                                  </tr>";
                                }


                          mysqli_close($conn);
                            ?>
                        </tbody>
                        </table>


                        <ul class="pagination" >
                          <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
                            
                          <li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
                          <a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
                          </li>
                               
                            <?php 
                          if ($total_no_of_pages <= 10){     
                            for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                              if ($counter == $page_no) {
                               echo "<li class='active'><a>$counter</a></li>";  
                                }else{
                                   echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                }
                                }
                          }
                          elseif($total_no_of_pages > 10){
                            
                          if($page_no <= 4) {     
                           for ($counter = 1; $counter < 8; $counter++){     
                              if ($counter == $page_no) {
                               echo "<li class='active'><a>$counter</a></li>";  
                                }else{
                                   echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                }
                                }
                            echo "<li><a>...</a></li>";
                            echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                            echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                            }

                           elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {     
                            echo "<li><a href='?page_no=1'>1</a></li>";
                            echo "<li><a href='?page_no=2'>2</a></li>";
                                echo "<li><a>...</a></li>";
                                for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {     
                                   if ($counter == $page_no) {
                               echo "<li class='active'><a>$counter</a></li>";  
                                }else{
                                   echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                }                  
                               }
                               echo "<li><a>...</a></li>";
                             echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                             echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
                                    }
                            
                            else {
                                echo "<li><a href='?page_no=1'>1</a></li>";
                            echo "<li><a href='?page_no=2'>2</a></li>";
                                echo "<li><a>...</a></li>";

                                for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                                  if ($counter == $page_no) {
                               echo "<li class='active'><a>$counter</a></li>";  
                                }else{
                                   echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                                }                   
                                        }
                                    }
                          }
                        ?>
                            
                          <li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
                          <a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
                          </li>
                            <?php if($page_no < $total_no_of_pages){
                            echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                            } ?>
                        </ul>

                    </div>
                  </div>
                </div>
          </section>
            <!-- end sidebar -->
          </div>

      </div>


    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })

        var menu_btn2 = document.querySelector("#menu-btn-kembali")
        var sidebar2 = document.querySelector("#sidebar")
        var container2 = document.querySelector(".my-container")
        menu_btn2.addEventListener("click", () => {
            sidebar2.classList.toggle("active-nav")
        })
    </script>
</html>
