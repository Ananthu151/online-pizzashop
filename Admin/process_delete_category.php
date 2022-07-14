<?php
require ("config.php");
if (!empty($_GET)) {
    $catname=$_GET['catname'];
$aa="select catid from categories where catname='$catname'";
                $r=mysqli_query($conn,$aa);
                $rrr=mysqli_fetch_assoc($r);
$cid=$rrr['catid'];
   $d="delete from categories where catname='$catname'";
   $a="delete from products where catid=$cid";
   if (mysqli_query($conn,$a)) {
   	if (mysqli_query($conn,$d))
   	{
   header('Location:delcat.php');
    }
 }
  

  }
  else{
       header('Location:delcat.php');
   } 
?>