<?php
include("../auth/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="slider/index.php">Sliders</a></p><br>
        <p><a href="student/index.php">Students</a></p><br>
        <p><a href="../auth/logout.php">Logout</a></p>
    </div>
</body>
</html>