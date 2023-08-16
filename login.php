<?php
session_start();
require('connection.php');

if (isset($_POST['login'])) {
    $usernameOrEmail = $_POST['username'];
    $password = $_POST['password'];
    $query  = "SELECT * FROM users WHERE email = '$usernameOrEmail' AND password = '$password'";
    
        $result = $con->query($query);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['id'];
            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['NAME'] = $row['name'];
            $_SESSION['EMAIL'] = $row['email'];
        echo "login successful!";
        header('location:dashboard1.php');
    } else {
        echo "error occured!";
    }
}
?>