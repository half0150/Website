<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: LogOn.php"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>session</title>
    <link rel="stylesheet" type="text/css" href="session.css">
</head>

<body>
    <?php include("includes/nav.php"); ?>

    <div class="profile">
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <a href="LogOutSession.php">Log Out</a>
    </div>
</body>

</html>
