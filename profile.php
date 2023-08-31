<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'userlog') or die("Connection Failed: " . mysqli_connect_error());

if (!isset($_SESSION['username'])) {
    header("Location: LogOn.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_profile'])) {
    $newEmail = $_POST['new_email'];
    $newPassword = $_POST['new_password'];
    $newPasswordAgain = $_POST['new_password_again'];
    $oldPassword = $_POST['old_password'];

    
    if ($newPassword !== $newPasswordAgain) {
        echo "New passwords do not match.";
    } else {
        
        $username = $_SESSION['username'];
        $sql = "SELECT password_hash, email FROM users WHERE username = '$username'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $oldPasswordHash = $row['password_hash'];

            
            if (password_verify($oldPassword, $oldPasswordHash)) {
              
                $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);

                
                $updateSql = "UPDATE users SET password_hash = '$newPasswordHash', email = '$newEmail' WHERE username = '$username'";
                if ($conn->query($updateSql) === TRUE) {
                    $_SESSION['email'] = $newEmail; 
                    echo '<script>
                alert("You have succesfully updated your password and email.");
                </script>';
                    
                } else {
                    echo "Error updating profile: " . $conn->error;
                }
            } else {
                echo "Incorrect old password.";
            }
        } else {
            echo "User not found.";
        }
    }
}
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
        <p>Your username: <?php echo $_SESSION['username']; ?></p>
        <p>Your email: <?php echo $_SESSION['email']; ?></p>
    </div>

    <div class="change">
        <p>Change your email and password:</p>
        <form method="post">
            <input type="email" name="new_email" placeholder="Enter your new email">
            <input type="password" name="new_password" placeholder="Enter your new password" required>
            <input type="password" name="new_password_again" placeholder="Enter your new password again" required>
            <input type="password" name="old_password" placeholder="Enter your old password" required>
            <button type="submit" name="update_profile">Submit</button>
        </form>
    </div>
</body>
</html>
