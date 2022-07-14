<?php
session_start();
require("config.php");
if(!empty($_POST))
{
    $place_name=$_POST['place'];
   
     $q="insert into places(place)values('$place_name')";
    if(mysqli_query($conn,$q)==true)
    {
        header("location:addplace.php?success=1");
    }
    else
    {
        header("location:addplace.php?fail=1");  
    }
}
else
{
    header("location:addplace.php?missingcat=1");  
}