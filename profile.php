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

            
            <p>Your current username: <?php echo $_SESSION['username']; ?></p>
            <p>Your current email: <?php echo $_SESSION['email']; ?></p>
            
            </div>
        
        <div class="change">
        <p>Change your email or password:</p>
        
        <form method="post">
            <input placeholder=" enter your new email"/>   
            <input placeholder=" enter your new password"/>
            <input placeholder="enter your old password"/>
            
            
        </form>
        <button>Submit</button>
        
        </div>
        
    </body>
</html>
