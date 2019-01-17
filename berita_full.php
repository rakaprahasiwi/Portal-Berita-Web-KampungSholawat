<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
    $id_berita = $_GET['id'];
} else {
    die ("Error. No Id Selected! ");
}
$query = "SELECT * FROM berita a, kategori b WHERE id_berita='$id_berita' AND a.id_kategori=b.id_kategori";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);
$id_berita = $hasil['id_berita'];
$id_kategori = stripslashes ($hasil['nm_kategori']);
$judul = stripslashes ($hasil['judul']);
$gmb = explode('/', $hasil['gambar']);
$isi = stripslashes ($hasil['isi']);
$pengirim = stripslashes ($hasil['pengirim']);
$tanggal = stripslashes ($hasil['tanggal']);

$byk = stripslashes($hasil['byk_tonton'])+1;
$query1 = "UPDATE berita SET byk_tonton = $byk WHERE id_berita=$id_berita";
$sql1 = mysqli_query($con,$query1);

if (isset($_POST['Input'])) {
    $id_berita = $_POST['hidberita'];
    $nama = addslashes (strip_tags ($_POST['nama_kom']));
    $email = addslashes (strip_tags ($_POST['email_kom']));
    $telp = addslashes (strip_tags ($_POST['kome']));
//insert ke tabel
    $query = "INSERT INTO komentar(id_berita,nama,email,komen,tanggal) VALUES('$id_berita','$nama','$email','$telp',now())";
    $sql = mysqli_query ($con,$query);
    if ($sql) {
//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
        ?>
        <script language="JavaScript">  

            alert('Pesan Anda berhasil terkirim......');  

            document.location='index.php?page=berita_full&id=<?php echo $id_berita;?>';  

        </script>
        <?php   
    } else {
        echo "<h2><font color=red>Pesan anda gagal terkirim</font></h2>";
    }
}

?>


