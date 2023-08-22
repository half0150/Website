<?php

$thispage = basename(__FILE__);

echo '<!DOCTYPE html>
<html>

<head>
    <title>AboutPage</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <nav>
        <ul class="navbar">
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="index.php">Login</a></li>
            <li><a href="About.php" class="active">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
        
    <div class="form">
        <p>Login</p>
        <form>
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <button>Login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</body>

</html>';
