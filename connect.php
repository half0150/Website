<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Sign_Up'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'userlog') or die("Connection Failed: " . mysqli_connect_error());

    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Hashing the password 
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users` (`username`, `email`, `password_hash`) VALUES ('$username', '$email', '$password_hash')";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo '<script>
                alert("Your account has been created");
                </script>';
            echo '<script>
                window.location="index.php";
                </script>';
        } else {
            echo '<script>
                alert("There was an error when trying to create your account");
                </script>';
        }
    }

    
    if (isset($_POST['new_email']) && isset($_POST['new_password']) && isset($_POST['new_password_again']) && isset($_POST['old_password'])) {
        $newEmail = $_POST['new_email'];
        $newPassword = $_POST['new_password'];
        $newPasswordAgain = $_POST['new_password_again'];
        $oldPassword = $_POST['old_password'];

        // Verify old password
        $username = $_POST['username']; 
        $verifyPasswordQuery = "SELECT password_hash FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $verifyPasswordQuery);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashedOldPassword = $row['password_hash'];
            
            if (password_verify($oldPassword, $hashedOldPassword)) {
                
                $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);
                $updateQuery = "UPDATE users SET email = '$newEmail', password_hash = '$newPasswordHash' WHERE username = '$username'";
                $updateResult = mysqli_query($conn, $updateQuery);
                
                if ($updateResult) {
                    echo '<script>
                        alert("Password and email updated successfully");
                    </script>';
                } else {
                    echo '<script>
                        alert("Error updating password and email");
                    </script>';
                }
            } else {
                echo '<script>
                    alert("Incorrect old password");
                </script>';
            }
        }
    }

    mysqli_close($conn);
}
?>
