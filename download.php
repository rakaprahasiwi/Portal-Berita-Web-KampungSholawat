<div class="site-main-container">
	<div class="row">
		<br>
		<div class="col-xs-12 col-md-12 col-sm-12">
			<div class="section-title-2 mb-40  text-center">
				<h3 class="inline-block uppercase">File Download</h3>
			</div>
		</div>
	</div>
	
	<div class="container" style="max-width:500px;">
            <div class="panel panel-primary">

                <div class="panel-body">
                    <table class="table table-striped table-advance table-hover"> 
					<thead> 
						<tr>
							<th>No</th> 
							<th>Nama File</th>
							<th>Download</th>
						</tr> 
					</thead> 
					<tbody> 
						<?php
						$no=1;
						$result = mysqli_query($con, "SELECT * From download order by id_download desc");

						while($row = mysqli_fetch_array($result)){
							?>
							<tr> 
								<?php
								$name = explode('/', $row['nm_path']);
								$id = $row['id_download'];
								?>
								<th scope="row"><?= $no++; ?></th> 
								<td><?= $row['nama_file']; ?></td>  
								<td><a href="admin/filedownload/<?php echo $name[2];?>" class="btn btn-success">Download</a></td>  
							</tr> 
							<?php } ?>
						</tbody> 
					</table>
				</div>
                

			</div>
		</div>
		
		<!-- End contact-page Area -->
	</div>