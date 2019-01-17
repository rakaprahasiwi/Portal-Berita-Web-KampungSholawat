<?php
include "mysqli_koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {

  $judul = addslashes (strip_tags ($_POST['judul']));

  $gmbtemp= $_FILES['gmb']['tmp_name'];
  $gmbname= $_FILES['gmb']['name'];
  $gmbUploadDir = "./filedownload/";
  $gmbpath = $gmbUploadDir.$gmbname;

//   if (move_uploaded_file($gmbtemp, $gmbpath)) {
//       # code...
//     echo "alert('Sukses')";
//   }
//   else{
//     echo "alert('Gagal')";
//   }
//insert ke tabel
 $query = "INSERT INTO download(nama_file,nm_path) VALUES('$judul','$gmbpath')";
 $sql = mysqli_query ($con,$query);
 if ($sql) {
//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
  ?>
  <script language="JavaScript">  

    alert('Download berhasil ditambahkan......');  

    document.location='index.php?page=download';  

  </script>
  <?php 
} else {
  echo "<h2><font color=red>Download gagal ditambahkan</font></h2>";
}
}
?>

<html>
<head><title>Input Download</title>
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
        <li><i class="fa fa-laptop"></i>Input Download</li>               
      </ol>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          Input Download
        </header>
        <!-- <FORM ACTION="" METHOD="POST" NAME="input"> -->
        <div class="panel-body">
          <div class="form">
            <form class="form-validate form-horizontal" id="feedback_form" method="POST" name="input" action="" enctype="multipart/form-data">
              <div class="form-group ">
                <label for="cname" class="control-label col-lg-2">Judul File<span class="required">*</span></label>
                <div class="col-lg-10">
                  <input class="form-control" id="cname" name="judul" minlength="1" type="text" required />
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