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
                <p>CatID</p>
            </div>
              <div class="table-cell">
                <p>Category Name</p>
            </div>        
            <div class="table-cell last-cell">
                <p>Action</p>
            </div> 
        </div>
<?php
    include 'config.php';     
  
    $select = "SELECT * FROM categories";
    $result =mysqli_query($conn,$select);
    while($row = mysqli_fetch_assoc($result)){
        

?>

        <div class="t">
            <div class="table-cell first-cell">
                <p><?php echo $row['catid']; ?></p>
            </div>
              <div class="table-cell">
                <p><?php echo $row['catname']; ?></p>
            </div>        
            <div class="table-cell last-cell">
                <a href="process_delete_category.php?catname=<?php echo $row['catname']; ?>">Delete</a>
            </div>   
        </div>
<?php

}
?>
</div>
</body>
</html>