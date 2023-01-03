<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Record</title>
</head>
<body>
<a href="add.php"> Add Student</a>


<h1>Student Table</h1>
<table border="1">
	<thead>
		<tr>
			<th>S.N.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>DOB</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		include('db_config.php');
		$listData = mysqli_query($connection, "SELECT * FROM students ORDER BY id DESC");
		$i = 1;
		while($value = mysqli_fetch_array($listData)){
		echo "<tr>";
		echo "<td>".$i++."</td>";
		echo "<td>".$value['full_name']."</td>";
		echo "<td>".$value['email']."</td>";
		echo "<td>".$value['phone']."</td>";
		echo "<td>".$value['dob']."</td>";
		echo "<td>".$value['address']."</td>";
		echo "<td><a href=''>Edit</a> || <a href='delete.php?id=$value[id]'>Delete</a></td>";
		echo "</tr>";
		}
		?>
		
	</tbody>
</table>

</body>
</html>