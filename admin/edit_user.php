<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$id_berita = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
$query = "SELECT id_users, nama, password FROM users WHERE id_users='$id_berita'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);
$id_berita = $hasil['id_users'];

$id_kategori = stripslashes ($hasil['nama']);
$judul = stripslashes ($hasil['password']);

//proses edit berita
if (isset($_POST['Edit'])) {
	$id_berita = $_POST['hidberita'];
	$id_kategori = addslashes (strip_tags ($_POST['nama']));
	$judul = addslashes (strip_tags ($_POST['password']));

	//update berita
	if ($judul == $hasil['password']) {
		$query = "UPDATE users SET nama='$id_kategori' WHERE id_users='$id_berita'";
		$sql = mysqli_query ($con,$query);
		if ($sql) {
		//	echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
			?>
			<script language="JavaScript">  
				alert('Data berhasil di update......');  
		 		document.location='index.php?page=users';  
			</script>
		<?php	
		} else {
			echo "<h2><font color=red>User gagal diedit</font></h2>";
		}
	}
	else {
		$enkrip = md5($judul);
		$query = "UPDATE users SET nama='$id_kategori',password='$enkrip' WHERE id_users='$id_berita'";
		$sql = mysqli_query ($con,$query);
		if ($sql) {
		//	echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
			?>
			<script language="JavaScript">  
				alert('Data berhasil di update......');  
		 		document.location='index.php?page=users';  
			</script>
		<?php	
		} else {
			echo "<h2><font color=red>User gagal diedit</font></h2>";
		}
	}
}

?>

<html>
<head><title>Edit User</title>
<script language="JavaScript">  
function batal(){
 		document.location='index.php?page=users';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Edit Users</li>						  	
					</ol>
				</div>
			</div>

<!-- Form validations -->

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Edit User
              </header>
              <!-- <FORM ACTION="" METHOD="POST" NAME="input"> -->
	              <div class="panel-body">
	                <div class="form">
	                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" name="input" action="">
	                    <div class="form-group ">
	                      <label for="cname" class="control-label col-lg-2">Username <span class="required">*</span></label>
	                      <div class="col-lg-10">
	                        <input class="form-control" id="cname" name="nama" minlength="5" type="text" value="<?=$id_kategori?>" required />
	                      </div>
	                    </div>
	                    <div class="form-group ">
	                      <label for="cpassword" class="control-label col-lg-2">Password <span class="required">*</span></label>
	                      <div class="col-lg-10">
	                        <input class="form-control " id="cemail" type="password" name="password" value="<?=$judul?>" required />
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