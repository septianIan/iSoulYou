<?php 
	session_start();
	session_destroy();
	echo "Log out";
	header ('Refresh:2;url=signIn.php');
 ?>