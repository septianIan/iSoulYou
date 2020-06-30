<?php 
	include '../db/connection.php';
	session_start();
	if(isset($_SESSION['login']) && $_SESSION['login']==true)
	{
		$user = $_SESSION['username'];
	}
	else
	{
		echo "Anda Harus login untuk mengoplarsikan sistem ini";
		header('Refresh:2;url=auth/signIn.php');
		exit();
	}
	?>
		<!DOCTYPE html>
<html>
<head>
	<?php 
		include('layouts/head.php');
	?>
</head>
<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">
	    <?php 
	    	include('layouts/sidebar.php');
	     ?>
	    <!-- Content Wrapper -->
	    <div id="content-wrapper" class="d-flex flex-column">
	      	<!-- Main Content -->
	      	<div id="content">
	          <?php 
	          		include('layouts/navbar.php');
	           ?>
	        <!-- Begin Page Content -->
		        <div class="container-fluid">
		            <?php
						if(isset($_GET['content']))
						{
							if($_GET['content']=="about")
								include "content/about.php";
							else if($_GET['content']=="contactUs")
								include("content/contactUs.php");
							else if ($_GET['content'] == "news") 
								include("content/news.php");
							else if ($_GET['content'] == "listReport") 
								include("content/listReport.php");
							else if($_GET['content'] == "listPelaporan")
								include("content/listPelaporan.php");
							else if ($_GET['content'] == "listSemuaLaporan") 
								include("content/listSemuaLaporan.php");
							else if($_GET['content'] == "tentangKami")
								include("content/tentangKami.php");
							else
								include "content/home.php";
						}
						else
						{
							include "content/home.php";
						}
					?>
		        </div>
	        <!-- /.container-fluid -->
	      	</div>
	      <!-- End of Main Content -->
	      <?php 
	      		include('layouts/footer.php');
	       ?>
	    </div>
	    <!-- End of Content Wrapper -->
	</div>
	<!-- Scroll to Top Button-->

	  <!-- Logout Modal-->
	  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
	          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">×</span>
	          </button>
	        </div>
	        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
	        <div class="modal-footer">
	          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
	          <a class="btn btn-primary" href="auth/logout.php">Logout</a>
	        </div>
	      </div>
	    </div>
	  </div>

	
	<a class="scroll-to-top rounded" href="#page-top">
	    <i class="fas fa-angle-up"></i>
	</a>
	<?php 
		include('layouts/js.php');
	?>
</body>
</html>

	<?php
 ?>