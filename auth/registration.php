<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
        <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>
<?php
    include('../config/db_config.php');
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $finalPassword = md5($password);
        $created_at = date("Y-m-d H:i:s");
        $result   = mysqli_query($connection, "INSERT INTO `users` (username, password, email, created_at) VALUES ('$username', '$finalPassword', '$email', '$created_at')");
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='../auth/login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='../auth/registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />

        <input type="text" class="login-input" name="email" placeholder="Email Adress">

        <input type="password" class="login-input" name="password" placeholder="Password">

        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="../auth/login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>