<?php
	include 'server.php';

	$name = $_POST['username'];
	$password = $_POST['password'];

	$queryadd = "INSERT INTO users (username, password) VALUES ('$name', '$password')";
	$resultadd = mysqli_query($con, $queryadd) or die('try');

	if ($resultadd) {
		echo "<script>alert('succéder!!'); window.location='../login.php';</script>";
	}
?>