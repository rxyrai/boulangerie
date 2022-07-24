<?php
	include 'server.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$querylog = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
	$resultlog = mysqli_query($con, $querylog);

	while ($row = $resultlog->fetch_assoc()) {
		$_SESSION['username'] = $row['username'];
	}

	if (mysqli_num_rows($resultlog)) {
		header('location: ../index.php');
	} else {
		echo("<script>alert('username or password incorrect'); window.location = '../login.php';</script>");
	}
	
?>