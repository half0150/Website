<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once 'con.php';
   
    $sql = "SELECT id, password_hash "
            . "FROM users "
            . "WHERE username = '$username'";
    $result = $dbCon->query($sql);
    $row = $result->fetch_object();
    $hashed_password = $row->password_hash;

    if (password_verify($password, $hashed_password)) {
        echo 1;
    }

    
}



