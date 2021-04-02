<?php
$conn = new mysqli("localhost", "u9023817_dompet_donasi", "dompet123", "u9023817_dompet_donasi");

$show_per_page = $_POST['show_per_page'];
$page = $_POST['page']-1;
$page = $page*$show_per_page;

$query = "SELECT * FROM donasi where keterangan = 'cek' ORDER BY id ASC LIMIT {$page},{$show_per_page} ";
$data = mysqli_query($conn,$query);
$allData = array();
while($dataBersih = $data->fetch_assoc()):
	$allData[] = $dataBersih;
endwhile;

$dataReturn = array();
$no = 1;
foreach ($allData as $key => $value) {
	$dataReturn[$key][] = $no;
	$dataReturn[$key][] = $value['nama'];
	$dataReturn[$key][] = $value['hp'];
	$dataReturn[$key][] = $value['link'];
	$dataReturn[$key][] = $value['doa'];
	$dataReturn[$key][] = $value['donasi'];
	$dataReturn[$key][] = $value['no_rek'];
	$dataReturn[$key][] = $value['nama_rek'];
	$dataReturn[$key][] = $value['dibuat'];
	$dataReturn[$key][] = $value['kode_unik'];
    $dataReturn[$key][] = $value['keterangan'];
	$no++;
}

$dataReturns['data'] = $dataReturn;



echo json_encode($dataReturns);
exit;

