<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="signin.css">
<head>
	<title></title>
</head>
<body>
<div class="container" id="container">	
	<div class="form-container sign-in-container">
		<form action="process_signin.php" method="POST">
			<h1>Sign In</h1>
			
			<span>use your account</span>
			<br>
			<input type="text" placeholder="User Name" required name="username" autocomplete="off">
			<input type="password" placeholder="Password" required name="cpass">
			<br>
			<input type="submit" value="Sign In">
			<br>
			<?php
            if(isset($_GET['wrongpass'])) {
            	echo '<font color="red" size="4">Incorrcet password!!</font>';
            	
            }
            if (isset($_GET['wronguser'])) {
            	echo '<font color="red" size="4">Invalid username!!</font>';
            	echo '<br>';
            }
            ?>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<a href="signup.php"><button class="ghost">Sign Up</button></a>
				
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>