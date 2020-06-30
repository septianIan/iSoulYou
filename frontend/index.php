<?php 
  include '../db/connection.php';
  $content1 = $mysqli->query("select * from aboutcontent1");
  $val1 = mysqli_fetch_array($content1);

  $content2 = $mysqli->query("select * from aboutcontent2");
  $val2 = mysqli_fetch_array($content2);

  $content3 = $mysqli->query("select * from aboutcontent3");
  $val3 = mysqli_fetch_array($content3);

  $content4 = $mysqli->query("select * from aboutcontent4");
  $val4 = mysqli_fetch_array($content4);

  $content5 = $mysqli->query("select * from aboutcontent5");
  $val5 = mysqli_fetch_array($content5);

  $content6 = $mysqli->query("select * from aboutcontent6");
  $val6 = mysqli_fetch_array($content6);

  $contactSupport = $mysqli->query("select * from aboutconntactsupp");
  $conntactSupp = mysqli_fetch_array($contactSupport);

  $tentangKami = $mysqli->query("select * from tentangKami");
  $val = mysqli_fetch_array($tentangKami);

  /*
    keteranagn
  */
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ISOULYOU - Aplikasi Lapor dan Konsultasi penyakit gangguan jiwa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	 <?php 
      include('menuNavbar/menu.php');
    ?>

    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bghome.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4">Mudah<span>Untuk Konsultasi</span><span>Dan Melaporkan</span></h1>
	            <p style="font-size: 18px;">Jangan sepelekan penyakit gangguan jiwa. hindari sedini mungkin dengan konsultasi dan laporkan untuk segera ditindaklanjuti.</p>
	            <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4">
	            	<div class="icon d-flex align-items-center justify-content-center">
	            		<span class="ion-ios-play"></span>
	            	</div>
	            	<div class="heading-title ml-5">
		            	<span>Lebih dekat dengan kami.</span>
	            	</div>
	            </a>
            </div>
          </div>
          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
          	<form action="../app/proContent.php?action=laporan" method="POST" class="request-form ftco-animate" enctype="multipart/form-data" autocomplete="off">
          		<h2>Ayo Lapor</h2>
	    				<div class="form-group">
	    					<label for="" class="label">Nama</label>
	    					<input style="font-size: 15px;" type="text" name="pelapor" onkeyup="this.value = this.value.toUpperCase()" class="form-control" placeholder="Nama Pelapor">
	    				</div>
              <div class="form-group">
                <label for="" class="label">No Telp</label>
                <input style="font-size: 15px;" type="number" name="noTelp" class="form-control" placeholder="Nomor Pelapor Yang Dapat Di Hubungi">
              </div>
	    				<div class="form-group">
	    					<label for="" class="label">Alamat yang dilaporkan</label>
	    					<input style="font-size: 15px;" type="text" name="alamat" class="form-control" placeholder="Alamat yang dilaporkan">
	    				</div>
              <div class="form-group">
                <label for="" class="label">Foto</label>
                <input type="file" name="file" id="inputFile" />
                <br><br>
                <img id="image_upload_preview" style="width:200px;height:100px;" src="images/download.jpg" alt="your image" />
              </div>
	            <div class="form-group">
	              <input type="submit" value="LAPOR" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
          </div>
        </div>
      </div>
    </div>

    <br>
<!-- About -->

    <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Pelayanan Kami</span>
            <h2 class="mb-2">Pelayanan Kami</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-4 align-items-center">
	              	<div class="icon"><span class="flaticon-customer-support"></span></div>
	                <h3 class="heading mb-0 pl-4">24/7 Contact Support</h3>
                </div>
                <p><?php echo $conntactSupp['conntactsupport'] ?></p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-4 align-items-center">
	              	<div class="icon"><span class="flaticon-route"></span></div>
	                <h3 class="heading mb-0 pl-4">Dapat Menjangkau Beberapa Wilayah</h3>
                </div>
                <p><?php echo $val1['dapatMenjangkauWilayah']; ?></p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-4 align-items-center">
	              	<div class="icon"><span class="flaticon-online-booking"></span></div>
	                <h3 class="heading mb-0 pl-4">Pelayanan Yang Baik</h3>
                </div>
                <p><?php echo $val2['pelayananyangbaik'] ?></p>
              </div>
            </div>      
          </div>
    </section>

    <!-- Contact -->

    <section class="ftco-section services-section img" style="background-image: url(images/bgabout.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Alur Kerja</span>
            <h2 class="mb-3">Bagaimana Kami Berkerja</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                <h3>Isi Data Laporan</h3>
                <p><?php echo $val3['isiDataLaporan'] ?>.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                <h3>Memilih Opsi</h3>
                <p><?php echo $val4['memilihOpsi'] ?></p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                <h3>Berangkat</h3>
                <p><?php echo $val5['berangkat'] ?></p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                <h3>Pelayanan Terbaik</h3>
                <p><?php echo $val6['pelayananTerbaik']; ?></p>
              </div>
            </div>      
          </div>
    		</div>
    	</div>
    </section>

<br>
<br>

		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/bg1.jpg);">
					</div>
					<div class="col-md-6 wrap-about py-md-5 ftco-animate">
	          <div class="heading-section mb-5 pl-md-5">
	          	<span class="subheading">Tentang Kami</span>
	            <h2 class="mb-4">Pelayanan Yang Terbaik Untuk Indonesia Sehat dari Gangguan Jiwa</h2>

	            <p><?php echo $val['tentangKami'] ?></p>
	          </div>
					</div>
				</div>
			</div>
		</section>
    <br><br>
<!-- 
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>		 -->
 <?php 
        include('menuNavbar/endbar.php');
     ?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/jquery.fotopreview.js"></script>
    
  </body>
</html>