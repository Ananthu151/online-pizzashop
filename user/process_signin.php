<?php
session_start();
require ("config.php");
if (!empty($_POST)) {
	$unm=$_POST['username'];
	$q="select * from customerdetails where username='$unm'";
	$res=mysqli_query($conn,$q) or die("wrong query");
	$row=mysqli_fetch_assoc($res);
	if(!empty($row))
	{
		if($_POST['cpass']==$row['cpass'])
		{
			$_SESSION=array();
			$_SESSION['cid']=$row['cid'];
			header('Location:userhome.php?cust=1');

		}
		else
		{
			header('Location:signin.php?wrongpass=1');
		}
	}
	else
	{
		header('Location:signin.php?wronguser=1');
	}
}
?>