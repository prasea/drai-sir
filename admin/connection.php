<?php

//setting the variables for connection
$host="localhost";
$db="prasea";
$pass="";
$user="root";
//making connection
$conn=mysqli_connect($host, $user, $pass, $db) or die ("Database connecton error!");
?>