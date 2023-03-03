<?php
$mysqli = require __DIR__ . "/connection.php";
if(isset($_POST['email'], $_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * from users where email='$email'";
    $result = $mysqli->query($sql);
    $users = $result->fetch_assoc();
    if (isset($users)){
        
        if(password_verify($password,  $users['password'])){
        
        session_start();
        session_regenerate_id();
        $_SESSION["username"]=$users["username"];
        $_SESSION["user_id"]=$users["id"];
        header("location:./dashboard.php?success=login successfully");
        }
        else {
            header("location:./index.php?error=Incorrect Password");
        }
    } else{
        header("location:./register.php");
    }
}
?>