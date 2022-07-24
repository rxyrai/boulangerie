<?php
	include 'server/server.php';

	$querycall = "SELECT id, name, price FROM menu";
	$resultcall = mysqli_query($con, $querycall);

	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];

		$querydel = "DELETE FROM menu WHERE id = $id";
		$resultdel = mysqli_query($con, $querydel) or die('try');

		if ($resultdel) {
		 	header('location: menu.php');
		}
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		echo "<script>alert('au revoir bonne journée'); window.location = 'login.php'</script>";
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>boulangerie | menu</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand">boulangerie</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add.php">Add menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Menu</a>
        </li>
      </ul>
      <div class="d-flex">
        <a class="btn btn-outline-danger" href="index.php?logout='0'">sign out</a>
      </div>
    </div>
  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
			<div class="text-center mt-3">
				Menu
			</div>
			<table class="table table-hover">
				<thead>
					<th scope="col"> Name </th>
					<th scope="col"> Price </th>
					<th scope="col"> Edit </th>
					<th scope="col"> Delete </th>
				</thead>
				<?php while ($row = $resultcall->fetch_assoc()) { ?>
				<tbody>
					<tr>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['price'];?></td>
						<td class="align-center">
								<a href="menu-edit.php?id=<?php echo $row['id']?>" class="btn btn-outline-warning">edit</a>
						</td>
						<td class="align-center">
								<a href="menu.php?delete=<?php echo $row['id']?>" class="btn btn-outline-danger">delete</a>
						</td>
					</tr>
				</tbody>
				<?php } ?>
			</table>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
</div>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.esm.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>