<?php
include "mysqli_koneksi.php";


?>

<section id="page-content" class="page-wrapper">
	<div class="zm-section bg-white pt-30 xs-pt-30 pb-40">
		<div class="container">
			<div class="row">
				<!-- Start left side -->
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">
					<div class="row mb-40">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="section-title">
								<h2 class="h6 header-color inline-block uppercase">Latest News</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="zm-posts clearfix">
							<!-- Start single post layout A1 -->
							<?php
							if (isset($_GET['id'])) {
								$id_berita = $_GET['id'];
							} else {
								die ("Error. No Id Selected! ");
							}
							$sql = mysqli_query($con,"SELECT * FROM berita a, kategori b where  a.id_kategori='$id_berita' AND a.id_kategori=b.id_kategori ORDER BY id_berita DESC");   
	                            // $i=1; 
							while($hasil = mysqli_fetch_array($sql)) {      
								$id=$hasil['id_berita'];
								$nama  = stripslashes($hasil['judul']);  
								$kategor = stripslashes($hasil['nm_kategori']);  
								$isi = stripslashes($hasil['isi']);  
								$gmb = explode('/', $hasil['gambar']);  
								$pengirim = stripslashes($hasil['pengirim']); 
								$time  = $hasil['tanggal'];    

								?>
								<div class="col-md-12">
									<article class="zm-post-lay-a">
										<div class="zm-post-thumb">
											<a href="index.php?page=berita_full&id=<?php echo $id;?>"><img src="<?php echo "./admin/img/data/".$gmb[3];?>" alt="img"></a>
										</div>
										<div class="zm-post-dis">
											<div class="zm-post-header">
												<div class="zm-category"><a href="#" class="bg-cat-5 cat-btn"><?php echo $kategor;?></a></div>
												<h2 class="zm-post-title h2"><a href="index.php?page=berita_full&id=<?php echo $id;?>"><?php echo $nama;?></a></h2>
												<div class="zm-post-meta">
													<ul>
														<li class="s-meta"><a href="#" class="zm-author"><?php echo $pengirim;?></a></li>
														<li class="s-meta"><a href="#" class="zm-date"><?php echo date('M d, Y', strtotime($time)); ?></a></li>
													</ul>
												</div>
											</div>
											<div class="zm-post-content">
												<p><?php echo substr($isi, 0,200)." ..."; ?></p>
											</div>
										</div>
									</article>
								</div>

								<?php } ?>
								<!-- End single post layout A1 -->
								<!-- Start single post layout A1 -->

								<!-- End single post layout A1 -->
							</div>
						</div>
					</div>
					<!-- End left side -->
					<!-- Start Right sidebar -->
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar-warp columns">
						<div class="row">
							<!-- Start Subscribe From -->
							<div class="col-md-12 col-lg-12 col-sm-6 sm-mt-40">
								<aside class="subscribe-form bg-dark  text-center sidebar">
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
							<aside class="col-md-12 col-sm-6 col-lg-12 mt-70 sm-mt-40 advertisement-area">
								<div class="advertisement">
									<a href="#"><img src="images/ad/ad_sidebar-2.png" alt=""></a>
								</div>
							</aside>
							<!-- Start post layout E -->
							<aside class="zm-post-lay-e-area col-sm-6 col-md-12 col-lg-12 sm-mt-60 mt-70">
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
											$sql = mysqli_query($con,"SELECT * FROM berita a, kategori b where a.id_kategori=b.id_kategori ORDER BY id_berita");   
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
														<a href="index.php?page=berita_full&id=<?php echo $id;?>"><img src="<?php echo "./admin/img/data/".$gmb[3]; ?>" alt="img"></a>
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
										</div>
									</div>
								</div>
							</aside>
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