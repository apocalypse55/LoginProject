<?php
session_start();
if (isset($_SESSION["username"])){
    header("location:./dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Voyage</title>
    <link rel="stylesheet" type="text/css" href="text.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,700&family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" 
    href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
</head>
<body>
    <div>
    
    <div class="navbar">
    <span class="logo">
         <img href="./index.php" src="./images/One_Piece_Logo.svg.png" alt="One_Piece_Logo" height="100" width="300">
    </span>
    <span class="links">
                <a href="#" class="navbar-item">Login</a>
                <a href="#" class="navbar-item">Home</a>
                <a href="register.php" class="navbar-item">Register</a>
                <a href="#" class="navbar-item">Contact</a>
    </span>
</div>

   <div class="slogan"> 
    <h1>Welcome To The Great Pirate Era</h1>
    <br>
    <h3>-----------Join Us to Explore the Sea-----------</h3>

</div>
<div class="container">
<div class="content">
    <form action="login.php" method="post">
        <div class="login-field">
        <div class="email">
            <i class="fa fa-user icon"></i>
                
                
                <input type="text" name="email" id="input-field" required placeholder="Email">
            
           </div>
        <div class="password">
            <i class="fa fa-lock icon"></i>

            <input type="password" name="password" id="input-field" required placeholder="Password">
        </div>
  
        <div class="login-button-wrapper">
            <label class="switch">
                <input type="checkbox">
                
                <span class="slider round"></span>
              </label>
              <span class="list-login">Remember Me</span>
            <span>
            <button type="submit" class="login-button">Login</button>
        </div>
    </div>
    <div>
        <button  class="registration">
            <a href="register.php" class="registration">Register Here</a></button>
    </div>   
       
        <div class="list-login-bottom">
            <span >
                <a href="#" class="password-reset">Forgot Password?</a>
                
            </span>
            <span >
                <a href="#" class="help-section">Need Help?</a>
            </span>
        </div>
        


    </form>
</div>
</div>
<span class="footer">
    
<a href="#" class="footer-items">About Us</a>
<a href="#" class="footer-items">Privacy Policy</a>
<a href="#" class="footer-items">Terms of Use</a>
</span>


 <span class="copyright">© 2023 Key. All rights reserved | Designed by Shardool Tripathi
        </span>
    


    
</body>
</html>