<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM emp");
?>

<div class="container">
<div class="row">
<div class="col-md-9">

<?php
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
	<a class="btn btn-xs btn-primry" href="update.php?id=<?php echo $index; ?>">Eidt</a>
	<a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $index; ?>">Delete</a>
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
