<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: LogOn.php"); // Redirect to login page if not logged in
    exit();
}

!isset($_SESSION['email']);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" type="text/css" href="profile.css">
    </head>
    <body>
        <?php include("includes/nav.php"); ?>

        <div class="title">
            <h1>This is your profile</h1>


            <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
            <p>Your email: <?php echo $_SESSION['email']; ?></p>
        </div>
    </body>
</html>
