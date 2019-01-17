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

?>

<section id="page-content" class="page-wrapper">
    <!-- Start contact address area  -->
    <div class="zm-section bg-white ptb-65">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="section-title-2 mb-40  text-center">
                        <h3 class="inline-block uppercase">Detail Zawiyah</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="single-address text-center">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <h4>Alamat</h4>
                        <p><?php echo $judul; ?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 xs-mt-30">
                    <div class="single-address text-center">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h4 class="uppercase">Email Address</h4>
                        <p><?php echo $email; ?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 xs-mt-30">
                    <div class="single-address text-center">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h4 class="uppercase">Phone Number</h4>
                        <p><?php echo $telp; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End contact address area  -->
    <!-- Start Google Map area -->
    <div class="zm-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="google-map">
                        <iframe src="<?php echo $link; ?>" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- <div id="googleMap" style="width:100%;height:600px;"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>