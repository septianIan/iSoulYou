<?php 
include '../db/connection.php';
$quest = $mysqli->query("select * from lapor  where status = 1 order by tanggal asc");

$no =1;
 ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				List Semua Laporan
			</div>
			<div class="card-body" style="height: 500px;overflow-x: auto;">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead style="font-size: 12px">
						<tr>
							<th>#</th>
							<th>Nama Pelapor</th>
							<th>No Telp</th>
							<th>Alamat Yang di Laporkan</th>
							<th>jam</th>
							<th>tanggal</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody style="font-size: 12px">
						<?php foreach ($quest as $key): ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $key['namaPelapor'] ?></td>
								<td><?php echo $key['noTelp'] ?></td>
								<td><?php echo $key['alamat'] ?></td>
								<td><?php echo $key['jam'] ?></td>
								<td><?php echo $key['tanggal'] ?></td>
								<td>
									<a href="#" idImage="<?php echo $key['id'] ?>" class="btn btn-primary reviewImage">View Image</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="ModalImage" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>