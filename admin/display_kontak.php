<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Kategori</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Bukutamu</li>						  	
					</ol>
				</div>
			</div>              
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Bukutamu
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Id</th>
                                 <th><i class="icon_mail_alt"></i> Nama Tamu</th>
                                 <th><i class="icon_mail_alt"></i> Pesan</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><i class="icon_mail_alt"></i> Telepon</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
					<?php  
  $sql = mysqli_query($con,"SELECT * FROM kontak ORDER BY id_kontak desc");    
  while($hasil = mysqli_fetch_array($sql)) {     	
	$id  = $hasil['id_kontak'];  
 	$nama = stripslashes($hasil['nama_kontak']);
  $deskripsi = stripslashes($hasil['pesan']);
  $email = stripslashes($hasil['email_kontak']);
  $telp = stripslashes($hasil['telepon']);
  ?>		  
							<tr>
							<td>
							<?php echo $id;?>
							</td>
							<td>
							<?php echo $nama;?>
							</td>
              <td>
              <?php echo substr($deskripsi, 0,200)." ...";?>
              </td>
              <td>
              <?php echo $email;?>
              </td>
              <td>
              <?php echo $telp;?>
              </td>
							<td>
                                  <div class="btn-group">
                                      <a class="btn btn-success" href="index.php?page=lihat_kontak&id=<?php echo $id;?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="index.php?page=delete_kontak&id=<?php echo $id;?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
	        <?php } ?>
		</tbody>
                        </table>
                      </section>
                  </div>
              </div>