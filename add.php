<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Record</title>
	<style type="text/css">
		.container{
			background-color: grey;
			padding: 10px;
		}

		input[type=submit]{
			background-color:#3636c3;
			border:none;
			padding:5px;
			cursor: pointer;
			color: white;
		}

		input[type=submit]:hover{
			background-color:blue;
		}
	</style>
</head>
<body>
<a href="index.php"> Back</a>

<div class="container">
<h1>Add Student</h1>
<form method="POST">
	<label>Full name</label><br>
	<input type="text" name="fullname" required placeholder="Please enter your name"><br>

	<label>Email</label><br>
	<input type="email" name="email" required placeholder="Please enter your email"><br>

	<label>Address</label><br>
	<input type="text" name="address" required placeholder="Please enter your address"><br>

	<label>Mobile Number</label><br>
	<input type="number" name="mobile_number" required placeholder="Please enter your phone"><br>

	<label>DOB</label><br>
	<input type="date" name="dob" ><br><br>

	<input type="submit" name="submit" value="SUBMIT">
	</form>
</div>

<?php
if (isset($_POST['submit'])) {
	$name = $_POST['fullname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['mobile_number'];
	$dob = $_POST['dob'];

	include('db_config.php');

	$insert = mysqli_query($connection, "INSERT INTO students(full_name, email, address, phone, dob, created_at) VALUES ('$name', '$email', '$address', '$phone', '$dob',current_timestamp())");
	if ($insert) {
		header('Location:index.php');
	}


}


?>


</body>
</html>