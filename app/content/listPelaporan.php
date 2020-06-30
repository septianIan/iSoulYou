<?php 
include '../db/connection.php';
$quest = $mysqli->query("select * from lapor  where status = 0 order by tanggal asc");

$no =1;
 ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				List Laporan
			</div>
			<div class="card-body" style="height: 500px;overflow-x: auto;">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Pelapor</th>
							<th>No Telp</th>
							<th>jam</th>
							<th>tanggal</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($quest as $key): ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $key['namaPelapor'] ?></td>
								<td><?php echo $key['noTelp'] ?></td>
								<td><?php echo $key['jam'] ?></td>
								<td><?php echo $key['tanggal'] ?></td>
								<td>
									<a href="#" idListPelaporan="<?php echo $key['id'] ?>" class="btn btn-success reviewLaporan">View</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="ModalListViewPelaporan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>