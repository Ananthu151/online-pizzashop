<?php 
session_start();
if(isset($_GET['pid']) and isset($_GET['pname']) and isset($_GET['price']) and isset($_GET['details']))
	{
		//add item
		$_SESSION['cart'][] = array("pid"=>$_GET['pid'],"pname"=>$_GET['pname'],"price"=>$_GET['price'],"details"=>$_GET['details'],"qty"=>"1");
		$cid=$_GET['cid'];
		require("config.php");
		$q="select * from categories where catid=$cid";
		$result=mysqli_query($conn,$q);
		$r=mysqli_fetch_assoc($result);
		$a=$r['catname'];
		
		header("location:userhome.php?noti=1#$a");
	}
	else if(isset($_GET['pid']))
	{
		//del a item
		$pid = $_GET['pid'];
		unset($_SESSION['cart'][$pid]);
		header("location: viewcart1.php");
	}
	else if(!empty($_POST))
	{
		//update qty
		foreach($_POST as $pid=>$val)
		{
			$_SESSION['cart'][$pid]['qty']=$val;
			
		}
		header("location: viewcart1.php");
	}else
	header("location: viewcart1.php");


 ?>