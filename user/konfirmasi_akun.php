<?php

require '../function.php';

$confirm     = mysqli_escape_string($conn, $_GET["token_konfirmasi"]); 


if (isset($confirm)) {
		$result = mysqli_query($conn, "SELECT password FROM account WHERE password= '$confirm'");
		
	if (mysqli_num_rows($result) ===1) {
		$update = "update account set verifikasi='Terverifikasi' where account.password='$confirm'";
		
		$set = mysqli_query ($conn, $update);
		if ($set) {
			echo "<script>
			alert('Email berhasil di verifikasi, Silahkan Login Kembali');
					document.location.href = 'login';
			</script>";

		} 
	} else {
		echo "<script>
			alert('Email belum terdaftar, Harap daftar terlebih dahulu');
				document.location.href = '../';
			</script>"; 
			
			
	}
}

?>