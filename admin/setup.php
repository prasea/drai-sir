<?php
include('connection.php');
$stmt="CREATE TABLE IF NOT EXISTS login(id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
role TINYINT(2) NOT NULL,
status TINYINT(2) NOT NULL,
UNIQUE(username),
UNIQUE(email)
)";
$qry=mysqli_query($conn, $stmt);
if($qry)
{
	echo "table created successfully";
}
else
{
	echo"error creating table";
}
//inserting the table default data
$stmt="INSERT INTO login(username, password, email, role, status) VALUES('khape','suwal','khapey@gmail.com', 1,1)";
$qry=mysqli_query($conn,$stmt) or die(mysqli_error());
if($qry)
{
	echo "data added successfully";
}
else
{
	echo"error adding data";
}

?>

