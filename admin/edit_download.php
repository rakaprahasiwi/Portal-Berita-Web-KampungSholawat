<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
	$id_berita = $_GET['id'];
} else {
	die ("Error. No Id Selected! ");
}
$query = "SELECT * FROM download WHERE id_download='$id_berita'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);
$id_berita = $hasil['id_download'];
$judul = stripslashes ($hasil['nama_file']);
$gambar = stripslashes ($hasil['nm_path']);
//proses edit berita
if (isset($_POST['Edit'])) {
	$id_berita = $_POST['hidberita'];
	$judul = addslashes (strip_tags ($_POST['judul']));

	$gmbtemp= $_FILES['gmb']['tmp_name'];
	$gmbname= $_FILES['gmb']['name'];
	$gmbUploadDir = "./filedownload/";
	$gmbpath = $gmbUploadDir.$gmbname;

// 	if (move_uploaded_file($gmbtemp, $gmbpath)) {
// 	     # code...
// 	     echo "alert('Sukses')";
// 	}
// 	else{
// 	     echo "alert('Gagal')";
// 	}

	if ($gmbname == null) {
		# code...
		//update berita
		$query = "UPDATE download SET nama_file='$judul' WHERE id_download='$id_berita'";
		$sql = mysqli_query ($con,$query);
		if ($sql) {
		//	echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
			?>
			<script language="JavaScript">  
				alert('Data berhasil di update......');  
				document.location='index.php?page=download';  
			</script>
			<?php	
		} else {
			echo "<h2><font color=red>Download gagal diedit</font></h2>";
		}
	}
	else{
		//update berita
		$query = "UPDATE download SET nama_file='$judul',nm_path='$gmbpath' WHERE id_download='$id_berita'";
		$sql = mysqli_query ($con,$query);
		if ($sql) {
		//	echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
			?>
			<script language="JavaScript">  
				alert('Data berhasil di update......');  
				document.location='index.php?page=download';  
			</script>
			<?php	
		} else {
			echo "<h2><font color=red>Download gagal diedit</font></h2>";
		}
	}
}
?>

<html>
<head><title>Edit Download</title>
	<script language="JavaScript">  
		function batal(){
			document.location='index.php?page=download';  
		}   
	</script>
</head>
<body>
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="fa fa-laptop"></i>Edit Download</li>               
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				<header class="panel-heading">
					Edit Download
				</header>

				<!-- <FORM ACTION="" METHOD="POST" NAME="input"> -->
				<div class="panel-body">
					<div class="form">
						<form class="form-validate form-horizontal" id="feedback_form" method="POST" name="input" action="" enctype="multipart/form-data">
							<div class="form-group ">
								<label for="cname" class="control-label col-lg-2">Judul File<span class="required">*</span></label>
								<div class="col-lg-10">
									<input class="form-control" id="cname" name="judul" minlength="1" type="text" value="<?php echo $judul ?>" required />
								</div>
							</div>
							<div class="form-group ">
								<label for="cpassword" class="control-label col-lg-2">Pilih File<span class="required">*</span></label>
								<div class="col-lg-10">
									<input type="file" name="gmb" id="img-1" accept=".pdf">
									<script type="text/javascript">
										document.getElementById('img-1').onchange = function(){
											var reader = new FileReader();
											reader.onload = function(e){
												document.getElementById('preview-1').src = e.target.result;
											}
											reader.readAsDataURL(this.files[0]);
										};
									</script>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<input type="hidden" name="hidberita" value="<?=$id_berita?>">
									<button class="btn btn-primary" type="submit" name="Edit">Edit</button>
									<button class="btn btn-default" type="button" onclick="batal()">Batal</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- </FORM> -->
			</section>
		</div>
	</div>

</body>
<!-- ck editor -->
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</html>