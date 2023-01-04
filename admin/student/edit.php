<?php
include("../../auth/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Student Record</title>
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
<a href="../dashboard.php"> Dashboard</a><br>
<a href="index.php"> Back</a>


<?php

$id = $_GET['id'];
include("../../config/db_config.php");
$result = mysqli_query($connection, "SELECT * FROM students WHERE id = $id");

while($data = mysqli_fetch_array($result)){
	$name  = $data['full_name'];
	$email = $data['email'];
	$address = $data['address'];
	$dob = $data['dob'];
	$phone = $data['phone'];
	$id = $data['id'];
}

?>

<div class="container">
<h1>Edit Student</h1>
<form method="POST" action="update.php">
	<input type="hidden" name="user_id" value="<?php echo $id?>">
	<label>Full name</label><br>
	<input type="text" name="fullname" value="<?php echo $name?>" required placeholder="Please enter your name"><br>

	<label>Email</label><br>
	<input type="email" name="email" value="<?php echo $email?>" required placeholder="Please enter your email"><br>

	<label>Address</label><br>
	<input type="text" name="address" required value="<?php echo $address	?>" placeholder="Please enter your address"><br>

	<label>Mobile Number</label><br>
	<input type="number" name="mobile_number" value="<?php echo $phone?>" required placeholder="Please enter your phone"><br>

	<label>DOB</label><br>
	<input type="date" name="dob" value="<?php echo $dob ?>"><br><br>

	<input type="submit" name="update" value="UPDATE">
	</form>
</div>


</body>
</html>