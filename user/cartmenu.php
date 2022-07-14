<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="usermenu.css">
	<link rel="stylesheet" type="text/css" href="../font/css/all.css">
	<title></title>
</head>
<body>
	
<div class="master">
<div class="navbar">
	<a href="userhome.php"><h2>PIZZAEXPRESS</h2></a>
	<div class="left">
	<ul>
		<li><a href="orders.php">Orders</a></li>
		<li><a href="chat.php#bottom">Feedback</a></li>
		<li><a href="about.php">About Us</a></li>
	</ul>	
	

	
	</div>



	<div class=right>

            <?php

		if(isset($_SESSION['cid']))
		{
			?>
		
		<a class="sign" href="signout.php ">Signout</a>
		<?php
		}
		else{ ?>
		<a class="sign" href="signin.php">Signin</a> | <a class="sign" href="signup.php">Signup</a> 
		<?php
		}
	    ?>
  
	</div>
</div>
</div>

</body>
</html>