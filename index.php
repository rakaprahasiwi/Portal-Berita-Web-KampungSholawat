<?php
include "mysqli_koneksi.php";
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from bdevs.co/znews/znews/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Jan 2019 19:53:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Kampung Sholawat News </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/faviconSS.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Style customizer (Remove these lines please) -->
    <link rel="stylesheet" href="css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">

    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--  THEME PRELOADER AREA -->
        <div id="preloader-wrapper">
            <div class="preloader-wave-effect"></div>
        </div>
        <!-- THEME PRELOADER AREA END -->

        <!-- Body main wrapper start -->
        <div class="wrapper">
            <!-- Start of header area -->
            <header  class="header-area header-wrapper bg-white clearfix">
                <div class="header-top-bar bg-dark ptb-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7  hidden-xs">

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                <div class="header-top-right clierfix text-right">
                                    <div class="header-social-bookmark topbar-sblock">
                                        <ul>
                                            <li><a href="https://www.facebook.com/raka.prahasiwi"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://plus.google.com/u/0/109073931555361056264"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="https://twitter.com/RakaPrahasiwi"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://github.com/rakaprahasiwi"><i class="fa fa-github"></i></a></li>
                                            <li><a href="https://instagram.com/rakaprahasiwi"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="zmaga-calendar topbar-sblock">
                                        <span class="calendar uppercase"><?php echo date('l, d/M/Y'); ?> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-5 col-xs-12 header-mdh">
                                <div class="global-table">
                                    <div class="global-row">
                                        <div class="global-cell">
                                            <div class="logo">
                                                <a href="index.php?page=home">
                                                    <img src="images/logo/3.png" alt="main logo">
                                                </a>
                                                <p class="site-desc">Kampung Sholawat News</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-7 col-sm-7 col-xs-12 col-lg-offset-1 header-mdh hidden-xs">
                                <div class="global-table">
                                    <div class="global-row">
                                        <div class="global-cell">
                                            <div class="advertisement text-right">
                                               <a href="#" class="block"><img src="images/ad/22.jpg" alt="ad img"></a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <?php
               include "menuheader.php"
               ?>

               <!-- mobile-menu-area start -->

               <!-- mobile-menu-area end -->

           </header>
           <!-- End of header area -->
           <!-- Start Slider post area -->

           <?php
           if(isset($_REQUEST["page"])) {
              switch($_REQUEST["page"]){
                case "home" : include("home.php");break;
                case "berita_full" : include("berita_full.php");break;
                case "kategori" : include("kategori.php");break;
                case "kontak" : include("kontak.php");break;
                case "zawiyah" : include("zawiyah.php");break;
                case "lihat_zawiyah" : include("lihat_zawiyah.php");break;
                case "jadwal" : include("jadwal.php");break;
                case "tentang" : include("tentang.php");break;
                case "video" : include("video.php");break;
                case "download" : include("download.php");break;
                default: include("home.php");break;
            }
        }
        else
          { include("home.php");
  } 
  ?>

  <!-- End page content -->
  <!-- Start footer area -->
  <footer id="footer" class="footer-wrapper footer-1">
    <!-- Start footer top area -->
    <div class="footer-top-wrap ptb-70 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-6 col-lg-4 hidden-sm">
                    <div class="zm-widget pr-40">
                        <h2 class="h6 zm-widget-title uppercase text-white mb-30">Tentang Kamshol News</h2>
                        <div class="zm-widget-content">
                            <p>Kampung Sholawat News ini merupakan media untuk berbagi berita tentang keIslaman.</p>
                            <p>Jadwal acara-acara tentang agama Islam dan seputar pemberitaan Islam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6 col-lg-2">
                    <div class="zm-widget">
                        <h2 class="h6 zm-widget-title uppercase text-white mb-30">Sosial Media</h2>
                        <div class="zm-widget-content">
                            <div class="zm-social-media zm-social-1">
                                <ul>
                                    <li><a href="https://www.facebook.com/raka.prahasiwi"><i class="fa fa-facebook"></i>Like kita di Facebook</a></li>
                                    <li><a href="https://twitter.com/RakaPrahasiwi"><i class="fa fa-twitter"></i>Tweet kita di Twitter</a></li>
                                    <li><a href="https://www.instagram.com/rakaprahasiwi"><i class="fa fa-instagram"></i>Heart kita di Instagram</a></li>
                                    <li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i>Share kita di GooglePlus</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6 col-lg-3">
                    <div class="zm-widget pr-50 pl-20">
                        <h2 class="h6 zm-widget-title uppercase text-white mb-30">Kategori Populer</h2>
                        <div class="zm-widget-content">
                            <div class="zm-category-widget zm-category-1">
                                <ul>

                                    <?php 
                                    include "mysqli_koneksi.php";
                                    $sql = mysqli_query($con, "SELECT * FROM kategori ORDER BY id_kategori asc");    
                                    while($hasil = mysqli_fetch_array($sql)) {      
                                        $id=$hasil['id_kategori'];  
                                        $kategori=stripslashes($hasil['nm_kategori']);  
                                        ?>                  
                                        <?php
                                        echo "<li><a href='index.php?page=kategori&id=$id'>$kategori</a></li>";
                                        ?>
                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-6 col-lg-3">
                        <div class="zm-widget">
                            <h2 class="h6 zm-widget-title uppercase text-white mb-30">Subscribe Newsletter</h2>
                            <!-- Start Subscribe From -->
                            <div class="zm-widget-content">
                                <div class="subscribe-form subscribe-footer">
                                    <p>Join 80,000+ awesome subscribers and update yourself with our exclusive news.</p>
                                    <form action="#">
                                        <input type="text" placeholder="Enter your full name">
                                        <input type="email" placeholder="Enter email address" required="">
                                        <input type="submit" value="Subscribe">
                                    </form>
                                </div>
                            </div>
                            <!-- End Subscribe From -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End footer top area -->
        <div class="footer-buttom bg-black ptb-15">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                        <div class="zm-copyright">
                            <p class="uppercase">&copy; 2019 Kampung Sholawat News.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- End footer area -->
</div>
<!-- Body main wrapper end -->

<!--Color customizer -->

<!--Color customizer end -->


<!-- Placed js at the end of the document so the pages load faster -->
<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.1.min.js"></script>
<!-- Bootstrap framework js -->
<script src="js/bootstrap.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/plugins.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="js/main.js"></script>

<!-- <script src="js/vendor/jquery-1.12.1.min.js"></script> -->
<!-- Bootstrap framework js -->
<!-- <script src="js/bootstrap.min.js"></script> -->
<!-- All js plugins included in this file. -->
<!-- <script src="js/plugins.js"></script> -->
<script src="js/ajax-mail.js"></script>
<!-- <script src="js/owl.carousel.min.js"></script> -->
<!-- Google Map js -->
    <!-- Main js file that contents all jQuery plugins activation. -->
    <!-- // <script src="js/main.js"></script> -->
</body>

</html>

