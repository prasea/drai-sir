<?php
session_start();
if(isset($_POST['login']))
{
	$uname=$_POST['name'];
	$upass=md5($_POST['password']);
	//making statement
	$stm="SELECT * FROM users WHERE username='$uname' AND password='$upass'";
	//making connection
	include('connection.php');
	//making query
	$qr=mysqli_query($conn, $stm);
	//counting the records
	$rec=mysqli_num_rows($qr);
	//if success got to dashboard or stay in this form
	if($rec==1)
	{
		$_SESSION['sid']=md5(rand(1,9999));
		$_SESSION['username']=$uname;//for welcoming user
		$_SESSION['logintime']=time();
		header('Location: dashboard.php');
	}
	else
	{
		echo "Unable to login";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="" name="UserLogin" enctype="multipart/form-data">
		<fieldset>
			<legend>User Login</legend>
			<input type="text" name="name" placeholder="Username"><br>
			<input type="password" name="password" placeholder="password"><br/>
			<input type="submit" name="login" value="Login">

		</fieldset>
	</form>

</body>
</html>								