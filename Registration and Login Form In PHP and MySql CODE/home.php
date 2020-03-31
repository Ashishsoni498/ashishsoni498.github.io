<?php

session_start();

if(!isset($_SESSION['username']))
header('location:index.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Welcome <?php echo $_SESSION['username']; ?></h2>
		<a href="logout.php"> Logout </a>
	</div>
</body>
</html>