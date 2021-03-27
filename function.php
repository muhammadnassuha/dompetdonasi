<?php 

$conn = mysqli_connect ("localhost", "root", "", "u9023817_dompet_donasi");


function donasi($data) {
	global $conn;

	$link 			= $data["link"];
	$nama 			= htmlspecialchars($data["nama"]);
    $hp 			= htmlspecialchars($data["hp"]);
	$donasi 		= htmlspecialchars($data["donasi"]);
	$doa 			= htmlspecialchars($data["keterangan"]);
	$norek 			= htmlspecialchars($data["norek"]);
	$atas_nama		= htmlspecialchars($data["name_rek"]);
	$jam 			= date('Y-m-d H:i:s');
	date_default_timezone_set('Asia/Jakarta');
	$dibuat 		= date('Y-m-d H:i:s');
	

	$hasil = mysqli_query($conn, "INSERT INTO donasi VALUES('', '$link', '$nama', '$hp', '$donasi', '$doa', '$norek', '$atas_nama', '$dibuat', '', '', '', 'cek')");

    
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
	$donasi 		= htmlspecialchars($data["donasi"]);
	$doa 			= htmlspecialchars($data["keterangan"]);
	$norek 			= htmlspecialchars($data["norek2"]);
	$atas_nama		= htmlspecialchars($data["name_rek2"]);
	$jam 			= date('Y-m-d H:i:s');
	date_default_timezone_set('Asia/Jakarta');
	$dibuat 		= date('Y-m-d H:i:s');
	

	$hasil = mysqli_query($conn, "INSERT INTO donasi VALUES('', '$link', '$nama', '$hp', '$donasi', '$doa', '$norek', '$atas_nama', '$dibuat', '', '', '', 'cek')");

    
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
	$deskripsi	= htmlspecialchars($data["deskripsi"]);

	$query = mysqli_query($conn, "SELECT nama FROM campaign WHERE nama = '$nama'  ");

	if (mysqli_fetch_assoc($query) > 2) {
	    
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

    // die(var_dump($nama));
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

	// input data ke database
	$result = mysqli_query($conn, "INSERT INTO account VALUES('', '$foto', '$nama_lengkap', '$hp', '$email', '$password')");

    // die(var_dump($result));
	return mysqli_affected_rows($conn);

}

// update Campaign
function update_campaign($data) {
	global $conn;


	$link 		= $data["link"];
	$judul 		= htmlspecialchars($data["judul"]);
	$deskripsi	= htmlspecialchars($data["deskripsi"]);

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



?>