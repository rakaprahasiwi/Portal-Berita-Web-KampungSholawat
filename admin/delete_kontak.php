<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$id_user = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
?>
<html>
<head><title>Delete Bukutamu</title>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Delete Bukutamu</li>						  	
					</ol>
				</div>
			</div>
<?php
//proses delete user
if (!empty($id_user) && $id_user != "") {
$query = "DELETE FROM kontak WHERE id_kontak='$id_user'";
$sql = mysqli_query ($con,$query);
if ($sql) {
echo "<h2><font color=blue>Bukutamu telah berhasil dihapus</font></h2>";
} else {
echo "<h2><font color=red>Bukutamu gagal dihapus</font></h2>";
}
echo "Klik <a href='index.php?page=kontak'>di sini</a> untuk kembali ke halaman bukutamu";
} else {
die ("Access Denied");
}
?>
</body>
</html>