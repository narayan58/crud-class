<?php

if (isset($_POST['postSubmit'])) {
  /*$nameErr = $emailErr = $addressErr = $phoneErr = $messageErr = "";
  $name = $email = $address = $phone = $message = "";

      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = $_POST["name"];
      }

      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = $_POST["email"];
      }

      if (empty($_POST["address"])) {
        $addressErr = "Address is required";
      } else {
        $address = $_POST["address"];
      }


      if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
      } else {
        $phone = $_POST["phone"];
      }


      if (empty($_POST["message"])) {
        $messageErr = "Message is required";
      } else {
        $message = $_POST["message"];
      }

    if (empty($nameErr) && empty($emailErr)) {*/

      $name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];

      include("config/db_config.php");


      $insert = mysqli_query($connection, "INSERT INTO contacts(message, name, email, address, phone, created_at) VALUES ('$message', '$name', '$email', '$address', '$phone',current_timestamp())");
      if ($insert) {
        header('Location:http://localhost/crud-class/');
      }
    }
/*}
*/

?>