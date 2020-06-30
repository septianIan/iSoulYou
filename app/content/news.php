<?php 
	include '../db/connection.php';
	$news = $mysqli->query("select * from news");
 ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center">
              	<h6 class="m-0 font-weight-bold text-primary">Content News</h6>

              	<a href="index.php?content=news" style="float: left;margin-right: 3px;margin-left: 5px" title="" class="btn btn-primary">Create Data</a>

              	<a href="index.php?content=news&contentNews=contentNews" title="" class="btn btn-primary">View Data</a>
            </div>
        	<!-- Card Body -->
            <div class="card-body" style="height: 550px;overflow-x: auto;overflow-y: auto;">
	            <div class="chart-area">
	                <div class="table-responsive">
	                	<?php 
	                		if (isset($_GET['contentNews'])) 
	                		{
	                			?>
	                				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				                		<thead>
					                		<tr>
					                			<th>#</th>
					                			<th>Judul</th>
					                			<th>Image</th>
					                			<th>Desk</th>
					                			<th>action</th>
					                		</tr>
					                	</thead>
					                	<tbody>
					                		<?php $no=1; ?>
					                		<?php foreach($news as $con): ?>
				                				<tr>
				                					<td><?php echo $no++; ?></td>
					                				<td><?php echo $con['judul']; ?></td>
				                					<td>
				                						<img width="60" height="60" src="upload/<?php echo $con['image']; ?>">
				                					</td>
				                					<td><?php echo $con['desk']; ?></td>
				                					<td>
				                						<a href="#" id="<?php echo $con['id'] ?>" class="btn btn-success open_modal">Edit</a>
				                						
				                						<a href="proContent.php?action=hapusNews&id=<?php echo $con['id']; ?>" title="" class="btn btn-danger">Delete</a>
				                					</td>	
				                				</tr>
				                		 	<?php endforeach ?>
					                	</tbody>
					                </table>
	                			<?php
	                		}
	                		else if ($_GET['content'] == "news") 
	                		{
	                			?>
	                				<form id="myForm" action="proContent.php?action=saveNews" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
	                					<label>Judul</label>
	                					<input type="text" class="form-control" name="judul">
	                					<label>Image</label>
	                					<input type="file" accept="image/*" name="file" class="form-control"/>
	                					 <img id="preview" src="" alt="" width="200px"/>
	                					<br>
	                					<label>Desk</label>
	                					<textarea class="form-control" cols="50" rows="6" name="desk"></textarea>

	                					<input type="submit" name="" value="Simpan" class="btn btn-success" style="margin-top: 8px">
	                				</form>
	                			<?php
	                		}
	                	 ?>
	                </div>
	            </div>
            </div>
      	</div>
	</div>
</div>

<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>