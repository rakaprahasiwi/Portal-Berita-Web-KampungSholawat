<div class="slider-post-area">
        <div class="container">
            <div class="row">
                <!-- Start Left side -->
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-8">
                    <div class="slider-post-area-content">
                        <ul class="slide-posts owl-carousel list-unstyled">

                            <?php 
                            $sql = mysqli_query($con,"SELECT * FROM berita ORDER BY id_berita DESC");   
                            $i=1; 
                            while(($hasil = mysqli_fetch_array($sql)) && $i!=7) {      

                                // $gmb = stripslashes($hasil['gambar']); 
                                $gmb = explode('/', $hasil['gambar']); 
                                ?>

                                <li class="item">
                                <img src="<?php echo "./admin/img/data/".$gmb[3]; ?>" alt="img">
                                </li>

                                <?php  $i=$i+1;} ?>
                            
                        </ul><!--/.owl-slider-->
                        <ul class="posts-thumbnails-wrapper list-unstyled">

                           <?php 
                           $sql = mysqli_query($con,"SELECT * FROM berita ORDER BY id_berita DESC");   
                            $i=1; 
                           while(($hasil = mysqli_fetch_array($sql)) && $i!=7) {      

                            $gmb = explode('/', $hasil['gambar']);   

                            ?>

                            <li class="post-thumbnail">
                                <a href="#"><img src="<?php echo "./admin/img/data/".$gmb[3]; ?>" alt="img"></a>
                            </li>
                            <?php  $i = $i+1;
                            } ?>
                            
                        </ul>
                    </div>
                </div>
                <!-- End Left side -->

                <!-- Start Righr side -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden-md">
                    <!-- Start post layout E -->
                    <aside class="zm-post-lay-e-area">
                        <div class="row mb-30">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="zm-posts-tab-menu">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#trending_posts">TRENDING</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="zm-posts-tab-content tab-content">
                                    <!-- Start Latest Posts -->
                                    <!-- End Latest Posts -->

                                    <!-- Start Comments Posts -->
                                    <!-- End Comments Posts -->

                                    <!-- Start Trending Posts -->
                                    <div id="trending_posts" class="zm-posts tab-pane fade in active">
                                        <!-- Start single post layout E -->

                                        <?php 
                                        $sql = mysqli_query($con,"SELECT * FROM berita a, kategori b where a.id_kategori=b.id_kategori ORDER BY byk_tonton DESC");   
                                        $i=1; 
                                        while(($hasil = mysqli_fetch_array($sql)) && $i!=6) {      
                                            $id=$hasil['id_berita'];
                                            $nama  = stripslashes($hasil['judul']);  
                                            $kategor = stripslashes($hasil['nm_kategori']);  
                                            $isi = stripslashes($hasil['isi']);  
                                            $gmb = explode('/', $hasil['gambar']);  
                                            $pengirim = stripslashes($hasil['pengirim']); 
                                            $time  = $hasil['tanggal'];         
                                            ?>

                                            <article class="zm-post-lay-e zm-single-post clearfix">
                                                <div class="zm-post-thumb f-left">
                                                    <a href="index.php?page=berita_full&id=<?php echo $id;?>"><img  src="<?php echo "./admin/img/data/".$gmb[3]; ?>" alt="img"></a>
                                                </div>
                                                <div class="zm-post-dis f-right">
                                                    <div class="zm-post-header">
                                                        <h2 class="zm-post-title"><a href="index.php?page=berita_full&id=<?php echo $id;?>"><?php echo $nama; ?></a></h2>
                                                        <div class="zm-post-meta">
                                                            <ul>
                                                                <li class="s-meta"><a href="#" class="zm-author"><?php echo $pengirim; ?></a></li>
                                                                <li class="s-meta"><a href="#" class="zm-date"><?php echo date('M d, Y', strtotime($time)); ?></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>

                                            <?php 
                                            $i = $i+1;
                                        } ?>
                                        <!-- Start single post layout E -->
                                        <!-- Start single post layout E -->

                                        <!-- Start single post layout E -->
                                    </div><!-- End Trending Posts -->
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- End post layout E -->
                </div>
                <!-- End Right side -->
            </div>
        </div>
    </div>
    <!-- End Slider post area -->

    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">
        <!-- Start Popular News [layout A+D]  -->

        <!-- End Popular News [layout A+D]  -->

        <!-- Start world news [layout A1+E+A]  -->

        <!-- End world news [layout A1+E+A]  -->

        <!-- Start Video Post [View layout A]  -->

        <!-- End Video Post [View layout A]  -->
        <div class="zm-section bg-white pt-70 pb-40">
            <div class="container">
                <div class="row">
                    <!-- Start left side -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 columns">
                        <div class="row mb-40">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section-title">
                                    <h2 class="h6 header-color inline-block uppercase">Latest News</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="zm-posts">
                                    <!-- Start single post layout C -->

                                    <?php 
                                    $sql = mysqli_query($con,"SELECT * FROM berita a, kategori b where a.id_kategori=b.id_kategori ORDER BY id_berita DESC");    
                                    while($hasil = mysqli_fetch_array($sql)) {      
                                        $id=$hasil['id_berita'];
                                        $nama  = stripslashes($hasil['judul']);  
                                        $kategor = stripslashes($hasil['nm_kategori']);  
                                        $isi = stripslashes($hasil['isi']);  
                                        $gmb = explode('/', $hasil['gambar']);         
                                        $pengirim = stripslashes($hasil['pengirim']); 
                                        $time  = $hasil['tanggal'];         
                                        ?>

                                        <article class="zm-post-lay-c zm-single-post clearfix">
                                            <div class="zm-post-thumb f-left">
                                                <a href="index.php?page=berita_full&id=<?php echo $id;?>"><img src="<?php echo "./admin/img/data/".$gmb[3]; ?>" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-right">
                                                <div class="zm-post-header">
                                                    <div class="zm-category"><a href="#" class="bg-cat-1 cat-btn"><?php echo $kategor; ?></a></div>
                                                    <h2 class="zm-post-title"><a href="index.php?page=berita_full&id=<?php echo $id;?>"><?php echo $nama; ?></a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"><?php echo $pengirim; ?></a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"><?php echo date('M d, Y', strtotime($time)); ?></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="zm-post-content">
                                                        <p><?php echo substr($isi, 0,200)." ..."; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>

                                        <?php } ?>
                                        <!-- Start single post layout C -->
                                        <!-- Start single post layout C -->

                                        <!-- Start single post layout C -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End left side -->
                        <!-- Start Right sidebar -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 sidebar-warp columns">
                            <div class="row">
                                <!-- Start Subscribe From -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-12 xs-mt-40 sm-mt-50 md-mt-60">
                                    <aside class="subscribe-form bg-dark text-center sidebar">
                                        <h3 class="uppercase zm-post-title">Get Email Updates</h3>
                                        <p>Join 80,000+ awesome subscribers and update yourself with our exclusive news.</p>
                                        <form action="#">
                                            <input type="text" placeholder="Enter your full name">
                                            <input type="email" placeholder="Enter email address" required="">
                                            <input type="submit" value="Subscribe">
                                        </form>
                                    </aside>
                                </div>
                                <!-- End Subscribe From -->


                                <!-- Start post layout E -->
                            </div>
                        </div>
                        <!-- End Right sidebar -->
                    </div>
                    <!-- Start pagination area -->
                    <div class="row hidden-xs">
                        <div class="zm-pagination-wrap mt-70">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <nav class="zm-pagination ptb-40 text-center">
                                            <ul class="page-numbers">
                                                <li><a class="prev page-numbers" href="#">Previous</a></li>
                                                <li><span class="page-numbers current">1</span></li>
                                                <li><a class="page-numbers" href="#">2</a></li>
                                                <li><a class="page-numbers" href="#">3</a></li>
                                                <li><a class="page-numbers" href="#">4</a></li>
                                                <li><a class="page-numbers" href="#">5</a></li>
                                                <li><span class="page-numbers zm-pgi-dots">...</span></li>
                                                <li><a class="page-numbers" href="#">15</a></li>
                                                <li><a class="next page-numbers" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End pagination area -->
                    <!-- Start Advertisement -->
                    <!-- End Advertisement -->
                </div>
            </div>
        </section>