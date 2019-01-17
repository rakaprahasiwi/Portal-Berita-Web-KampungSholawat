<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Kategori</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Kategori</li>						  	
					</ol>
				</div>
			</div>              
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Kategori
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Id</th>
                                 <th><i class="icon_mail_alt"></i> Nama Kategori</th>
                                 <th><i class="icon_mail_alt"></i> Deskripsi</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
					<?php  
  $sql = mysqli_query($con,"SELECT * FROM kategori ORDER BY id_kategori asc");    
  while($hasil = mysqli_fetch_array($sql)) {     	
	$id  = $hasil['id_kategori'];  
 	$nama = stripslashes($hasil['nm_kategori']);
  $deskripsi = stripslashes($hasil['deskripsi']);
  ?>		  
							<tr>
							<td>
							<?php echo $id;?>
							</td>
							<td>
							<?php echo $nama;?>
							</td>
              <td>
              <?php echo $deskripsi;?>
              </td>
							<td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="index.php?page=input_kategori&id=<?php echo $id;?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="index.php?page=edit_kategori&id=<?php echo $id;?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="index.php?page=delete_kategori&id=<?php echo $id;?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
	        <?php } ?>
		</tbody>
                        </table>
                      </section>
                  </div>
              </div>