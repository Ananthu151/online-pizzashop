<?php
require ("config.php");
if (!empty($_GET)) {
    $pid=$_GET['pid'];
   $d="delete from products where pid='$pid'";
   if (mysqli_query($conn,$d)) {
   header('Location:itemdetail.php');
 }
  

  }
  else{
        header('Location:itemdetail.php');
   } 
?>