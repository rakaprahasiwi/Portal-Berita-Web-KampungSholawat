<?php
include "mysqli_koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {
    $nama = addslashes (strip_tags ($_POST['name']));
    $email = addslashes (strip_tags ($_POST['email']));
    $telp = addslashes (strip_tags ($_POST['phone']));
    $pesan = addslashes (strip_tags ($_POST['message']));
//insert ke tabel
    $query = "INSERT INTO kontak(nama_kontak,email_kontak,telepon,pesan) VALUES('$nama','$email','$telp','$pesan')";
    $sql = mysqli_query ($con,$query);
    if ($sql) {
//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
        ?>
        <script language="JavaScript">  

            alert('Pesan Anda berhasil terkirim......');  

            document.location='index.php?page=kontak';  

        </script>
        <?php   
    } else {
        echo "<h2><font color=red>Pesan anda gagal terkirim</font></h2>";
    }
}
?>

<section id="page-content" class="page-wrapper">
    <!-- Start contact address area  -->
    <div class="zm-section bg-white ptb-65">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="section-title-2 mb-40  text-center">
                        <h3 class="inline-block uppercase">Hubungi Kami</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="single-address text-center">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <h4>Alamat</h4>
                        <p>Jalan Sadewa 3 No. 17,</p>
                        <p>Kota Semarang 50131</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 xs-mt-30">
                    <div class="single-address text-center">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h4 class="uppercase">Email Address</h4>
                        <p>111201509091@mhs.dinus.ac.id</p>
                        <p>prahasiwi11@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 xs-mt-30">
                    <div class="single-address text-center">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h4 class="uppercase">Phone Number</h4>
                        <p>+12 345 678 9008</p>
                        <p>+12 987 654 7566</p>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.0634763269819!2d110.40911352916628!3d-6.979338399684863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4c690900c9%3A0xc35da2c42f8cc0a3!2sJl.+Sadewa+3+No.17%2C+Pendrikan+Kidul%2C+Semarang+Tengah%2C+Kota+Semarang%2C+Jawa+Tengah+50131!5e0!3m2!1sid!2sid!4v1547038302203" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- <div id="googleMap" style="width:100%;height:600px;"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Map area -->
    <!-- Start contact message area -->
    <div class="zm-section bg-white pt-60 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="section-title-2 mb-40">
                        <h3 class="inline-block uppercase">Kirim - kirim Pesan</h3>
                        <p>Jika ada kritik atau saran silahkan tulis disini. Kritik dan saran akan membantu perkembangan kami.</p>
                    </div>
                </div>
            </div>
            <div class="message-box">
                <form action=""  method="post" name="input">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="name" placeholder="Nama Lengkap*">
                            <input type="email" name="email" placeholder="Email Address*">
                            <input type="text" name="phone" placeholder="Phone Number">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="message" placeholder="Tulis pesanmu..."></textarea>
                            <button class="submit-button" name="Input" type="submit">Kirim</button>
                        </div>
                    </div>
                </form>
                <p class="form-messege"></p>
            </div>
        </div>
    </div>
    <!-- End contact message area -->
</section>

