<?php
session_start();
require("config.php");
if(!empty($_POST))
{
    $feedback=$_POST['feedback'];
    $cid=$_SESSION['cid'];
    $oid=$_GET['oid'];
    $a="select oid from feedback where oid='$oid'";
    $res=mysqli_query($conn,$a) or die("wrong query");
    $row=mysqli_fetch_assoc($res);
    if(empty($row))    
    {
        $q="insert into feedback(cid,oid,feedback)values('$cid','$oid','$feedback')";
        mysqli_query($conn,$q);
        header("location:chat.php#bottom");
    }
    else
    {
        header("location:chat.php?off=1#bottom");  
    }
}


