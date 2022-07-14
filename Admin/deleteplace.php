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
                <p>Place Name</p>
            </div>
                      
            <div class="table-cell last-cell">
                <p>Action</p>
            </div> 
        </div>
<?php
		include 'config.php';			
	
		$select = "SELECT * FROM PLACES";
		$result =mysqli_query($conn,$select);
		while($row = mysqli_fetch_assoc($result)){
        

?>

        <div class="t">
            <div class="table-cell first-cell">
                <p><?php echo $row['place']; ?></p>
            </div>
                    
            <div class="table-cell last-cell">
                <a href="process_deleteplace.php?name=<?php echo $row['place']; ?>">Delete</a>
            </div>   
        </div>
<?php

}
?>
</div>
</body>
</html>