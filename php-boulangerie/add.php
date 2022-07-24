<?php

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
	<title>boulangerie | add menu</title>
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
			<div class="card my-3">
				<div class="card-title text-center mt-2">
					Add menu
				</div>
				<div class="card-body">
					<form action="server/add_db.php" method="POST">
						<label class="mt-1">menu name</label>
						<input type="text" name="name" placeholder="enter menu name" class="form-control mt-1">
						<label class="mt-1">price</label>
						<input type="text" name="price" placeholder="enter menu price" class="form-control mt-1">
						<button type="submit" class="btn btn-success w-100 mt-2"> submit </button>
					</form>
				</div>
				
			</div>
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