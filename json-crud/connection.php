<?php

$servername= "localhost";
$username= "root";
$password="root";
$dbname= "Employee";
$conn= mysqli_connect ($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
}
else {
	echo "no";}

?>
