<?php 
	include '../db/connection.php';
	$contact = $mysqli->query("select * from contactUs");
	$news = $mysqli->query("select * from tanya where status = 0 order by jam asc");

	$no = 1;
 ?>
<div class="row">
	<div class="col-lg-4">
		<div class="card shadow mb-4">
            <div class="card-header">
              	<h6 class="m-0 font-weight-bold text-primary">Conntact Support</h6>
            </div>
        	<!-- Card Body -->
            <div class="card-body" style="height: 500px">
	            <div class="chart-area">
	                <form action="proContent.php?action=simpanContactUs" method="POST">
                		<?php foreach($contact as $con): ?>
                			<label class="awasome">Alamat</label>
	                		<textarea name="alamat" class="form-control" rows="5" cols="2"><?php echo $con['alamat'] ?></textarea>

	                		<label class="awasome">No Telpon</label>
	                		<input type="number" name="noTelp" value="<?php echo $con['noTelp'] ?>" class="form-control">

	                		<label class="awasome">Email</label>
	                		<input type="email" name="email" value="<?php echo $con['email'] ?>" class="form-control">
                		<?php endforeach ?>
                		<input type="submit" style="margin-top: 5px" value="Submit" class="btn btn-success">
                	</form>
	            </div>
            </div>
      	</div>
	</div>
	<div class="col-lg-8">
			<div class="card shadow mb-4">
            <div class="card-header">
              	<h6 class="m-0 font-weight-bold text-primary">List Question</h6>
            </div>
        	<!-- Card Body -->
            <div class="card-body">
	            <div class="chart-area" style="overflow-x: auto;overflow-y:auto; height: 500px">
	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                	<thead>
	                		<tr>
	                			<th>#</th>
	                			<th>Nama</th>
	                			<th>Subject</th>
	                			<th>Email</th>
	                			<th>action</th>
	                		</tr>
	                	</thead>
	                	<tbody>
	                		<?php foreach ($news as $a): ?>
	                			<tr>
	                				<td><?php echo $no++; ?></td>
	                				<td><?php echo $a['namaKamu']; ?></td>
	                				<td><?php echo $a['subject']; ?></td>
	                				<td><?php echo $a['email']; ?></td>
	                				<td>
	                					<?php 
	                						if ($a['status'] == 0) 
	                						{
	                							?>
	                								<!-- jika belum di review button nya watna kuning jika sudah warna biru -->
	                								<a href="#" idRiview="<?php echo $a['id'] ?>" class="btn btn-warning open_review">Review</a>
	                							<?php
	                						}
	                						else
	                						{
	                							?>
	                								<a href="" title="" class="btn btn-primary">Review</a>
	                							<?php
	                						}
	                					 ?>
	                				</td>
	                			</tr>
	                		<?php endforeach ?>
	                	</tbody>
	                </table>
	            </div>
            </div>
      	</div>
	</div>
</div>
<div class="modal fade" id="ModalReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"

</div>