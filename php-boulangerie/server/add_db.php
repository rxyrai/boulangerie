<?php
	include 'server.php';

	$name = $_POST['name'];
	$price = $_POST['price'];

	$queryadd = "INSERT INTO menu (name, price) VALUES ('$name', '$price')";
	$resultadd = mysqli_query($con, $queryadd) or die('try');

	if ($resultadd) {
		// echo "<script>alert('succéder!!')</script>";
		header('location: ../menu.php');
	}
?>