<?php 
	include ('../db/connection.php');
	$tentangKami = $mysqli->query("select * from tentangkami");
	$val = mysqli_fetch_array($tentangKami);
 ?>
<div class="row">
	<div class="col-lg-10">
		<div class="card shadow mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              	<h6 class="m-0 font-weight-bold text-primary">Tentag Kami</h6>
            </div>
            <div class="card-body">
            	<div class="chart-area">
            		<form action="proContent.php?action=tentangKami" method="POST" accept-charset="utf-8">
            			<textarea name="tentangKami" class="form-control" rows="10" cols="120"><?php echo $val['tentangKami'] ?></textarea>

            			<input type="submit" name="" class="btn btn-success" value="Simpan" style="float: right;margin-top: 5px">			
            		</form>		
            	</div>
            </div>
		</div>
	</div>
</div>