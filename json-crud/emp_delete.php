<?php

include("connection.php");
$id= $_GET['ID'];
echo $id;
$query = mysqli_query($conn,"DELETE FROM `emp` WHERE ID='$id' ");
header('Location:employee.php');

?>
