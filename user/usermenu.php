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
	
<div class="cat">
			<ul>
				<li class="dropdown">
 			  	<a href="#" class="dropbtn">Categories &#9662</a>
   				<div class="dropdown-content">
            <?php
             require('config.php');
            $query="SELECT * FROM `categories` ORDER BY `catid` ASC";
            $res=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($res))
                 {
                 	?>
                
    			<a href="#<?php echo $row['catname']?>"><?php echo $row['catname'] ?></a>
   				
            <?php
                }
            ?>
            </div>
 				</li>
           </ul>
     </div>


	
	</div>



	<div class=right>


    
        <?php
		if(isset($_SESSION['cid']))
		{

		?>
		<div class="cart">
			<div class="num">
  	<?php
   if(isset($_SESSION['cart'])){
				$count=count($_SESSION['cart']);
				echo "<span>$count</span>";
				}
				else
				echo "<span>0</span>";

?>
</div>
		<a href="viewcart1.php"><i class="fas fa-shopping-cart" style="color: white;"></i></a></div>
		<a class="sign" href="signout.php" >Signout</a>
		<?php
		}
		else{ ?>
		<a class="sign" href="signin.php">Signin  |</a><a class="sign" href="signup.php">Signup</a> 
		<?php
		}
	    ?>
  
	</div>
</div>

</div>

</body>
</html>