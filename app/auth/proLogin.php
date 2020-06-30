<?php 
session_start();
include '../../db/connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sel = mysqli_query($connection, "select * from loginuser where username='$username' and password='$password'");
$cek = mysqli_num_rows($sel);

if ($cek > 0) 
{
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['login'] = "true";
	header('location:../index.php');
}
else
{	
	echo "Login Gagal";
	header('Refresh:2;url=signIn.php');
}