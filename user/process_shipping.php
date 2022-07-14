<?php
require('usermenu.php');
require('config.php');
if(isset($_SESSION['cart']))
{

  $cid=$_SESSION['cid'];
  $dt=$_SESSION['date'];	

   $qq = "select max(oid) as orderid from orders where cid=$cid and dod='$dt'";									
   $ress = mysqli_query($conn,$qq) or die("wrong  query..");
  $roww = mysqli_fetch_assoc($ress);
  $oid=$roww['orderid'];

	foreach($_SESSION['cart'] as $pid=>$x)
    {	
		$n=$x['pid'];
       	$q=$x['qty'];	
       	$p=$x['price'];
		    $query="insert into orderdetails(oid,pid,quantity,price) values('$oid','$n','$q','$p')";	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");	
	
    }

if(!empty($_POST))
{
			$dname=$_POST['dname'];
			$hno=$_POST['hno'];
            $city=$_POST['city'];
            $pin=$_POST['pin'];
            $landmark=$_POST['landmark'];
			$dphone=$_POST['dphone'];
      
			
		
			
	$query="insert into deliverydetails(oid,dname,pin,hno,city,landmark,dphone) values ('$oid','$dname','$pin','$hno','$city','$landmark','$dphone')";
			
			mysqli_query($conn,$query) or die("Can't Execute...");
			header("location:delivery_details.php?oid=$oid");
			
			
	}	
  }    
  
      ?>  
