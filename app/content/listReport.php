<?php 
include '../db/connection.php';
$quest = $mysqli->query("select * from tanya  where status = 1 order by tanggal asc");

$no =1;
 ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				List
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>Subjek</th>
							<th>Email</th>
							<th>Pesan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($quest as $key): ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $key['namaKamu'] ?></td>
								<td><?php echo $key['subject'] ?></td>
								<td><?php echo $key['email'] ?></td>
								<td><?php echo $key['pesan'] ?></td>
								<td>
									<a href="#" idList="<?php echo $key['id'] ?>" class="btn btn-success review">View</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="ModalListView" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>