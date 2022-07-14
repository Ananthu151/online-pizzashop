<?php
session_start();
require("config.php");
if(!empty($_POST))
{
    $status=$_POST['status'];       
    $oid=$_GET['oid'];
    $q="UPDATE orders SET status='$status' WHERE oid='$oid'";
    if(mysqli_query($conn,$q)==true)
    {
        header("location:adminorder.php?success=1");
    }
    else
    {
        header("location:updateorder.php?fail=1");  
    }
}
