<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="shipping.css">
<?php 
require("cartmenu.php");
require('config.php');
if(isset($_SESSION['cart']))
{									
	if(isset($_GET['t']))
	{
    $t=$_GET['t'];
    $d=date("y-m-d");
    $_SESSION['date']=$d;
	$cid=$_SESSION['cid'];	
	$query="insert into orders(cid,dod,total,status) values('$cid','$d','$t','ordered')";	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
   }
 }
 else
 {
  	header("location:userhome.php");
 }  
 ?>
<body>

	<div class="box">
		<form action="process_shipping.php" method="POST">
			<h1>Shipping Details</h1>
			
			<span>Where we want to deliver?</span>
			<br>
			<input type="text" placeholder="Name" required name="dname" autocomplete="off">
			
			<input type="number" placeholder="Phone Number" required name="dphone" autocomplete="off">
			
			<input type="text" placeholder="House Number,Flat,Building" required name="hno" autocomplete="off">
			
			<input type="text" placeholder="Area,Street,Junction" required name="city" autocomplete="off">
			
			<select name="pin">
            <?php
            require('config.php');           
            $query="select * from places";
            $res=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($res))
                 {
                 	?>
                      <option value="<?php echo $row['place'] ?>"><?php echo $row['place'] ?></option>
                     <?php
                 	}

                
            ?>
			</select>
			
			<input type="text" placeholder="landmark(optional)" name="landmark" autocomplete="off">
			<br>
			<input type="submit" value="Place order">
			<br>
		</form>
	</div>

</body>
</html>