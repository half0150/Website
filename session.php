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

    

<script>
    const logoutLink = document.querySelector('a[href="LogOutSession.php"]');
    if (logoutLink) {
        logoutLink.textContent = 'Logout';
    }
</script>

    
    
    <div class="pictures">
    <img src="Isbjorn_unge.jpg" alt="isbjornUnge" style="width:500px;height:400px;"/>
    </div>
</body>

</html>
