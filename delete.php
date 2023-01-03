<?php
$idValue = $_GET['id'];
include('db_config.php');

$result = mysqli_query($connection, "DELETE FROM students WHERE id=$idValue");
if ($result) {
	header('Location:index.php');
}


?>