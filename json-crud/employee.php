<?php
$getfile = file_get_contents('people.json');
$jsonfile = json_decode($getfile);
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="ilmu-detil.blogspot.com">
 <title>Tutorial CRUD  JSON DATA</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.php">
   JSON CRUD</a>
  </div>
  <div class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-left">
    <li class="clr1 active"><a href="index.php">Home</a></li>
    <li class="clr1 active"><a href="index.php">Employee</a></li>
   </ul>
  </div>
 </div>
</nav>
</br></br></br></br>
 <div class="container">
 <div class="jumbotron">
  <h3>Welcome to Employee Detail</h3>      
  <p>Create, Read, Update and Delete Data from JSON</p>      
 </div>
</div>   

</div>
<div class="container">
 <div class="btn-toolbar">
  
  <a class="btn btn-primary" href="emp.php"><i class="icon-plus"></i> Add new employee</a>
  <div class="btn-group"> </div>
 </div>
</div>

<br>
<br>
<div class="container">
 <div class ="row">
  <div class="col-md-9">
   <?php
   include("connection.php");
$result = mysqli_query($conn,"SELECT * FROM emp");
if (mysqli_num_rows($result) > 0) {
	?>
	<table class="table table-striped table-bordered table-hover">
	<tr>
	<th>Name</th>
	<th>DOB</th>
	<th>Gender</th>
	<th>Department</th>
	<th>Manager</th>
	<th>Salary</th>
	<th>Join_date</th>
	<th>Action</th>
	</tr>  
    <?php
while($row = mysqli_fetch_array($result)) {
?>
	<tr>
	<td><?php echo $row["Name"]; ?></td>
	<td><?php echo $row["DOB"]; ?></td>
	<td><?php echo $row["Gender"]; ?></td>
	<td><?php echo $row["Department"]; ?></td>
	<td><?php echo $row["Manager"]; ?></td>
	<td><?php echo $row["Salary"]; ?></td>
	<td><?php echo $row["Join_date"]; ?></td>
	<td>
	<a class="btn btn-xs btn-primry" href="emp_update.php?id=<?php echo $row['ID'] ?>">Edit</a>
	<a class="btn btn-xs btn-danger" href="emp_delete.php?id=<?php echo $row['ID'] ?>">Delete</a>
	</td>
	</tr>
	<?php
}
?>	
</table>
<?php
}
else{
	echo "No rsult found";
}
?> 
</body>
</html>
