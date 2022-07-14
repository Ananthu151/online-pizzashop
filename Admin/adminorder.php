<!DOCTYPE html>
<html>
<head>
	<title>orders</title>
</head>

<link rel="stylesheet" type="text/css" href="adminorder.css">
<?php
require("adminmenu.php");
include 'config.php';

$c="select cid from orders";
$cq=mysqli_query($conn,$c);
$on=mysqli_fetch_assoc($cq);
if(!empty($on))
{
?>
<body>
   
<div class="table-box">
        <div class="t table-head">
            <div class="table-cell first-cell">
                <p>Order ID</p>
            </div>
            <div class="table-cell">
                <p>Name</p>
            </div>
            <div class="table-cell">
                <p>Date</p>
            </div>
            <div class="table-cell">
                <p>Total</p>
            </div>
             
            <div class="table-cell">
                <p>Status</p>
            </div>
            <div class="table-cell">
                <p>Order Details</p>
            </div>
            <div class="table-cell last-cell">
                <p>Feedback</p>
            </div> 
        </div>
<?php
		include 'config.php';			
	
		$select = "SELECT * FROM `orders` ORDER BY `oid` DESC";
		$result =mysqli_query($conn,$select);
		while($row = mysqli_fetch_assoc($result)){
?>

        <div class="t">
            <div class="table-cell first-cell">
                <p><?php echo $row['oid'] ?></p>
            </div>
             <div class="table-cell">
                <?php
                require("config.php");
                $cid=$row['cid'];
                $aa="select cname from customerdetails where cid='$cid'";
                $r=mysqli_query($conn,$aa);
                $rrr=mysqli_fetch_assoc($r);
                ?>
                <p><?php echo $rrr['cname']; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row['dod']; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row['total']; ?></p>
            </div>
            
            <div class="table-cell">
                <a style="color: #1f92e7;" href="updateorder.php?oid=<?php echo $row['oid']; ?>"><p><?php echo $row['status'] ?>  <i class="fas fa-edit"></i></p></a>
            </div>
            <div class="table-cell">
                <a style="color: #1f92e7;" href="delivery.php?oid=<?php echo $row['oid']; ?>">view</a>
            </div>

            <div class="table-cell last-cell">
                <a href="chat.php?cid=<?php echo $row['cid']; ?>#bottom">view Feedback</a>
            </div>   
        </div>
<?php
}
?>
</div>
<?php
}
else
header("location:noorder.php");
?>

</body>
</html>