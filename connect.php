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

    mysqli_close($conn);
}