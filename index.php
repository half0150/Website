<?php
$thispage = basename(__FILE__);
?>
<!DOCTYPE html>
<html>

<head>
    <title>SignUp</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <?php include("includes/nav.php");?>

    <div class="form action=">
        <p>Login</p>
        <form>
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <button>Login</button>
            <p class="message">Not registered? <a href="SignUp.php">Create an account</a></p>
        </form>
    </div>
</body>
