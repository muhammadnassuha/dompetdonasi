<?php 
session_start();

require '../function.php';
include 'utility.php';

$date = date("Y-m-d H:i:s");
$ip = get_client_ip();
$log_qry = "insert into log_activity (user_id, ip, description, date) VALUES ('$_SESSION[id]', '$ip', 'Logout Dashboard Admin', '$date')";
$log_act = mysqli_query($conn, $log_qry);

$status =  mysqli_query($conn, "UPDATE admin SET status = 'offline' WHERE id = '$_SESSION[id]'");

$SESSION = [];
session_destroy();
session_unset();

setcookie('id', '', time() - 3600);
setcookie('key', '', time() -3600);

header("Location: https://dompetdonasi.com");
exit;

 ?>