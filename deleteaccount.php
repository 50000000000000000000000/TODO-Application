<?php 
	include('index.html');
	include('database.php');

	if(loggedin()) {
		deleteaccount($_SESSION['username']);
	}
	header("location:login.php");
 ?>