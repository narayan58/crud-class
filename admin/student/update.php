<?php
include("../../auth/auth_session.php");
?>
<?php
if (isset($_POST['update'])) {
	$name = $_POST['fullname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['mobile_number'];
	$dob = $_POST['dob'];
	$id = $_POST['user_id'];

	include("../../config/db_config.php");


	$update = mysqli_query($connection, "UPDATE students SET full_name='$name', email = '$email', address= '$address', phone = '$phone', dob = '$dob',updated_at = current_timestamp() WHERE id = $id");
	if ($update) {
		header('Location:index.php');
	}


}


?>