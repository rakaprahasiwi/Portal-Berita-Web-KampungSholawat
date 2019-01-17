<?php
include "mysqli_koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {
$judul = addslashes (strip_tags ($_POST['nama']));
$headline = addslashes (strip_tags ($_POST['password']));
//insert ke tabel
$query = "INSERT INTO video(nama_video,link) VALUES('$judul','$headline')";
$sql = mysqli_query ($con,$query);
if ($sql) {
//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
?>
	<script language="JavaScript">  

		alert('Video berhasil ditambahkan......');  

 		document.location='index.php?page=video';  

	</script>
<?php	
} else {
echo "<h2><font color=red>Video gagal ditambahkan</font></h2>";
}
}
?>

<html>
<head><title>Input Video</title>
<script language="JavaScript">  
function batal(){
 		document.location='index.php?page=video';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Input Video</li>						  	
					</ol>
				</div>
			</div>

<!-- Form validations -->

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Input Video
              </header>
              <!-- <FORM ACTION="" METHOD="POST" NAME="input"> -->
	              <div class="panel-body">
	                <div class="form">
	                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" name="input" action="">
	                    <div class="form-group ">
	                      <label for="cname" class="control-label col-lg-2">Nama Video <span class="required">*</span></label>
	                      <div class="col-lg-10">
	                        <input class="form-control" id="cname" name="nama" minlength="2" type="text" required />
	                      </div>
	                    </div>
	                    <div class="form-group ">
	                      <label for="cpassword" class="control-label col-lg-2">Link Video <span class="required">*</span></label>
	                      <div class="col-lg-10">
	                        <input class="form-control " id="cemail" type="text" name="password" required />
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