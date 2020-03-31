<!DOCTYPE html>
<html>
<head>
	<title>MY SQL DataBase Connectivity</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale-1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h3>Login Form</h3>
				<form action="validation.php" method="POST">
					<div class="form-group mb-3">
						<label>Username</label>
						<input type="text" class="form-control" placeholder="Username" name="user">
					</div>

					<div class="form-group mb-3">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Password" name="pass">
					</div>

					<button type="submit" class="btn btn-success">Login</button>
				</form>
			</div>

			<div class="col-lg-6">
				<h3>SignUp Form</h3>
				<form action="registration.php" method="POST">
					<div class="form-group mb-3">
						<label>Username</label>
						<input type="text" class="form-control" placeholder="Username" name="user">
					</div>

					<div class="form-group mb-3">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Password" name="pass">
					</div>

					<button type="submit" class="btn btn-success">SignUp</button>
				</form>
			</div>
		</div>
	</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>