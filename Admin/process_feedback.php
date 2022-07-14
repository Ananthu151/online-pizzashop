<?php
session_start();
require("config.php");
if(!empty($_POST))
{
    $replay=$_POST['replay'];   
    $oid=$_POST['oid'];
    $cid=$_GET['cid'];
    $q="UPDATE feedback SET replay='$replay' WHERE oid='$oid'";
    if(mysqli_query($conn,$q)==true)
    {
        header("location:chat.php?cid=$cid#bottom");
    }
    else
    {
        header("location:chat.php?cid=$cid#bottom");  
    }
}
