<div class="site-main-container">
    <div class="row">
    <br>
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="section-title-2 mb-40  text-center">
                        <h3 class="inline-block uppercase">Daftar Zawiyah</h3>
                    </div>
                </div>
            </div>
    
    <div class="container" style="max-width:1000px;">
            <div class="panel panel-primary">

                <div class="panel-body">
                    <table class="table table-striped table-advance table-hover"> 
                        <thead> 
                            <tr>
                                <th>No</th> 
                                <th>Nama Zawiyah</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            <?php
                            $no=1;
                            $result = mysqli_query($con, "SELECT * From zawiyah  ORDER BY id_zawiyah desc");

                            while($hasil = mysqli_fetch_array($result)){
                                ?>
                                <tr> 
                                    <?php
                                    $id  = $hasil['id_zawiyah'];  
                                    $nama = stripslashes($hasil['nama_zawiyah']);  
                                    $pass = stripslashes($hasil['alamat']);
                                    $email = stripslashes($hasil['email']);
                                    $telp = stripslashes($hasil['telp']); 
                                    ?>
                                    <th scope="row"><?= $no++; ?></th> 
                                    <td><?= $nama; ?></td>  
                                    <td><?= $email; ?></td>   
                                    <td><?= $telp; ?></td>   
                                    <td><?= $pass; ?></td>   
                                    <td><a href="index.php?page=lihat_zawiyah&id=<?php echo $id;?>" class="btn btn-success">Lihat Detail</a></td>  
                                </tr> 
                                <?php } ?>
                            </tbody> 
                        </table>
                    </div>


                </div>
            </div>
        
        <!-- End contact-page Area -->
    </div>