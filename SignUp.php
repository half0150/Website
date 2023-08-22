<!DOCTYPE html>
<html>

<head>
    <title>SignUpPage</title>
    <link rel="stylesheet" type="text/css" href="SignUp.css">
</head>

<body>
    <nav>
        <ul class="navbar">
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="index.php" class="active">Login</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="form">
        <p>SignUp</p>
        <form method="post" action="connect.php">
            <input type="text" name="username" placeholder="Enter a username">
            <input type="email" name="email" placeholder="Enter your email">
            <input type="password" name="password" placeholder="Enter a password">
            <button type="submit" name="Sign_Up">Sign Up</button>
        </form>
    </div>
</body>

</html>