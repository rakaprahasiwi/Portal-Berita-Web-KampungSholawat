<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
	$id_berita = $_GET['id'];
} else {
	die ("Error. No Id Selected! ");
}
$query = "SELECT * FROM kontak WHERE id_kontak='$id_berita'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);
$id_berita = $hasil['id_kontak'];

$id_kategori = stripslashes ($hasil['nama_kontak']);
$judul = stripslashes ($hasil['email_kontak']);
$tgl = stripslashes ($hasil['telepon']);
$pesan = stripslashes ($hasil['pesan']);

//proses edit berita


?>

<script language="JavaScript">  
	function batal(){
		document.location='index.php?page=kontak';  
	}		
</script>

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i> Komentar</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-laptop"></i>Detail Pesan</li>						  	
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Detail Pesan
			</header>
			<div class="act-time">
				<div class="activity-body act-in">
					<span class="arrow"></span>
					<div class="text">
						<a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
						<p class="attribution"><a href="#"><?php echo $id_kategori; ?></a><?php echo $judul.", ".$tgl;?></p>
						<p><?php echo $pesan; ?></p>
					</div>
				</div>
				<br>
				<div class="col-lg-2">

					<button class="btn btn-primary" type="button" onclick="batal()">Kembali</button>
				</div>
			</div>

		</section>
	</div>
</div>