<?php
	 $host="localhost";
	 $user="root";
	 $pass="";
	 $database="lomba";
	 $mysqli = new mysqli($host,$user,$pass,$database);
	 $connection = mysqli_connect("localhost","root","","lomba");
	 if (mysqli_connect_errno()) 
	 {
	   trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); 
	 }
?>