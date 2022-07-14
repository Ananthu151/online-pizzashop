<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="signup.css">
<head>
	<title></title>
</head>
<body>
<div class="container" id="container">	
	<div class="form-container sign-up-container">
		<form action="process_signup.php" method="POST">
			<h1>Create Account</h1>
			<span>use your Phone number for registration</span>
			<br>
			<input type="text" placeholder="Username" required name="username" autocomplete="off">
			<input type="text" placeholder="Full Name" required name="cname" autocomplete="off">
			<input type="Number" placeholder="Phone Number" maxlength="10" min="10" required name="phone" autocomplete="off">
			<input type="password" placeholder="Password" required name="cpass">
			<br>
			<input type="submit" value="Sign Up">
			<br>
			<?php
			if(isset($_GET['cust']))
               {
                   echo'<font color="red" size="4">All set!! Please Signin to Contiune</font>';
               }
			if(isset($_GET['fail']))
               {
                   echo'<font color="red" size="4">User already exist!</font>';
               }
        	 ?>      	       
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<a href="signin.php"><button class="ghost">Sign In</button></a>
			</div>
		</div>
	</div>
</div>
</body>
</html>