<?php
include "mysqli_koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {
$nama_jadwal = addslashes (strip_tags ($_POST['nama']));
$info_lanjut = addslashes (strip_tags ($_POST['info']));
$alamat =      addslashes (strip_tags ($_POST['alamat']));
$tgl = $_POST['tgl'];
//insert ke tabel
$query = "INSERT INTO jadwal(nama_jadwal,info_lanjut,alamat_jadwal,ket_jadwal) VALUES('$nama_jadwal','$info_lanjut','$alamat',
	'$tgl')";
$sql = mysqli_query ($con,$query);
if ($sql) {
//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
?>
	<script language="JavaScript">  

		alert('Jadwal berhasil ditambahkan......');  

 		document.location='index.php?page=jadwal';  

	</script>
<?php	
} else {
echo "<h2><font color=red>Jadwal gagal ditambahkan</font></h2>";
}
}
?>

<html>
<head><title>Input User</title>
<script language="JavaScript">  
function batal(){
 		document.location='index.php?page=jadwal';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Input Jadwal</li>						  	
					</ol>
				</div>
			</div>

			<div class="row">
	          <div class="col-lg-12">
	            <section class="panel">
	              <header class="panel-heading">
	                Input Jadwal
	              </header>
			<div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="POST" name="input" action="">
                    
                  	<div class="form-group ">
                      <label for="password" class="control-label col-lg-2">Tanggal <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="password" name="tgl" type="date"  />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Judul Jadwal <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="nama" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Info Lanjut <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="address" name="info" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="username" class="control-label col-lg-2">Alamat <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="username" name="alamat" type="text" />
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