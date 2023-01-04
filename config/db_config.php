<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "db_class_crud";

$connection = mysqli_connect($servername, $username, $password, $db);

if (!$connection) {
	die("Connection Failed ".mysqli_connect_error());
}else{
	//echo "Connect successfully!";
}



?>