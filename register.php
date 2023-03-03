<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link href="register.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,700&family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" >
  </head>
  <body>
	<div>
    
		<div class="navbar">
		<span class="logo">
			 <img href="index.php" src="./images/One_Piece_Logo.svg.png" alt="One_Piece_Logo" height="100" width="300">
		</span>
		<span class="links">
					<a href="index.php "class="navbar-item">Login</a>
					<a href="#" class="navbar-item">Home</a>
					<a href="register.php" class="navbar-item">Register</a>
					<a href="#" class="navbar-item">Contact</a>
		</span>
	</div>
	
	   <div class="slogan"> 
		<h1>Want To Explore The Sea?</h1>
		<br>
		<h3>-----------Register Here-----------</h3>
	
	</div>
    
  	<div class="container">
      <form id="form" action="form.php" method="post" >
        
    		<div class="box">
          <label for="firstName" class="fl fontLabel"> Full Name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input id="fullName" type="text" name="fullName" required placeholder="Full Name"
              class="textBox" >
    			</div>
    			<div class="clr"></div>
    		</div>
    	
    		<div class="box">
          <label for="secondName" class="fl fontLabel"> Username: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input id="username" type="text" required name="username"
              placeholder="Username" class="textBox">
    			</div>
    			<div class="clr"></div> 
    		</div>
    		
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input id="email" type="email" required name="email" placeholder="Email Id" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    	
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password: </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input id="password" type="Password" required name="password" placeholder="Password" class="textBox">
    			</div>

				
    			<div class="clr"></div>
    		</div>
			<div class="box">
				<label for="password" class="fl fontLabel">Confirm: </label>
					  <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
					  <div class="fr">
							  <input id="cpassword" type="Password" required name="password" placeholder=" Retype Password" class="textBox">
					  </div>
	  
					  
					  <div class="clr"></div>
				  </div>
    
    		<div class="box radio">
          <label for="gender" class="fl fontLabel"> Gender: </label>
    				<input type="radio" name="gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="gender" value="Female" required> Female
    		</div>
    	
    		
    		<div class="box" style="background: transparent">
    				<input onClick="validatePassword()" type="Submit" name="Submit" class="submit" value="SUBMIT">
    		</div>
    		
      </form>
  </div>
  
  <span class="footer">
    
	<a href="#" class="footer-items">About Us</a>
	<a href="#" class="footer-items">Privacy Policy</a>
	<a href="#" class="footer-items">Terms of Use</a>
	</span>
	
	
	 <span class="copyright">© 2023 Key. All rights reserved | Designed by Shardool Tripathi
			</span>
		
  </body>
   
  <script>
	
	function validatePassword(){
	  var password = document.getElementById("password");
	  var confirm_password = document.getElementById("cpassword");
	  var minNumberofChars = 8;
      var maxNumberofChars = 16;
	  var re = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
	  if(password.value.length < minNumberofChars || password.value.length > maxNumberofChars){
		password.setCustomValidity("Passwords should be between 8 to 16 characters long.");
	  } else if(!re.test(password.value)){
		password.setCustomValidity("Passwords should contain atleast one number and one special character.");
	  }else if(password.value !== confirm_password.value) {
		confirm_password.setCustomValidity("Passwords don't match.");
	  }
	}
	</script>
</html>
