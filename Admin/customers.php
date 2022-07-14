<!DOCTYPE html>
<html>
<head>
  <title>orders</title>
</head>
<link rel="stylesheet" type="text/css" href="deleteplace.css">
<?php
require("adminmenu.php");
?>
<body>
   
<div class="table-box">
        <div class="t table-head">
            <div class="table-cell first-cell">
                <p>Cid</p>
            </div>
              <div class="table-cell">
                <p>username</p>
            </div>  
            <div class="table-cell">
                <p>Full Name</p>
            </div>      
            <div class="table-cell last-cell">
                <p>Phone</p>
            </div> 
        </div>
<?php
    include 'config.php';     
  
    $select = "SELECT * FROM customerdetails";
    $result =mysqli_query($conn,$select);
    while($row = mysqli_fetch_assoc($result)){
        

?>

        <div class="t">
            <div class="table-cell first-cell">
                <p><?php echo $row['cid']; ?></p>
            </div>
              <div class="table-cell">
                <p><?php echo $row['username']; ?></p>
            </div> 
             <div class="table-cell">
                <p><?php echo $row['cname']; ?></p>
            </div>       
            <div class="table-cell last-cell">
               <p><?php echo $row['phone']; ?></p>
            </div>   
        </div>
<?php

}
?>
</div>
</body>
</html>