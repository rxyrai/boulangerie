<?php
	session_start();

	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "boulangerie";

	$con = mysqli_connect($server, $username, $password, $dbname);
	if(!$con){
		die('อ่อออออออออออออออออ');
	}
?>