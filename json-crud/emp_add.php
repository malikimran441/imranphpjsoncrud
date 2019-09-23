<?php

include("connection.php");

$Name = $_POST['name'];
$DOB = $_post['dob'];
$Gender = $_POST['gender'];
$Department = $_POST['department'];
$Manager = $_POST['manager'];
$Salary = $_POST['salary'];
$Join_date = $_POST['join_date'];


$query =  mysqli_query($conn,"INSERT INTO `emp`(`Name`, `DOB`, `Gender`, `Department`, `Manager`, `Salary`, `Join_date`) 
VALUES ('$Name','$DOB','$Gender','$Department','$Manager','$Salary','$Join_date')");

if($query == true)
{
	echo $query;
//echo "insert data";
header("location:employee.php");
}
else
{
	echo $query;
header("location:emp.php");
}

?>

