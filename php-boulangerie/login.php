<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		boulangerie | sign in
	</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6">
				<div class="card my-3">
					<h5 class="card-header text-center">sign in</h5>
					<div class="card-body">
						<form class="form" action="server/login_db.php" method="POST"> 
							<label class="my-1"> username </label>
							<input type="text" name="username" placeholder="enter username" required class="form-control my-1">
							<label class="my-1"> password </label>
							<input type="password" name="password" placeholder="enter password" required class="form-control my-1">
							<p class="text-muted my-1"> new user? <a href="signup.php"> create an account </a></p>
							<button type="submit" class="btn btn-success w-100 mt-2">
								sign in
							</button>
						</form>
					</div>
					
				</div>
			</div>
			<div class="col-md-3">
				
			</div>
			
		</div>
		
	</div>
</body>
</html>