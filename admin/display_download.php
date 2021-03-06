<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
  <div class="col-lg-12">
   <h3 class="page-header"><i class="fa fa-laptop"></i> File Download</h3>
   <ol class="breadcrumb">
    <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
    <li><i class="fa fa-laptop"></i>Download</li>						  	
  </ol>
</div>
</div>              
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Download
      </header>
      
      <table class="table table-striped table-advance table-hover">
       <tbody>
        <tr>
         <th><i class="icon_profile"></i> Id</th>
         <th><i class="icon_mail_alt"></i> Nama</th>
         <th><i class="icon_pin_alt"></i> Path</th>
         <th><i class="icon_cogs"></i> Action</th>
       </tr>
       <?php  
       $sql = mysqli_query($con,"SELECT * FROM download ORDER BY id_download DESC");    
       while($hasil = mysqli_fetch_array($sql)) {     	
         $id=$hasil['id_download'];
         $nama  = stripslashes($hasil['nama_file']);  
         $email = stripslashes($hasil['nm_path']);   		
         ?>		  
         <tr>
           <td>
             <?php echo $id;?>
           </td>
           <td>
             <?php echo $nama;?>
           </td>
           <td>
             <?php echo $email;?>
           </td>
           <td>
            <div class="btn-group">
              <a class="btn btn-primary" href="index.php?page=input_download&id=<?php echo $id;?>"><i class="icon_plus_alt2"></i></a>
              <a class="btn btn-success" href="index.php?page=edit_download&id=<?php echo $id;?>"><i class="icon_check_alt2"></i></a>
              <a class="btn btn-danger" href="index.php?page=delete_download&id=<?php echo $id;?>"><i class="icon_close_alt2"></i></a>
            </div>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </section>
</div>
</div>