<div id="page-content" class="page-wrapper">
    <div class="zm-section single-post-wrap bg-white ptb-70 xs-pt-30">
        <div class="container">
            <div class="row">
                <!-- Start left side -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">
                    <div class="row mb-40">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-title">
                                <h2 class="h6 header-color inline-block uppercase"><?php echo $id_kategori;?>"</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start single post image formate-->
                        <div class="col-md-12">
                            <article class="zm-post-lay-single">
                                <div class="zm-post-thumb">
                                    <a href="#"><img src="<?php echo "./admin/img/data/".$gmb[3];?>" alt="img"></a>
                                </div>
                                <div class="zm-post-dis">
                                    <div class="zm-post-header">
                                        <h2 class="zm-post-title h2"><a href="#"><?php echo $judul;?></a></h2>
                                        <div class="zm-post-meta">
                                            <ul>
                                                <li class="s-meta"><a href="#" class="zm-author"><?php echo $pengirim;?></a></li>
                                                <li class="s-meta"><a href="#" class="zm-date"><?php echo date('M d, Y', strtotime($tanggal)); ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="zm-post-content">
                                        <p><?php echo $isi; ?></p>

                                    </div>


                                </div>
                            </article>
                        </div>
                        <!-- End single post image formate -->

                        <!--Start Similar post -->

                        <!-- End similar post -->
                        <!-- Start Comment box  -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="review-area mt-50 ptb-70 border-top">
                                <div class="post-title mb-40">
                                    <h2 class="h6 inline-block">Komentar</h2>
                                </div>
                                <div class="review-wrap">
                                    <div class="review-inner">
                                        <!-- Start Single Review -->

                                        <?php
                                        $sql = mysqli_query($con, "SELECT * FROM komentar where id_berita = '$id_berita' ORDER BY id_komentar");    
                                        while($hasil = mysqli_fetch_array($sql)) {      
                                            $id  = $hasil['id_komentar'];
                                            $nama = stripslashes($hasil['nama']);
                                            $komen = stripslashes($hasil['komen']);
                                            $tgl = stripslashes($hasil['tanggal']); 
                                            ?>  
                                            <div class="single-review clearfix">
                                                <div class="reviewer-img">
                                                    <img src="images/post/single/comnt/1.jpg" alt="">
                                                </div>
                                                <div class="reviewer-info">
                                                    <h4 class="reviewer-name"><a href="#"><?php echo $nama;?></a></h4>
                                                    <span class="date-time"><?php echo $tgl;?></span>
                                                    <p class="reviewer-comment"><?php echo $komen;?></p>

                                                </div>
                                            </div>
                                            <?php } ?>
                                            <!-- End Single Review -->
                                            <!-- Start Single Review -->

                                            <!-- End Single Review -->
                                            <!-- Start Single Review -->
                                                
                                                <!-- End Single Review -->
                                                <!-- Start Single Review -->
                                                
                                                <!-- End Single Review -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Comment box  -->
                                <!-- Start comment form -->
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="comment-form-area">
                                        <div class="post-title mb-40">
                                            <h2 class="h6 inline-block">Tulis Komentar</h2>
                                        </div>
                                        <div class="form-wrap">
                                            <form action="" method="post" name="input">
                                                <div class="form-inner clearfix">
                                                    <div class="single-input left width-half">
                                                        <input required="required" name="nama_kom" placeholder="Nama Lengkap *" type="text">
                                                    </div>
                                                    <div class="single-input right width-half">
                                                        <input required="required" name="email_kom" placeholder="Email *" type="text">
                                                    </div>
                                                    <div class="single-input">
                                                        <textarea class="textarea" name="kome" placeholder="Tulis komentarmu..."></textarea>
                                                    </div>
                                                    <input type="hidden" name="hidberita" value="<?=$id_berita?>">
                                                    <button class="submit-button" name="Input" type="submit">Komentar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End comment form -->
                            </div>
                        </div>
                        <!-- End left side -->
                        <!-- Start Right sidebar -->
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar-warp columns">
                            <div class="row">

                                <!-- Start Subscribe From -->
                                <div class="col-md-12 col-lg-12 col-sm-6 mt-60 sm-mb-50">
                                    <aside class="subscribe-form bg-dark text-center sidebar">
                                        <h3 class="uppercase zm-post-title">Get Email Updates</h3>
                                        <p>Join 80,000+ awesome subscribers and update yourself with our exclusive news.</p>
                                        <form action="#">
                                            <input placeholder="Enter your full name" type="text">
                                            <input placeholder="Enter email address" required="" type="email">
                                            <input value="Subscribe" type="submit">
                                        </form>
                                    </aside>
                                </div>
                                <!-- End Subscribe From -->
                                <!-- Start post layout E -->
                                <aside class="zm-post-lay-e-area col-sm-6 col-md-12 col-lg-12 mt-70">
                                    <div class="row mb-40">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="section-title">
                                                <h2 class="h6 header-color inline-block uppercase">Lihat Lain</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="zm-posts">
                                                <!-- Start single post layout E -->

                                                <?php 
                                                $sql = mysqli_query($con,"SELECT * FROM berita ORDER BY id_berita");   
                                                $i=1; 
                                                while(($hasil = mysqli_fetch_array($sql)) && $i!=8) {      
                                                    $id=$hasil['id_berita'];
                                                    $nama  = stripslashes($hasil['judul']); 
                                                    $isi = stripslashes($hasil['isi']);  
                                                    $gmb = explode('/', $hasil['gambar']);  
                                                    $pengirim = stripslashes($hasil['pengirim']); 
                                                    $time  = $hasil['tanggal'];         
                                                    ?>

                                                    <article class="zm-post-lay-e zm-single-post clearfix">
                                                        <div class="zm-post-thumb f-left">
                                                            <a href="index.php?page=berita_full&id=<?php echo $id;?>"><img height="80px" src="<?php echo "./admin/img/data/".$gmb[3];?>" alt="img"></a>
                                                        </div>
                                                        <div class="zm-post-dis f-right">
                                                            <div class="zm-post-header">
                                                                <h2 class="zm-post-title"><a href="index.php?page=berita_full&id=<?php echo $id;?>"><?php echo $nama;?></a></h2>
                                                                <div class="zm-post-meta">
                                                                    <ul>
                                                                        <li class="s-meta"><a href="#" class="zm-author"><?php echo $pengirim;?></a></li>
                                                                        <li class="s-meta"><a href="#" class="zm-date"><?php echo date('M d, Y', strtotime($time)); ?></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <?php $i++;} ?>
                                                    <!-- Start single post layout E max==7 -->
                                                    <!-- Start single post layout E -->

                                                    <!-- Start single post layout E -->
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                    <!-- End post layout E -->

                                </div>
                            </div>
                            <!-- End Right sidebar -->
                        </div>
                    </div>
                </div>
            </div>