<div id="sticky-header" class="header-bottom-area hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="menu-wrapper  bg-theme clearfix">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="mainmenu-area">
                                <nav class="primary-menu uppercase">
                                    <ul class="clearfix">
                                        <li><a href="index.php?page=home">Home</a></li>
                                        <li><a href="index.php?page=tentang">Tentang</a></li>
                                        <li class="drop"><a href="#">Berita</a>
                                            <ul class="dropdown">
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
                                            </li>
                                            <li><a href="index.php?page=video">Video</a>
                                            </li>
                                            <li><a href="index.php?page=download">Download</a></li>
                                            <li><a href="index.php?page=zawiyah">Zawiyah</a></li>
                                            <li><a href="index.php?page=jadwal">Jadwal</a></li>
                                            <li><a href="index.php?page=kontak">Kontak</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="search-wrap pull-right">
                                    <div class="search-btn"><i class="fa fa-search"></i></div>
                                    <div class="search-form">
                                        <form action="#">
                                            <input type="search" placeholder="Search">
                                            <button type="submit"><i class='fa fa-search'></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu-area hidden-md hidden-lg">
                <div class="fluid-container">
                    <div class="mobile-menu clearfix">
                        <div class="search-wrap mobile-search">
                            <div class="mobile-search-btn"><i class="fa fa-search"></i></div>
                            <div class="mobile-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class='fa fa-search'></i></button>
                                </form>
                            </div>
                        </div>
                        <nav id="mobile_dropdown">
                            <ul>
                                <li><a href="index.php?page=home">Home</a></li>
                                        <li><a href="index.php?page=tentang">Tentang</a></li>
                                        <li class="drop"><a href="index.php?page=berita">Berita</a>
                                            <ul class="dropdown">
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
                                            </li>
                                            <li><a href="index.php?page=video">Video</a></li>
                                            <li><a href="index.php?page=download">Download</a></li>
                                            <li><a href="index.php?page=zawiyah">Zawiyah</a></li>
                                            <li><a href="index.php?page=jadwal">Jadwal</a></li>
                                            <li><a href="index.php?page=kontak">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>