<?php
session_start();
require('config.php');
$itid=$_SESSION['pid'];

	if(!empty($_POST))
	{
			
			
			$itname=$_POST['pname'];
			$itdetails=$_POST['details'];
			$itprice=$_POST['price'];
			$img=$_POST['pimg'];
			$query="UPDATE products SET pname='$itname',details='$itdetails',
			price='$itprice' WHERE pid='$itid'";
						
					
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			//echo '<script>window.parent.close();window.open("itemdetail.php"); </script>';
			//echo '<script>window.close("updateitem.php");window.close("itemdetail.php");</script>';
			
			header("location:itemdetail.php");

	}


			if(!empty($_POST['pimg']))
			{
				$query="UPDATE products SET pimg='$img' WHERE pid='$itid'";
				
				mysqli_query($conn,$query) or die($query."Can't Connect to Query...");	
				
			}
		
			
	
	
	
?>    