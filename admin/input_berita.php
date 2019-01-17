<?php
include "mysqli_koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {

     $judul = addslashes (strip_tags ($_POST['judul']));
     $kategori = $_POST['kategori'];
     $isi_berita = addslashes (strip_tags ($_POST['isi']));
     $pengirim = addslashes (strip_tags ($_POST['pengirim']));

     $gmbtemp= $_FILES['gmb']['tmp_name'];
     $gmbname= $_FILES['gmb']['name'];
     $gmbUploadDir = "./img/data/";
     $gmbpath = $gmbUploadDir.$gmbname;

    //  if (move_uploaded_file($gmbtemp, $gmbpath)) {
    //  # code...
    //       echo "alert('Sukses')";
    //  }
    //  else{
    //       echo "alert('Gagal')";
    //  }
//insert ke tabel
     $query = "INSERT INTO berita(id_kategori,judul,gambar,isi,pengirim,tanggal) 
     VALUES('$kategori','$judul','$gmbpath','$isi_berita','$pengirim',now())";
     $sql = mysqli_query ($con,$query);
     if ($sql) {
//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
          ?>
          <script language="JavaScript">  

            alert('Berita berhasil ditambahkan......');  

            document.location='index.php?page=berita';  

       </script>
       <?php	
  } else {
     echo "<h2><font color=red>Berita gagal ditambahkan</font></h2>";
}
}
?>
<html>
<head><title>Input Berita</title>
     <script language="JavaScript">  
          function batal(){
             document.location='index.php?page=berita';  
        }		
   </script>
</head>
<body>
     <div class="row">
         <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
          <ol class="breadcrumb">
           <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
           <li><i class="fa fa-laptop"></i>Input Berita</li>						  	
      </ol>
 </div>
</div>

<div class="row">
    <div class="col-lg-12">
       <section class="panel">
          <header class="panel-heading">
             Input Berita
        </header>

        <div class="panel-body">
         <div class="form">
            <form class="form-validate form-horizontal " id="register_form" method="POST" name="input" action="" enctype="multipart/form-data">
               <div class="form-group ">
                  <label for="fullname" class="control-label col-lg-2">Judul Berita<span class="required">*</span></label>
                  <div class="col-lg-10">
                     <input class=" form-control" id="fullname" name="judul" type="text" />
                </div>
           </div>
           <div class="form-group ">
             <label for="address" class="control-label col-lg-2">Kategori<span class="required">*</span></label>
             <div class="col-lg-10">

               <select name="kategori">
                    <?php
                    $query = "SELECT id_kategori, nm_kategori FROM kategori ORDER BY nm_kategori";
                    $sql = mysqli_query ($con,$query);
                    while ($hasil = mysqli_fetch_array ($sql)) {
                         echo "<option
                         value='$hasil[id_kategori]'>$hasil[nm_kategori]</option>";
                    }
                    ?>
               </select>

          </div>
     </div>
     <div class="form-group ">
        <label for="username" class="control-label col-lg-2">Isi Berita<span class="required">*</span></label>
        <div class="col-lg-10">
           <textarea class="form-control ckeditor" name="isi" rows="6"></textarea>
      </div>
 </div>
 <div class="form-group ">
   <label for="password" class="control-label col-lg-2">Pilih Gambar<span class="required">*</span></label>
   <div class="col-lg-10">
      <input type="file" name="gmb" id="img-1" accept=".jpg">
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
<div class="form-group ">
   <label for="confirm_password" class="control-label col-lg-2">Pengirim<span class="required">*</span></label>
   <div class="col-lg-10">
      <input class="form-control " id="confirm_password" name="pengirim" type="text" />
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

</section>
</div>
</div>

</body>
<!-- ck editor -->
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</html>