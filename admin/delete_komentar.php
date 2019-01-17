<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$id_user = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
?>
<html>
<head><title>Delete Komentar</title>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Delete Komentar</li>						  	
					</ol>
				</div>
			</div>
<?php
//proses delete user
if (!empty($id_user) && $id_user != "") {
$query = "DELETE FROM komentar WHERE id_komentar='$id_user'";
$sql = mysqli_query ($con,$query);
if ($sql) {
echo "<h2><font color=blue>Komentar telah berhasil dihapus</font></h2>";
} else {
echo "<h2><font color=red>Komentar gagal dihapus</font></h2>";
}
echo "Klik <a href='index.php?page=komentar'>di sini</a> untuk kembali ke halaman komentar";
} else {
die ("Access Denied");
}
?>
</body>
</html>