<?php
include "mysqli_koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {
  $judul = addslashes (strip_tags ($_POST['nama']));
  $headline = addslashes (strip_tags ($_POST['address']));
  $email = addslashes (strip_tags ($_POST['email']));
  $telp = addslashes (strip_tags ($_POST['telp']));
  $link = addslashes (strip_tags ($_POST['link_maps']));
//insert ke tabel
  $query = "INSERT INTO zawiyah(nama_zawiyah,alamat,email,telp,link_maps) VALUES('$judul','$headline','$email','$telp','$link')";
  $sql = mysqli_query ($con,$query);
  if ($sql) {
//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
    ?>
    <script language="JavaScript">  

      alert('Zawiyah berhasil ditambahkan......');  

      document.location='index.php?page=zawiyah';  

    </script>
    <?php	
  } else {
    echo "<h2><font color=red>Zawiyah gagal ditambahkan</font></h2>";
  }
}
?>

<html>
<head><title>Input User</title>
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
      <li><i class="fa fa-laptop"></i>Input Zawiyah</li>						  	
    </ol>
  </div>
</div>

<div class="row">
 <div class="col-lg-12">
   <section class="panel">
     <header class="panel-heading">
       Input Zawiyah
     </header>
     <div class="panel-body">
      <div class="form">
        <form class="form-validate form-horizontal " id="register_form" method="POST" name="input" action="">
          <div class="form-group ">
            <label for="fullname" class="control-label col-lg-2">Nama Lengkap <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class=" form-control" id="fullname" name="nama" type="text" />
            </div>
          </div>
          <div class="form-group ">
            <label for="address" class="control-label col-lg-2">Alamat <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class=" form-control" id="address" name="address" type="text" />
            </div>
          </div>
          <div class="form-group ">
            <label for="username" class="control-label col-lg-2">Email <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control " id="username" name="email" type="email" />
            </div>
          </div>
          <div class="form-group ">
            <label for="password" class="control-label col-lg-2">Telepon <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control " id="password" name="telp" type="text" />
            </div>
          </div>
          <div class="form-group ">
            <label for="password" class="control-label col-lg-2">Link Google Maps <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control " id="password" name="link_maps" type="text" />
            </div>
          </div>
          
          
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button class="btn btn-primary" type="submit" name="Input">Input</button>
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
