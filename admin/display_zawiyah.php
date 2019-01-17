<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
  <div class="col-lg-12">
   <h3 class="page-header"><i class="fa fa-laptop"></i> Zawiyah</h3>
   <ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
    <li><i class="fa fa-laptop"></i>Zawiyah</li>						  	
  </ol>
</div>
</div>              
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Zawiyah
      </header>
      
      <table class="table table-striped table-advance table-hover">
       <tbody>
        <tr>
         <th><i class="icon_profile"></i> Id</th>
         <th><i class="icon_mail_alt"></i> Nama</th>
         <th><i class="icon_pin_alt"></i> Alamat</th>
         <th><i class="icon_pin_alt"></i> Email</th>
         <th><i class="icon_pin_alt"></i> Telepon</th>
         <th><i class="icon_pin_alt"></i> Link</th>
         <th><i class="icon_cogs"></i> Action</th>
       </tr>
       <?php  
       $sql = mysqli_query($con,"SELECT * FROM zawiyah ORDER BY id_zawiyah asc");    
       while($hasil = mysqli_fetch_array($sql)) {     	
         $id  = $hasil['id_zawiyah'];  
         $nama = stripslashes($hasil['nama_zawiyah']);  
         $pass = stripslashes($hasil['alamat']);
         $email = stripslashes($hasil['email']);
         $telp = stripslashes($hasil['telp']);  
         $link = stripslashes($hasil['link_maps']);  
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
            <?php echo $email;?>
          </td>
          <td>
            <?php echo $telp;?>
          </td>
          <td width="50px">
            <?php echo substr($link, 0,70)." ...";?>
          </td>
          
          <td>
            <div class="btn-group">
              <a class="btn btn-primary" href="index.php?page=input_zawiyah&id=<?php echo $id;?>"><i class="icon_plus_alt2"></i></a>
              <a class="btn btn-success" href="index.php?page=edit_zawiyah&id=<?php echo $id;?>"><i class="icon_check_alt2"></i></a>
              <a class="btn btn-danger" href="index.php?page=delete_zawiyah&id=<?php echo $id;?>"><i class="icon_close_alt2"></i></a>
            </div>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </section>
</div>
</div>