<?php
include "mysqli_koneksi.php";
if(ISSET($_REQUEST['file'])){
	$file = $_REQUEST['file'];
	$id_berita = $_GET['id'];
	$sql = mysqli_fetch_array(mysqli_query($con, "SELECT jumlah FROM download WHERE id_download=$id_berita"));
	//print_r($sql);

	$jumlah = $sql['jumlah']+1;
	$result=mysqli_query($con, "UPDATE download SET jumlah = $jumlah WHERE id_download=$id_berita");
		//header("Cache-Control: public");
		//header("Content-Description: File Transfer");
	header("Content-Disposition: attachment; filename=".basename($file));
	header("Content-Type: application/octet-stream;");
	// // 	//header("Content-Transfer-Encoding: binary");
	readfile("admin/filedownload/".$file);
}
?>