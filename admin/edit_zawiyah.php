<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
  $id_berita = $_GET['id'];
} else {
  die ("Error. No Id Selected! ");
}
$query = "SELECT * FROM zawiyah WHERE id_zawiyah='$id_berita'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);
$id_berita = $hasil['id_zawiyah'];

$id_kategori = stripslashes ($hasil['nama_zawiyah']);
$judul = stripslashes ($hasil['alamat']);
$email = stripslashes ($hasil['email']);
$telp = stripslashes ($hasil['telp']);
$link = stripslashes($hasil['link_maps']);

//proses edit berita
if (isset($_POST['Edit'])) {
	$id_berita = $_POST['hidberita'];
	$id_kategori = addslashes (strip_tags ($_POST['nama']));
	$judul = addslashes (strip_tags ($_POST['address']));
	$email = addslashes (strip_tags ($_POST['email']));
  $telp = addslashes (strip_tags ($_POST['telp']));
	$link = addslashes (strip_tags ($_POST['link_maps']));

	//update berita
  $query = "UPDATE zawiyah SET nama_zawiyah='$id_kategori', alamat='$judul', email='$email', telp='$telp', link_maps='$link' WHERE id_zawiyah='$id_berita'";
  $sql = mysqli_query ($con,$query);
  if ($sql) {
		//	echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
   ?>
   <script language="JavaScript">  
    alert('Data berhasil di update......');  
    document.location='index.php?page=zawiyah';  
  </script>
  <?php	
} else {
 echo "<h2><font color=red>Zawiyah gagal diedit</font></h2>";
}
}
?>

<html>
<head><title>Edit Zawiyah</title>
  <script language="JavaScript">  
    function batal(){
     document.location='index.php?page=zawiyah';  
   }		
 </script>
</head>
<body>

  <div class="row">
    <div class="col-lg-12">
     <h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
     <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
      <li><i class="fa fa-laptop"></i>Edit Zawiyah</li>						  	
    </ol>
  </div>
</div>

<div class="row">
 <div class="col-lg-12">
   <section class="panel">
     <header class="panel-heading">
       Edit Zawiyah
     </header>
     <div class="panel-body">
      <div class="form">
        <form class="form-validate form-horizontal " id="register_form" method="POST" name="input" action="">
          <div class="form-group ">
            <label for="fullname" class="control-label col-lg-2">Nama Lengkap <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class=" form-control" id="fullname" name="nama" type="text" value="<?=$id_kategori?>" />
            </div>
          </div>
          <div class="form-group ">
            <label for="address" class="control-label col-lg-2">Alamat <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class=" form-control" id="address" name="address" type="text" value="<?=$judul?>" />
            </div>
          </div>
          <div class="form-group ">
            <label for="username" class="control-label col-lg-2">Email <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control " id="username" name="email" type="email" value="<?=$email?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="password" class="control-label col-lg-2">Telepon <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control " id="password" name="telp" type="text" value="<?=$telp?>"/>
            </div>
          </div>
          <div class="form-group ">
            <label for="password" class="control-label col-lg-2">Link Google Maps <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control " id="password" name="link_maps" type="text" value="<?=$link?>"/>
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