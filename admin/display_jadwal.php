<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Jadwal</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Jadwal</li>						  	
					</ol>
				</div>
			</div>              
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Jadwal
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Tanggal</th>
                                 <th><i class="icon_profile"></i> Nama</th>
                                 <th><i class="icon_mail_alt"></i> Informasi</th>
                                 <th><i class="icon_pin_alt"></i> Alamat</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
					<?php  
  $sql = mysqli_query($con,"SELECT * FROM jadwal ORDER BY id_jadwal desc");    
  while($hasil = mysqli_fetch_array($sql)) {     	
	$id  = $hasil['id_jadwal'];  
 	$nama = stripslashes($hasil['nama_jadwal']);  
 	$pass = stripslashes($hasil['info_lanjut']);  
  $alamat = stripslashes($hasil['alamat_jadwal']);
  $ket = stripslashes($hasil['ket_jadwal']);
  ?>		  
							<tr>
							<td>
							<?php echo $ket;?>
							</td>
							<td>
							<?php echo $nama;?>
							</td>
							<td>
							<?php echo $pass;?>
							</td>
              <td>
              <?php echo $alamat;?>
              </td>
							
							<td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="index.php?page=input_jadwal&id=<?php echo $id;?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="index.php?page=edit_jadwal&id=<?php echo $id;?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="index.php?page=delete_jadwal&id=<?php echo $id;?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
	        <?php } ?>
		</tbody>
                        </table>
                      </section>
                  </div>
              </div>