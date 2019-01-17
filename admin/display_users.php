<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> User</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Users</li>						  	
					</ol>
				</div>
			</div>              
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Users
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Id</th>
                                 <th><i class="icon_mail_alt"></i> Nama</th>
                                 <th><i class="icon_pin_alt"></i> Password</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
					<?php  
  $sql = mysqli_query($con,"SELECT * FROM users ORDER BY id_users asc");    
  while($hasil = mysqli_fetch_array($sql)) {     	
	$id  = $hasil['id_users'];  
 	$nama = stripslashes($hasil['nama']);  
 	$pass = stripslashes($hasil['password']);  
  ?>		  
							<tr>
							<td>
							<?php echo $id;?>
							</td>
							<td>
							<?php echo $nama;?>
							</td>
							<td>
							<?php echo $pass;?>
							</td>
							
							<td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="index.php?page=input_user&id=<?php echo $id;?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="index.php?page=edit_user&id=<?php echo $id;?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="index.php?page=delete_user&id=<?php echo $id;?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
	        <?php } ?>
		</tbody>
                        </table>
                      </section>
                  </div>
              </div>