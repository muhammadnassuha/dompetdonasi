<?php 

$conn = mysqli_connect ("localhost", "u9023817_dompet_donasi", "dompet123", "u9023817_dompet_donasi");

session_start();
function donasi($data) {
	global $conn;

	$link 			= $data["link"];
	$nama 			= htmlspecialchars($data["nama"]);
    $hp 			= htmlspecialchars($data["hp"]);
    $email 			= htmlspecialchars($data["email"]);
	$donasi 		= htmlspecialchars($data["donasi"]);
	$doa 			= htmlspecialchars($data["keterangan"]);
	$norek 			= htmlspecialchars($data["norek"]);
	$atas_nama		= htmlspecialchars($data["name_rek"]);
	$jam 			= date('Y-m-d H:i:s');
	date_default_timezone_set('Asia/Jakarta');
	$dibuat 		= date('Y-m-d H:i:s');
	

	$hasil = mysqli_query($conn, "INSERT INTO donasi VALUES('', '$link', '$nama', '$hp', '$email', '$donasi', '$doa', '$norek', '$atas_nama', '$dibuat', '', '', '', 'cek')");

    
    // die(var_dump($hasil));	
	$id_terakhir = mysqli_query($conn, "SELECT * FROM donasi ORDER BY id DESC LIMIT 1");

	foreach ($id_terakhir as $kd); 

	
	// die(var_dump($uangs));
	$kd_unik = $kd['id'];
	if ($kd_unik >= 999) {	
		$cek_kode = mysqli_query($conn, "SELECT * FROM donasi ORDER BY id DESC LIMIT 1");

		foreach ($cek_kode as $new_kode);
		$id = $new_kode['id'];
        
		$kd_unik = substr($id,-3);
	}

    // die(var_dump($cek_kode));
	$harga = $donasi;
	$harga1 = substr($harga,3);
	$harga1 = str_replace(".","",$harga);
	$harga1 = (int) $harga;

	$Tdonasi = $harga1;

	$Tdonasi = substr($harga,0, -3);
	$kd_unik1 = sprintf('%03d',$kd_unik);

	$donasi_total = $Tdonasi.$kd_unik1;
	$harga3 = substr($donasi_total,3);
	$harga3 = str_replace(".","",$donasi_total);
	$harga4 = (int) $harga3;

	$total = number_format($harga4);
    // die(var_dump($donasi_total));
    $jam1 = date('Y-m-d H:i:s');
	date_default_timezone_set('Asia/Jakarta');
	$ind = date('Y-m-d H:i:s');

	$jam = date('Y-m-d H:i:s',strtotime('+12 hour',strtotime($ind)));

	// send mail
	$email_user 	= $email;
	$nama_lengkap	= $nama;
	$uang 			= $total;
	$no_rek			= $norek;
	$nama_rek		= $atas_nama;	

	$body= "
        <body style='margin: 10px; font-size: 14px;'>
            <div style='width: 640px; font-family: arial; padding:10px; line-height:150%; border:#eaeaea solid 10px;'>
                <div style='background: rgb(215,215,215);background: linear-gradient(0deg, rgba(215,215,215,1) 0%, rgba(238,238,238,1) 46%, rgba(249,249,249,1) 100%); padding-top: 10px;padding-bottom:10px; padding-left:40px; padding-right:74%; width:20%; height: 60px '>
                    <img src='http://dompetdonasi.com/img/icon/logo2.png' style='width: 4em' >
                </div><br>
                <br>
                <div style='text-align: justify; padding-bottom: 20px;'>
                    <strong style='font-size: 16px;'>$nama_lengkap, terima kasih atas transfer anda.</strong>
                    <br><br>
                    Mohon segera di transfer dalam waktu yg telah di tentukan. <br>
                    Lakukan transfer sebesar:
                    <br>
                    <p style='font-size: 1.5em; font-weight: bold;'>Rp. $uang</p>
                    <strong>Ke :</strong>
                    <br>
                    <br>
                    <div style='padding-left:40px;'>
                    	<img src='http://dompetdonasi.com/img/bank/bri.png' style='width: 6em' >
               		</div>
                    <br><br>
                    <strong>No. Rek. : $no_rek</strong>
                    <br>
                    <strong>a.n : $nama_rek </strong>
                    <br>
                    <br>
                    Proses transfer dapat dilakukan via channel apapun (ATM/mobile banking/sms banking/internet
                    banking/teller)<br>
            
                    Donasi Anda akan terverifikasi oleh sistem maksimal dalam 1 hari kerja <span style='color:red'>*</span>.
                    <br>
                    <span style='color:red; font-size: 12px;'>*Verifikasi donasi akan mengalami keterlambatan, apabila transfer di
                        luar jam kerja
                        bank atau pada hari
                        libur.</span> <br><br>
            
                    Anda akan mendapatkan notifikasi via email ketika donasi terverifikasi atau tercancel.
                    Anda perlu mengirimkan bukti transfer ketika nominal transfer sudah sesuai dengan tagihan. <br><br>
            
                    Apabila dalam waktu 24jam, transfer belum kami terima, maka transfer akan dibatalkan oleh sistem.
                    <br><br><br>
            
                    <strong>* Jika butuh bantuan, hubungi saya dengan membalas email ini.</strong>

                </div>
            </div>
        </body>
    ";



	$mail =  new PHPMailer\PHPMailer1\PHPMailer();
    $mail->IsSMTP(); 
    $mail->IsHTML(true);
    $mail->SMTPAuth 	= true; 
    $mail->Host 		= "mail.dompetdonasi.com";
    $mail->Port 		= 465;
    $mail->SMTPSecure 	= "ssl";
    $mail->Username 	= "cs@dompetdonasi.com"; //username SMTP
    $mail->Password 	= "dompetamanah123";   //password SMTP
	$mail->From    		= "cs@dompetdonasi.com"; //sender email
	$mail->FromName 	= "Dompet Donasi";      //sender name
	$mail->AddAddress($email_user, $nama_lengkap);//recipient: email and name
	$mail->Subject  	=  "Konfirmasi Donasi Anda";
	$mail->Body     	=  $body;
	
	$mail->Send();

	// die(var_dump($donasi_total));
	$update = mysqli_query($conn, "UPDATE `donasi` SET 
            `berakhir`      ='$jam',
            `kode_unik`     ='$kd_unik',
            `jumlah_donasi`  ='$total' 
            WHERE id = $kd[id] "); 

    // die(var_dump($update));
    
	return mysqli_affected_rows($conn);

}


function donasi2($data) {
	global $conn;

	$link 			= $data["link"];
	$nama 			= htmlspecialchars($data["nama"]);
    $hp 			= htmlspecialchars($data["hp"]);
    $email 			= htmlspecialchars($data["email"]);
	$donasi 		= htmlspecialchars($data["donasi"]);
	$doa 			= htmlspecialchars($data["keterangan"]);
	$norek 			= htmlspecialchars($data["norek2"]);
	$atas_nama		= htmlspecialchars($data["name_rek2"]);
	$jam 			= date('Y-m-d H:i:s');
	date_default_timezone_set('Asia/Jakarta');
	$dibuat 		= date('Y-m-d H:i:s');
	

	$hasil = mysqli_query($conn, "INSERT INTO donasi VALUES('', '$link', '$nama', '$hp', '$email', '$donasi', '$doa', '$norek', '$atas_nama', '$dibuat', '', '', '', 'cek')");

    
    // die(var_dump($hasil));	
	$id_terakhir = mysqli_query($conn, "SELECT * FROM donasi ORDER BY id DESC LIMIT 1");

	foreach ($id_terakhir as $kd); 

	
	// die(var_dump($uangs));
	$kd_unik = $kd['id'];
	if ($kd_unik >= 999) {	
		$cek_kode = mysqli_query($conn, "SELECT * FROM donasi ORDER BY id DESC LIMIT 1");

		foreach ($cek_kode as $new_kode);
		$id = $new_kode['id'];
		$kd_unik = substr($id,-3);
	}

	$harga = $donasi;
	$harga1 = substr($harga,3);
	$harga1 = str_replace(".","",$harga);
	$harga1 = (int) $harga;

	$Tdonasi = $harga1;

	$Tdonasi = substr($harga,0, -3);
	$kd_unik1 = sprintf('%03d',$kd_unik);


	$donasi_total = $Tdonasi.$kd_unik1;
	$harga3 = substr($donasi_total,3);
	$harga3 = str_replace(".","",$donasi_total);
	$harga4 = (int) $harga3;
	$total = number_format($harga4);

    $jam1 = date('Y-m-d H:i:s');
	date_default_timezone_set('Asia/Jakarta');
	$ind = date('Y-m-d H:i:s');

	$jam = date('Y-m-d H:i:s',strtotime('+12 hour',strtotime($ind)));

	// send mail
	$email_user 	= $email;
	$nama_lengkap	= $nama;
	$uang 			= $total;
	$no_rek			= $norek;
	$nama_rek		= $atas_nama;	

	$body= "
        <body style='margin: 10px; font-size: 14px;'>
            <div style='width: 640px; font-family: arial; padding:10px; line-height:150%; border:#eaeaea solid 10px;'>
                <div style='background: rgb(215,215,215);background: linear-gradient(0deg, rgba(215,215,215,1) 0%, rgba(238,238,238,1) 46%, rgba(249,249,249,1) 100%); padding-top: 10px;padding-bottom:10px; padding-left:40px; padding-right:74%; width:20%; height: 60px '>
                    <img src='http://dompetdonasi.com/img/icon/logo2.png' style='width: 4em' >
                </div><br>
                <br>
                <div style='text-align: justify; padding-bottom: 20px;'>
                    <strong style='font-size: 16px;'>$nama_lengkap, terima kasih atas transfer anda.</strong>
                    <br><br>
                    Mohon segera di transfer dalam waktu yg telah di tentukan. <br>
                    Lakukan transfer sebesar:
                    <br>
                    <p style='font-size: 1.5em; font-weight: bold;'>Rp. $uang</p>
                    <strong>Ke :</strong>
                    <br>
                    <br>
                    <div style='padding-left:40px;'>
                    	<img src='http://dompetdonasi.com/img/bank/bni.png' style='width: 6em' >
               		</div>
                    <br><br>
                    <strong>No. Rek. : $no_rek</strong>
                    <br>
                    <strong>a.n : $nama_rek </strong>
                    <br>
                    <br>
                    Proses transfer dapat dilakukan via channel apapun (ATM/mobile banking/sms banking/internet
                    banking/teller)<br>
            
                    Donasi Anda akan terverifikasi oleh sistem maksimal dalam 1 hari kerja <span style='color:red'>*</span>.
                    <br>
                    <span style='color:red; font-size: 12px;'>*Verifikasi donasi akan mengalami keterlambatan, apabila transfer di
                        luar jam kerja
                        bank atau pada hari
                        libur.</span> <br><br>
            
                    Anda akan mendapatkan notifikasi via email ketika donasi terverifikasi atau tercancel.
                    Anda perlu mengirimkan bukti transfer ketika nominal transfer sudah sesuai dengan tagihan. <br><br>
            
                    Apabila dalam waktu 24jam, transfer belum kami terima, maka transfer akan dibatalkan oleh sistem.
                    <br><br><br>
            
                    <strong>* Jika butuh bantuan, hubungi saya dengan membalas email ini.</strong>

                </div>
            </div>
        </body>
    ";



	$mail =  new PHPMailer\PHPMailer1\PHPMailer();
    $mail->IsSMTP(); 
    $mail->IsHTML(true);
    $mail->SMTPAuth 	= true; 
    $mail->Host 		= "mail.dompetdonasi.com";
    $mail->Port 		= 465;
    $mail->SMTPSecure 	= "ssl";
    $mail->Username 	= "cs@dompetdonasi.com"; //username SMTP
    $mail->Password 	= "dompetamanah123";   //password SMTP
	$mail->From    		= "cs@dompetdonasi.com"; //sender email
	$mail->FromName 	= "Dompet Donasi";      //sender name
	$mail->AddAddress($email_user, $nama_lengkap);//recipient: email and name
	$mail->Subject  	=  "Konfirmasi Donasi Anda";
	$mail->Body     	=  $body;
	
	$mail->Send();
	
	$update = mysqli_query($conn, "UPDATE `donasi` SET 
            `berakhir`      ='$jam',
            `kode_unik`     ='$kd_unik',
            `jumlah_donasi`  ='$total' 
            WHERE id = $kd[id] "); 

    // die(var_dump($update));
    
	return mysqli_affected_rows($conn);

}


function update_donasi ($data) {
	global $conn;
	// upload gambar
	$nama 		= $data["nama"];
	$donasi		= $data["donasi"];
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$hasil 	= mysqli_query($conn, "INSERT INTO bukti_transfer VALUES('', '$nama', '$donasi', '$gambar')");

	

	// die(var_dump($hasil));
    

	return mysqli_affected_rows($conn);

}

function upload() {
	$file 		= $_FILES['gambar']['name'];
	$ukuran 	= $_FILES['gambar']['size'];
	$error 		= $_FILES['gambar']['error'];
	$tmpName 	= $_FILES['gambar']['tmp_name'];

	// cek gambat

	if ($error === 4) {
		echo "<script>

		alert('pilih gambar terlebih dahulu');

			</script>";
			return false;
	}

	// die(var_dump($file));
	// cek gambar/bukan
	$ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
	$ekstensigambar = explode('.', $file); 
	$ekstensigambar = strtolower(end($ekstensigambar));

	if (!in_array($ekstensigambar, $ekstensigambarvalid) ) {
		echo "<script>

		alert('yang di upload bukan gambar');

			</script>";
			return false;
		
	}

	// cek ukuran terlalu bessar
	if ($ukuran>10000000) {
		echo "<script>

		alert('ukuran terlalu besar');

			</script>";
			return false;
		
	}


	// generate nama batu gambar
	$namagambarbaru = uniqid();
	$namagambarbaru .='.';
	$namagambarbaru .= $ekstensigambar;


	 // siap di upload
	move_uploaded_file($tmpName, '../img/bukti-transfer/' . $namagambarbaru);

	return $namagambarbaru;

}

function RemoveSpecialChar($desk_acak) {
      
    // Using str_replace() function 
    // to replace the word 
    $res = str_replace( array( "#", "'" ), ' ', $desk_acak);
      
    // Returning the result 
    return $res;
    }

function registrasi($data) {
	global $conn;

	$kategori	= htmlspecialchars($data["kategori"]);
	$nama 		= htmlspecialchars($data["nama"]);
	$judul 		= htmlspecialchars($data["judul"]);
	$link 		= htmlspecialchars($data["link_donasi"]);
	$target 	= $data["target"];
	$donasi 	= $data["donasi"];
	$periode 	= $data["periode"];
	$dibuat 	= date("Y-m-d");
    $desk_acak	= htmlspecialchars($data["deskripsi"]);
	$deskripsi 	= RemoveSpecialChar($desk_acak); 

	$query = mysqli_query($conn, "SELECT nama FROM campaign WHERE nama = '$nama'  ");

	if (mysqli_fetch_assoc($query)) {
	    
            if(mysqli_fetch_assoc($query) > 2){
                	echo "<script>
                			alert('Mohon Maaf 1 User Hanya di perbolehkan 2 Campaign');
                		  </script>";
        		return false;
            }
	}
	
	// die(var_dump($query));

	$query2 = mysqli_query($conn, "SELECT judul FROM campaign WHERE judul = '$judul'  ");

	if (mysqli_fetch_assoc($query2)) {

		echo "<script>
			alert('Judul campaign sudah ada');
		</script>";

		return false;
	}

	$query3 = mysqli_query($conn, "SELECT link FROM campaign WHERE link = '$link'  ");

	if (mysqli_fetch_assoc($query3)) {

		echo "<script>
			alert('Link campaign sudah ada');
		</script>";

		return false;
	}
	

	// input data ke database
	$result = mysqli_query($conn, "INSERT INTO campaign VALUES('', '$kategori', '$nama', '$judul', '$link', '$target', '$donasi', '$periode', '$dibuat', '$deskripsi', '','Pending')");

    // die(var_dump($result));
	return mysqli_affected_rows($conn);


    
}


function update_donasi_admin ($data) {
	global $conn;

	$id 	= $data["id"];
	$link 	= $data["link"];
	$nama 	= $data["nama"];
	$rupiah = $data["rupiah"];

	$harga = $rupiah;
	$harga = substr($harga,3);
	$harga = str_replace(".","",$harga);
	$harga = (int) $harga;

	$Tdonasi = $harga;
	

	$update 	= mysqli_query($conn, 
				"UPDATE `donasi` SET 
				`nama` 		= '$nama',
				`jumlah_donasi`	= '$Tdonasi',
				`keterangan`	= 'OK' 
				WHERE id 		= '$id' ");

	$result 	= mysqli_query($conn, 
				"SELECT * FROM campaign WHERE 
				link = '$link' ");

	$row 	= mysqli_fetch_assoc($result);
	$donasi = $row["donasi"];

	$update_donasi = $donasi + $Tdonasi;
	
	//  dukungan
	$query 		= mysqli_query($conn, "SELECT * FROM donasi WHERE id = '$id' ");
	$hasil		= mysqli_fetch_assoc($query);
	$doa 		= $hasil["doa"];

	// send mail
	$result2 	= mysqli_query($conn, "SELECT * FROM account WHERE nama_lengkap = '$name' ");
	$data 		= mysqli_fetch_assoc($result2);

	$link_user		= $link;
	$judul_user		= $judul;
	$nama_lengkap	= $data["nama_lengkap"];
	$email_user		= $data["email"];
	$rupiah			= number_format($Tdonasi);
	// die(var_dump($hasil));
	$body= "
        <body style='margin: 10px; font-size: 14px;'>
            <div style='width: 640px; font-family: arial; padding:10px; line-height:150%; border:#eaeaea solid 10px;'>
                <div style='background: rgb(215,215,215);background: linear-gradient(0deg, rgba(215,215,215,1) 0%, rgba(238,238,238,1) 46%, rgba(249,249,249,1) 100%); padding-top: 10px;padding-bottom:10px; padding-left:40px; padding-right:74%; width:20%; height: 60px '>
                    <img src='http://dompetdonasi.com/img/icon/logo2.png' style='width: 4em' >
                </div><br>
                <br>
                <div style='text-align: justify; padding-bottom: 20px;'>
                    Hai $nama_lengkap, <br>
                    Anda baru saja mendapatkan donasi untuk Campaign <strong><a style='text-decoration: none; color: #192aec;' href='https://dompetdonasi.com/campaign/campaign.php?id=$link_user'>$judul_user</a></strong> dengan detail berikut:
                    <br>
                    <br>
                    <strong>Nama :</strong> $nama <br>
                    <strong>Nominal :</strong> $rupiah <br>
                    <strong>Do'a :</strong> $doa
                    <br>
                    <br>
                    Semoga donasi ini memberikan kemudahan dan manfaat serta menjadi rezeki yang berkah Aamiin<br>
            
                    <br><br>
            
                    <strong>* Jika butuh bantuan, hubungi saya dengan membalas email ini.</strong>

                </div>
            </div>
        </body>
    ";



	$mail =  new PHPMailer\PHPMailer1\PHPMailer();
    $mail->IsSMTP(); 
    $mail->IsHTML(true);
    $mail->SMTPAuth 	= true; 
    $mail->Host 		= "mail.dompetdonasi.com";
    $mail->Port 		= 465;
    $mail->SMTPSecure 	= "ssl";
    $mail->Username 	= "support@dompetdonasi.com"; //username SMTP
    $mail->Password 	= "dompetamanah123";   //password SMTP
	$mail->From    		= "support@dompetdonasi.com"; //sender email
	$mail->FromName 	= "support";      //sender name
	$mail->AddAddress($email_user, $nama_lengkap);//recipient: email and name
	$mail->Subject  	=  "Donasi Masuk";
	$mail->Body     	=  $body;
	
	$mail->Send();
	
	$update2 = mysqli_query($conn, 
			"UPDATE `campaign` SET 
			`donasi`= '$update_donasi'
			WHERE link = '$link' ");
	// die(var_dump($update));
	 
    
	return mysqli_affected_rows($conn);

}

function buat_akun($data) {
	global $conn;

	$nama_lengkap 	= strip_tags($data["nama"]);
	$hp 			= strip_tags($data["hp"]);
	$email 			= strip_tags($data["email"]);
	$foto 			= $data["profile"];
	$password		= mysqli_real_escape_string($conn, $data["password"]);
	$password2		= mysqli_real_escape_string($conn, $data["password2"]);

	// cek nama 

	$query = mysqli_query($conn, "SELECT nama_lengkap FROM account WHERE nama_lengkap = '$nama_lengkap' ");

	if (mysqli_fetch_assoc($query)) {

		echo "<script>
			alert('Nama Sudah Terdaftar');
		</script>";

		return false;
	}

	$query2 = mysqli_query($conn, "SELECT email FROM account WHERE email = '$email' ");

	if (mysqli_fetch_assoc($query2)) {

		echo "<script>
			alert('Email Sudah Terdaftar');
		</script>";

		return false;
	}


	// cek password
	if ($password !== $password2) {

		echo "<script>
			alert('Konfirmasi Password Tidak Sama');
		</script>";

		return false;

	}

	// enkripsi Password 

	$password = password_hash($password, PASSWORD_DEFAULT);


	$key = $password;
	$nama_lengkap 	= $nama_lengkap;
	$email_user		= $email;
	$body= "
        <body style='margin: 10px;'>
            <div style='width: 100%; font-family: arial; padding:10px; line-height:150%; display: content;'>
                <div style='background: rgb(215,215,215);background: linear-gradient(0deg, rgba(215,215,215,1) 0%, rgba(238,238,238,1) 46%, rgba(249,249,249,1) 100%); padding-top: 10px;padding-bottom:10px; padding-left:40px; padding-right:74%; width:100%; height: 60px '>
                    <img src='http://dompetdonasi.com/img/icon/logo2.png' style='width: 4em' >
                </div><br>
                <br>
                <div style='text-align: center;padding-bottom: 20px;'>
                    <strong style='font-size: 20px;'>Terima kasih telah mendaftar di dompetdonasi.com</strong>
                <br></<strong><br>
                Untuk memulai, klik tautan di bawah ini untuk mengonfirmasi akun Anda.
                <br>
                <br>
                <a href='https://dompetdonasi.com/user/konfirmasi_akun?token_konfirmasi=$key' style='text-decoration: none; color: white; background-color: #53a946; padding: 13px; border-radius: 25px;'>Aktifkan Akun</a>
                </div>
            </div>
        </body>
    ";



	$mail =  new PHPMailer\PHPMailer1\PHPMailer();
    $mail->IsSMTP(); 
    $mail->IsHTML(true);
    $mail->SMTPAuth 	= true; 
    $mail->Host 		= "mail.dompetdonasi.com";
    $mail->Port 		= 465;
    $mail->SMTPSecure 	= "ssl";
    $mail->Username 	= "cs@dompetdonasi.com"; //username SMTP
    $mail->Password 	= "dompetamanah123";   //password SMTP
	$mail->From    		= "cs@dompetdonasi.com"; //sender email
	$mail->FromName 	= "Dompet Donasi";      //sender name
	$mail->AddAddress($email_user, $nama_lengkap);//recipient: email and name
	$mail->Subject  	=  "Konfirmasi Akun Anda";
	$mail->Body     	=  $body;
	
	$mail->Send();

	// input data ke database
	$result = mysqli_query($conn, "INSERT INTO account VALUES('', '$foto', '$nama_lengkap', '$hp', '$email', '$password', 'Belum terverifikasi')");

    // die(var_dump($result));
	return mysqli_affected_rows($conn);

}

// update Campaign
function update_campaign($data) {
	global $conn;


	$link 		= $data["link"];
	$judul 		= htmlspecialchars($data["judul"]);
	$desk_acak	= htmlspecialchars($data["deskripsi"]);
	$deskripsi 	= RemoveSpecialChar($desk_acak);

	$hasil = mysqli_query($conn, "INSERT INTO update_campaign VALUES('', '$link', '$judul', '$deskripsi')");
    
	return mysqli_affected_rows($conn);

}

// edit Campaign

function edit_campaign($data) {
	global $conn;

	$link 		= $data["link"];
	$target		= $data["target"];
	$periode	= $data["periode"];

	$update = mysqli_query($conn, "UPDATE `campaign` SET 
            `target`     ='$target',
            `periode`  ='$periode' 
            WHERE link = '$link' "); 

    // die(var_dump($update));
    
	return mysqli_affected_rows($conn);

}

// edit akun
function update_akun($data) {
	global $conn;

	$nama 		= $data["nama"];
	$hp			= $data["hp"];
	$email		= $data["email"];

	$update = mysqli_query($conn, "UPDATE `account` SET 
            `nama_lengkap`	='$nama',
            `telepon`  		='$hp' 
            WHERE email 	= '$email' "); 

    // die(var_dump($email));
    
	return mysqli_affected_rows($conn);

}

//Zakat
function donasi_zakat($data){
	global $conn;
    $idUser         = $_SESSION["id"];
	$nama           = $data['nama'];
	$email          = $data['email'];
	$no_hp          = $data['hp'];
	$norek 			= $data["norek"];
	$atas_nama		= $data["name_rek"];
	
	$result   = mysqli_query($conn, "SELECT * FROM zakat WHERE id_account = '$idUser' ORDER BY id DESC LIMIT 1");
    $row      = mysqli_fetch_array($result);
    	
    $id = $row["id"];
	

	$query = mysqli_query($conn, "UPDATE zakat SET nama = '$nama', email = '$email', no_hp = '$no_hp', norek = '$norek', nama_rek = '$atas_nama' WHERE id = '$id'");

	return mysqli_affected_rows($conn);
}

function donasi_zakat2($data){
	global $conn;
    $idUser = $_SESSION["id"];
	$nama = $data['nama'];
	$email = $data['email'];
	$no_hp = $data['hp'];
	$norek 			= $data["norek"];
	$atas_nama		= $data["name_rek"];
	
	$result   = mysqli_query($conn, "SELECT * FROM zakat WHERE id_account = '$idUser' ORDER BY id DESC LIMIT 1");
    $row      = mysqli_fetch_array($result);
    	
    $id = $row["id"];
	

	$query = mysqli_query($conn, "UPDATE zakat SET nama = '$nama', email = '$email', no_hp = '$no_hp', norek = '$norek', nama_rek = '$atas_nama' WHERE id = '$id'");

	return mysqli_affected_rows($conn);
}

function update_donasi_zakat($data) {
	global $conn;
	// upload gambar
	$nama 		= $data["nama"];
	$donasi		= $data["zakat"];
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$hasil 	= mysqli_query($conn, "INSERT INTO transfer_zakat VALUES('', '$nama', '$donasi', '$gambar')");

	

// 	die(var_dump($nama));
    

	return mysqli_affected_rows($conn);

}


?>