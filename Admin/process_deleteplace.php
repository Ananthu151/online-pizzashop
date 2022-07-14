<?php
require ("config.php");
if (!empty($_GET)) {
    $place=$_GET['name'];
   $d="delete from places where place='$place'";
   if (mysqli_query($conn,$d)) {
   header('Location:deleteplace.php');
 }
  

  }
  else{
       header('Location:deleteplace.php');
   } 
?>