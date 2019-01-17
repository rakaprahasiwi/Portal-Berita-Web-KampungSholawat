<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Kategori</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Komentar</li>						  	
					</ol>
				</div>
			</div>              
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Komentar
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Id Berita</th>
                                 <th><i class="icon_profile"></i> Tanggal</th>
                                 <th><i class="icon_mail_alt"></i> Nama Komentator</th>
                                 <th><i class="icon_mail_alt"></i> Komentar</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
					<?php  
  $sql = mysqli_query($con,"SELECT * FROM komentar ORDER BY id_komentar desc");    
  while($hasil = mysqli_fetch_array($sql)) {     	
	$id  = $hasil['id_komentar'];  
 	$id_berita = stripslashes($hasil['id_berita']);
  $nama = stripslashes($hasil['nama']);
  $email = stripslashes($hasil['email']);
  $komen = stripslashes($hasil['komen']);
  $tgl = stripslashes($hasil['tanggal']);
  ?>		  
							<tr>
							<td>
							<?php echo $id_berita;?>
							</td>
              <td>
              <?php echo $tgl;?>
              </td>
              <td>
              <?php echo $nama;?>
              </td>
              <td>
              <?php echo substr($komen, 0,200)." ...";?>
              </td>
              <td>
              <?php echo $email;?>
              </td>
							<td>
                                  <div class="btn-group">
                                      <a class="btn btn-success" href="index.php?page=lihat_komentar&id=<?php echo $id;?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="index.php?page=delete_komentar&id=<?php echo $id;?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
	        <?php } ?>
		</tbody>
                        </table>
                      </section>
                  </div>
              </div>