<div class="site-main-container">
  <div class="row">
  <br>
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="section-title-2 mb-40  text-center">
                        <h3 class="inline-block uppercase">Jadwal Kegiatan</h3>
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
                <th>Tanggal</th>
                <th>Nama Kegiatan</th>
                <th>Informasi</th>
                <th>Alamat</th>
              </tr> 
            </thead> 
            <tbody> 
              <?php
              $no=1;
              $result = mysqli_query($con, "SELECT * From jadwal ORDER BY ket_jadwal asc");

              while($row = mysqli_fetch_array($result)){
                ?>
                <tr> 
                  <?php
                  $id = $row['id_jadwal'];
                  ?>
                  <th scope="row"><?= $no++; ?></th> 
                  <td><?php echo date('M d, Y', strtotime($row['ket_jadwal'])); ?></td>  
                  <td><?= $row['nama_jadwal']; ?></td>   
                  <td><?= $row['info_lanjut']; ?></td>   
                  <td><?= $row['alamat_jadwal']; ?></td> 
                </tr> 
                <?php } ?>
              </tbody> 
            </table>
          </div>


        </div>
      </div>
    
    <!-- End contact-page Area -->
  </div>