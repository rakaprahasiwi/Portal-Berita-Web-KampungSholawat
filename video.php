
<section>
<div class="video-post-area ptb-70 bg-white">
        <div class="container">
            <div class="row mb-40">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-title">
                        <h2 class="h6 header-color inline-block uppercase">Video Post</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="zm-video-post-list zm-posts owl-active-3 navigator-1 clearfix">
                    <!-- Start single video post [video layout A] -->

                    <?php 
                            $sql = mysqli_query($con,"SELECT * FROM video ORDER BY id_video DESC");   
                            // $i=1; 
                            while($hasil = mysqli_fetch_array($sql)) {      

                                $nama = stripslashes($hasil['nama_video']);  
                                $link = stripslashes($hasil['link']);  

                                ?>

                                

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="zm-video-post zm-video-lay-a zm-single-post">
                            <iframe width="420" height="270" src="<?php echo $link; ?>" 
frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; 
picture-in-picture" allowfullscreen></iframe>
                            <div class="zm-video-info text-black">
                                <h2 class="zm-post-title"><a href="#"><?php echo $nama; ?></a></h2>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>
                    <!-- End single video post [video layout A] -->
                    <!-- Start single video post [video layout A] -->
                    
                    <!-- End single video post [video layout A] -->
                </div>
            </div>
        </div>
    </div>
</section>