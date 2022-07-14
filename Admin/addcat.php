
<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="addcatcss.css">
<head>
</head>
<body>
  <?php 
  include('adminmenu.php');
  ?>  
    <div class="loginBox">
           
       <h2 style="color: black;">ADD CATEGORY</h2>

        <form action="process_add_category.php" method="POST">
            <div class="text">
              
              <input type="text" name="catname" required="true" autocomplete="off" onkeyup="this.value=this.value.toUpperCase()" >
              <span></span>
              <label>Category Name</label>
            </div>
            <div class="file">
              
              <input type="file" name="image" class="upload" required>
              <span></span>
              <label>Image</label>
            </div>


              <input type="submit" value="ADD">
             <center>
               <?php
               if(isset($_GET['success']))
               {
                   echo'<font color="red" size="4">New Category Added!</font>';
                   echo'<br><br>';
               }
               if(isset($_GET['fail']))
               {
                   echo'<font color="red" size="4">This Category already exist!</font>';
                   echo'<br><br>';
               }
               if(isset($_GET['missingcat']))
                 {
                    echo'<font color="red" size="4">Missing Category Name.<br>Please Enter a Category Name..!</font>';
                   echo'<br><br>';
                 } 
               ?>
             </center>
        </form>
    </div>

</body>
</html>



