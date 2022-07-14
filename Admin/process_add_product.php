<?php
session_start();
require('config.php');
if(!empty($_POST))
{   
    $cat=$_POST['cat'];
    $itname=$_POST['itname'];
    $itprice=$_POST['itprice'];
    $img=$_POST['image'];
    $details=$_POST['details'];


    $query="INSERT INTO `products` (`catid`, `pname`, `price`, `pimg`, `details`) VALUES 
    ('$cat', '$itname', '$itprice', '$img', '$details')";
    mysqli_query($conn,$query) or die($query."can't connot to query..");
    
    header("location:addpro.php?yes=1");
   
}
else{
    header("location:addpro.php?no=1");
}