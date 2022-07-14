<?php
require ("adminmenu.php");
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
	<img id="bar" src="../images/menu.jpg">
	<div class="icon"><i class="fas fa-user"></i><h3>
		<?php
                require("config.php");
                $cid=$_GET['cid'];
                $aa="select username from customerdetails where cid=$cid";
                $r=mysqli_query($conn,$aa);
                $rrr=mysqli_fetch_assoc($r);
                ?>
                <?php echo $rrr['username']; ?>
	</h3><a href="adminhome.php"><h4>&#10006</h4></a></div>

	<div class="chatlogs">
<?php
		include 'config.php';			
	
		$select = "select * from feedback where cid=$cid";
		$result =mysqli_query($conn,$select);
		while($row = mysqli_fetch_assoc($result)){
            
?>
<?php
		if(!empty($row['feedback']))
		{
		?>
		<p id="orderid">---------------------------------OrderID:<?php echo $row['oid'] ?>---------------------------------</p>
		
		<div class="chat2">
			
			<p class="meg"><?php echo $row['feedback'] ?></p>		
		</div>
		<?php
}
		?>
		<?php
		if(!empty($row['replay']))
		{
		?>
		<div class="chat1">	
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
	<form class="send" action="process_feedback.php?cid=<?php echo $cid ?>" method="POST">
		<select name="oid">
            <?php
            require('config.php');
            
            $query="select * from orders where cid=$cid ORDER BY `oid` DESC";
            $aaaa=mysqli_query($conn,$query);
            while($r=mysqli_fetch_assoc($aaaa))
                 {
                 	?>
                      <option value="<?php echo $r['oid'] ?>"><?php echo $r['oid'] ?></option>
                     <?php
                 	}

                
            ?>
       </select>
	<input type="text" name="replay" placeholder="   Type user feedback." autocomplete="off" required>
	<input type="submit" value="&#10148">
	
    </form>
    </div>

</div>

</body>
</html>