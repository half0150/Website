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
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <a href="LogOutSession.php">Log Out</a>
    </div>
    
    
    <div class="pictures">
    <<img src="Isbjorn_unge.jpg" alt="isbjornUnge" style="width:500px;height:400px;"/>
    </div>
</body>

</html>
