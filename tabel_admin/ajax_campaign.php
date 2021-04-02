<?php
$conn = new mysqli("localhost", "u9023817_dompet_donasi", "dompet123", "u9023817_dompet_donasi");

$show_per_page = $_POST['show_per_page'];
$page = $_POST['page']-1;
$page = $page*$show_per_page;

$query = "SELECT * FROM campaign where konfirmasi = 'Pending' ORDER BY id ASC LIMIT {$page},{$show_per_page} ";
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
	$dataReturn[$key][] = $value['judul'];
	$dataReturn[$key][] = $value['link'];
	$dataReturn[$key][] = $value['target'];
	$dataReturn[$key][] = $value['donasi'];
	$dataReturn[$key][] = $value['periode'];
	$dataReturn[$key][] = $value['dibuat'];
	$dataReturn[$key][] = $value['deskripsi'];
	$dataReturn[$key][] = $value['konfirmasi'];
	$no++;
}

$dataReturns['data'] = $dataReturn;



echo json_encode($dataReturns);
exit;

