<?php
if(isset($_post['submit']))
{
	$username=$_post['username'];
	$password=$_post['password'];
	$email=$_post['email'];
	$role=$_post['role'];
	//making statement
	$stmt="INSERT INTO login(username, password, email, role, status) VALUES ('$username', '$password', '$email', '$role', 0)";
	//making connectionn
	include('connection.php');
	//making quary
	$qry=mysqli_query($conn, $stmt) or die(mysqli_error());
	if($qry){
		echo "user registered";
	}
	else{
		echo "not registered";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-compatible" content="IE=edge">
		<title>user registration</title>
</head>
<body>
<form method="post" action="" name="formRegister" enctype="multipart/form-data">
	<input type="text" name="username"
	placeholder="username"><br/>
	<input type="password" name="password"
	placeholder="password"><br>
	<input type="email" name="email"
	placeholder="Email"><br/>
	<input type="radio" name="role" value="1"> Admin
	<input type="radio" name="role" value="2" checked>
	user<br/>
	<input type="submit" name="submit"
	value="Register"><br/>
</body>
</html>