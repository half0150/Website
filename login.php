<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once 'con.php';

    $sql = "SELECT id, password_hash FROM users WHERE username = ?";
    $stmt = $dbCon->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows === 1) {
        $row = $result->fetch_object();
        $hashed_password = $row->password_hash;

        if (password_verify($password, $hashed_password)) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: session.php");
            exit();
        } else {
            // Redirect with an error message
            header("Location: LogOn.php?error=invalid");
            exit();
        }
    } else {
        // Redirect with an error message
        header("Location: LogOn.php?error=notfound");
        exit();
    }
}

?>
