<?php 
    include ('../db/connection.php');
    $result = $mysqli->query("select * from aboutconntactsupp");
    $aboutSatu = $mysqli->query("select * from aboutcontent1");
    $aboutDua = $mysqli->query("select * from aboutcontent2");
    
    $aboutDua = $mysqli->query("select * from aboutcontent2");
    $aboutTiga = $mysqli->query("select * from aboutcontent3");
    $aboutEmpat = $mysqli->query("select * from aboutcontent4");
    $aboutLima = $mysqli->query("select * from aboutcontent5");
    $aboutEnama = $mysqli->query("select * from aboutcontent6");
 ?>
<font style="font-size: 15px;font-weight: bold;">LAYANAN KAMI</font>
<hr>
<div class="row">
	<div class="col-lg-6">
		<div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              	<h6 class="m-0 font-weight-bold text-primary">Conntact Support</h6>
            </div>
        	<!-- Card Body -->
            <div class="card-body">
	            <div class="chart-area">
	                <form action="proContent.php?action=simpanContact" method="POST">
                		 <?php foreach ($result as $key): ?>
                            <textarea name="kontakSupport" class="form-control" cols="57" rows="10"><?php echo $key['conntactsupport'] ?></textarea>
                         <?php endforeach ?>
                		<input type="submit" style="margin-top: 5px" value="Submit" class="btn btn-success">
                	</form>
	            </div>
            </div>
      	</div>
	</div>
	<div class="col-lg-6">
		<div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              	<h6 class="m-0 font-weight-bold text-primary">Dapat Menjangkau Beberapa Wilayah</h6>
            </div>
        	<!-- Card Body -->
            <div class="card-body">
	            <div class="chart-area">
	                <form action="proContent.php?action=DapatMenjangkauWilayah" method="POST">
                		 <?php foreach ($aboutSatu as $key): ?>
                            <textarea name="DapatMenjangkauWilayah" class="form-control" cols="57" rows="10"><?php echo $key['dapatMenjangkauWilayah'] ?></textarea>
                         <?php endforeach ?>
                		<input type="submit" style="margin-top: 5px" name="simpan" value="Submit" class="btn btn-success">
                	</form>
	            </div>
            </div>
      	</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" >
              	<h6 class="m-0 font-weight-bold text-primary">Pelayanan Yang Baik</h6>
            </div>
        	<!-- Card Body -->
            <div class="card-body" style="height: 200px">
	            <div class="chart-area">
	                <form action="proContent.php?action=pelayananYangBaik" method="POST">
                		<?php foreach($aboutDua as $key): ?>
                            <textarea class="form-control" name="pelayananYangBaik" cols="120" rows="5"><?php echo $key['pelayananyangbaik'] ?></textarea>
                        <?php endforeach ?>
                		<input type="submit" style="margin-top: 5px" name="simpan" value="Submit" class="btn btn-success">
                	</form>
	            </div>
            </div>
      	</div>
	</div>
</div>
<!-- ALUR KERJA -->
<br>
<font style="font-size: 15px;font-weight: bold;">ALUR KERJA</font>
<hr>
<div class="row">
	<div class="col-lg-6">
		<div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between " style="background: gray;color: white">
              	<h6 class="m-0 font-weight-bold">Isi Data Laporan</h6>
            </div>
        	<!-- Card Body -->
            <div class="card-body">
	            <div class="chart-area">
	                <form action="proContent.php?action=isiDataLaporan" method="POST">
                		<?php foreach ($aboutTiga as $key):?>
                            <textarea class="form-control" name="isiDataLaporan" cols="57" rows="10"><?php echo $key['isiDataLaporan'] ?></textarea>
                        <?php endforeach ?>
                		<input type="submit" style="margin-top: 5px" name="simpan" value="Submit" class="btn btn-success">
                	</form>
	            </div>
            </div>
      	</div>
	</div>
	<div class="col-lg-6">
		<div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background: gray;color: white">
              	<h6 class="m-0 font-weight-bold">Memilih Opsi</h6>
            </div>
        	<!-- Card Body -->
            <div class="card-body">
	            <div class="chart-area">
	                <form action="proContent.php?action=memilihOpsi" method="POST">
                        <?php foreach ($aboutEmpat as $key):?>
                            <textarea class="form-control" name="memilihOpsi" cols="57" rows="10"><?php echo $key['memilihOpsi'] ?></textarea>
                        <?php endforeach ?>
                        <input type="submit" name="simpan"  style="margin-top: 5px" value="Submit" class="btn btn-success">
                    </form>
	            </div>
            </div>
      	</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background: gray;color: white">
              	<h6 class="m-0 font-weight-bold">Berangkat</h6>
            </div>
        	<!-- Card Body -->
            <div class="card-body" style="height: 410px">
	            <div class="chart-area">
	                <form action="proContent.php?action=berangkat" method="POST">
                        <?php foreach ($aboutLima as $key):?>
                            <textarea class="form-control" name="berangkat" cols="57" rows="10"><?php echo $key['berangkat'] ?></textarea>
                        <?php endforeach ?>
                        <input type="submit" name="simpan" value="Submit" style="margin-top: 5px" class="btn btn-success">
                    </form>
	            </div>
            </div>
      	</div>
	</div>
	<div class="col-lg-6">
		<div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background: gray;color: white">
              	<h6 class="m-0 font-weight-bold">Pelayanan Terbaik</h6>
            </div>
        	<!-- Card Body -->
            <div class="card-body" style="height: 410px">
	            <div class="chart-area">
	                <form action="proContent.php?action=pelayananTerbaik" method="POST">
                        <?php foreach ($aboutEnama as $key):?>
                            <textarea class="form-control" name="pelayananTerbaik" cols="57" rows="10"><?php echo $key['pelayananTerbaik'] ?></textarea>
                        <?php endforeach ?>
                        <input type="submit" name="simpan" value="Submit" style="margin-top: 5px" class="btn btn-success">
                    </form>
	            </div>
            </div>
      	</div>
	</div>
</div>