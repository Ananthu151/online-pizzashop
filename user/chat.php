<?php
require ("cartmenu.php");

    if(isset($_SESSION['cid']))
    { 
include 'config.php';
$cid=$_SESSION['cid'];
$c="select cid from orders where cid=$cid";
$cq=mysqli_query($conn,$c);
$on=mysqli_fetch_assoc($cq);
if(!empty($on))
{
        
?>
<!DOCTYPE html>
<html>
<head>
	<title>feedback</title>
</head>

<link rel="stylesheet" type="text/css" href="chat.css">
<body>
	<div>


<div class="chatbox">
	<img id="bar" src="../images/um3.jpg">
	<div class="icon"><i class="fas fa-user"></i><h3>Pizzaexpress</h3><a href="userhome.php"><h4>&#10006</h4></a></div>

	<div class="chatlogs">
<?php
		include 'config.php';			
		$c=$_SESSION['cid'];
		$select = "select * from feedback where cid=$c";
		$result =mysqli_query($conn,$select);
		while($row = mysqli_fetch_assoc($result)){
            
?>
		<p id="orderid">---------------------------------OrderID:<?php echo $row['oid'] ?>---------------------------------</p>
		<div class="chat1">
			
			<p class="meg"><?php echo $row['feedback'] ?></p>		
		</div>
		<?php
		if(!empty($row['replay']))
		{
		?>
		<div class="chat2">	
					<p class="meg"><?php echo $row['replay'] ?></p>		
		</div>
		<?php
}
		?>
		<?php
}
?>
<div id="bottom"></div>
	</div>
	<?php
	if(isset($_GET['oid']))
	{
	?>
	<form class="send" action="process_feedback.php?oid=<?php echo $_GET['oid'] ?>" method="POST">
		
	<input type="text" name="feedback" placeholder="   Type user feedback." autocomplete="off" required>
	<input type="submit" value="&#10148">
    </form>
    <?php
	
	}
	elseif (isset($_GET['off'])) {
		echo '<p style="text-align:center; color:red;"> Opps. your feedback is already Registed!</p>';
	}
	?>
    </div>

</div>


</body>
</html>
<?php
}

else
    header("location:noorder.php");

?>


<?php
}
else
header("location:notlogin.php");
?>

