<?php 
date_default_timezone_set("Asia/Bangkok");

session_start();

require '../function.php';
include 'utility.php';

$date = date("Y-m-d H:i:s");
$ip = get_client_ip();

if (isset($_POST["login"]) ) {

    $username = $_POST ["username"];
    $password = $_POST ["password"];
   
$login = mysqli_query($conn,  "select * from admin where username='$username'");
$cek = mysqli_num_rows($login);
   

if($cek=== 1){

    $data = mysqli_fetch_assoc($login);
    
     if ($password === $data["password"] ) {
    
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama']     = $data['nama'];
    $_SESSION['foto']     = $data['foto'];
    $_SESSION['id']       = $data['id'];
    $_SESSION["admin"]    = true ;
    
    $status =  mysqli_query($conn, "UPDATE admin SET status = 'online' WHERE id = '$data[id]'");
    
    $log_qry = "insert into log_activity (user_id, ip, description, date) VALUES ('$data[id]', '$ip', 'Login Dashboard Admin', '$date')";
   
    $log_act = mysqli_query($conn, $log_qry);

    header("location: ../tabel_admin/"); 
    exit;
    
        }
        
    }

    $error = true;
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
  <link rel="shortcut icon" href="../img/icon/logo.png"/>
  <link rel="stylesheet" href="../fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../css/bank.css">

  <title>Login - Admin</title>

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
                <p class="konfirmasi-donasi" style="margin-bottom: 20px">FORM LOGIN ADMIN</p>

                <form method="post" action=""onsubmit="return validasi_input(this)">
                    <div class="form-group">
                      <input type="text" class="form-control" name="username" id="formGroupExampleInput" placeholder="User Admin">
                    </div>

                    <div class="form-group1">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password Admin" > 
                      <?php if (isset ($error) ) : ?>
                    <p style="color: red; font-style: italic;">Username/Password salah!</p>
                  <?php endif ?>
                    </div>


                    <div class="tombol-home">
                      <button type="submit" name="login" class="btn btn-beranda">MASUK</button>
                    </div>
                </form>
              </div>  
            </div>
    </div>
  </body>

</html>