<?php

	include 'server.php';

	if (isset($_POST['edit-menu'])) {
		$id = mysqli_real_escape_string($con, $_POST['menu_id']);

		$name = mysqli_real_escape_string($con, $_POST['name']);
		$price = mysqli_real_escape_string($con, $_POST['price']);

		$queryupdate = "UPDATE menu SET name = '$name', price = '$price' WHERE id = $id";
		$resultupdate = mysqli_query($con, $queryupdate) or die('try');

		if ($resultupdate) {
			header('location: ../menu.php');
		}
	}

?>