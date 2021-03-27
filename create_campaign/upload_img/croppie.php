<?php

 session_start();

  if (!isset($_SESSION["user"]) ) {
    header("Location: ../../");
    exit;
 }
require "../../function.php";

$image = $_POST['image'];

list($type, $image) = explode(';',$image);
list(, $image) = explode(',',$image);

$image = base64_decode($image);
$image_name = time().'.png';
file_put_contents('../../img/foto-campaign/'.$image_name, $image);

$nama   = $_SESSION['nama_lengkap'];


$update = mysqli_query($conn, 
		"UPDATE `campaign` SET
		`gambar` 		= '$image_name'
		WHERE nama	= '$nama' ");

echo 'successfully uploaded';

?>