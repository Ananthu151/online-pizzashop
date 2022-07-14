<!DOCTYPE html>
<html>
<head>
	<title>orders</title>
    <style type="text/css">
        h1{ 
            color: black;
            
            margin-left: 10%;
        }
        .add{
            margin-left: 10%;
        }
    </style>
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
     <h1>Delivery Details:</h1>
     <?php
        include 'config.php';           
        $id=$_GET['oid'];
        $select = "SELECT * FROM deliverydetails where oid=$id";
        $result =mysqli_query($conn,$select);
        while($row = mysqli_fetch_assoc($result)){
?>
     <div class="add">
     Order ID:  <?php echo $row['oid']; ?><br>
     Name:  <?php echo $row['dname']; ?><br>
     House Number,Flat,Building:<?php echo $row['hno']; ?><br>
     Place:<?php echo $row['pin']; ?><br>
     Area,Street,Junction:<?php echo $row['city']; ?><br>
     Landmark:<?php echo $row['landmark']; ?><br>
     Phone:<?php echo $row['dphone']; ?><br>
      </div>  
    <?php
}
?>
<br>
<h1>Product Details:</h1>

        <div class="t table-head">
            <div class="table-cell first-cell">
                <p>Product Name</p>
            </div>
            <div class="table-cell">
                <p>Quantity</p>
            </div>           
            <div class="table-cell last-cell">
                <p>Price</p>
            </div> 
        </div>
<?php
		include 'config.php';			
		$c=$_SESSION['cid'];
        $oid=$_GET['oid'];
		$select = "SELECT * FROM orderdetails where oid=$oid";
		$result =mysqli_query($conn,$select);
		while($row = mysqli_fetch_assoc($result)){
?>

        <div class="t">
            <div class="table-cell first-cell">
              <?php
                require("config.php");
                $pid=$row['pid'];
                $aa="select pname from products where pid='$pid'";
                $r=mysqli_query($conn,$aa);
                $rrr=mysqli_fetch_assoc($r);
                ?>
                <p><?php echo $rrr['pname']; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row['quantity'] ?></p>
            </div>
           
            <div class="table-cell last-cell">
                <p><?php echo $row['price'] ?></p>
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