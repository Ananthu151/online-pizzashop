<!DOCTYPE html>
<html>
<head>
	<title>orders</title>
</head>
<link rel="stylesheet" type="text/css" href="orders.css">
<?php
require("cartmenu.php");

?>




<body>
    <?php
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
<div class="table-box">
        <div class="t table-head">
            <div class="table-cell first-cell">
                <p>Order ID</p>
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
                <p>Order Summary</p>
            </div>
            <div class="table-cell last-cell">
                <p>Feedback</p>
            </div> 
        </div>
<?php
		include 'config.php';			
		$c=$_SESSION['cid'];
		$select = "SELECT * FROM `orders` where cid=$c ORDER BY `oid` DESC";
		$result =mysqli_query($conn,$select);
		while($row = mysqli_fetch_assoc($result)){
?>

        <div class="t">
            <div class="table-cell first-cell">
                <p><?php echo $row['oid'] ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row['dod'] ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row['total'] ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row['status'] ?></p>
            </div>
            <div class="table-cell">
                <a href="viewproduct.php?oid=<?php echo $row['oid'] ?>">View</a>
            </div>
            <div class="table-cell last-cell">
                <a href="chat.php?oid=<?php echo $row['oid'] ?>#bottom">Send Feedback</a>
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


<?php
}
else
header("location:notlogin.php");
?>




</body>
</html>