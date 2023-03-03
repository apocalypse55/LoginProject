<?php
session_start();
if (!isset($_SESSION["username"])) { 
    header("location:./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The One Piece</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,700&family=Merriweather:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <img href="./index.php" src="./images/One_Piece_Logo.svg.png" alt="One_Piece_Logo" height="100" width="300">
    <form action="logout.php" method="post">
    <button name="logout" class="logout">LogOut</button>
    </form>
    <p class="welcome">WELCOME TO THE ONE PIECE WORLD!</p>
    <video class="video"  controls autoplay loop>
        <source src="images/bgvideo.mp4" type="video/mp4">
    </video>
</body>
</html>