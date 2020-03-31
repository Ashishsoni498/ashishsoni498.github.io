<?php
	session_start();
	header('location: index.php');

	$con = mysqli_connect('localhost','root');

	if($con){
		echo "Connection Sucessfully Connected";
	}
	else{
		echo "Connection Connected Failed";
	}

	mysqli_select_db($con, 'sessionpractical');

	$name = $_POST['user'];
	$pass = $_POST['pass'];

	$query = "select * from signin where name = '$name' && password = '$pass' ";

	$result = mysqli_query($con, $query);

	$num = mysqli_num_rows($result);

	if($num == 1){
		echo "This is duplicate data";
	}
	else{
		$qy = "insert into signin(name , password) values ('$name' , '$pass')";
		mysqli_query($con, $qy);
	}
?>