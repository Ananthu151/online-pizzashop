
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
           
       <h2 style="color: black;">ADD PLACE</h2>

        <form action="process_add_place.php" method="POST">
            <div class="text">
              
              <input type="text" name="place" required="true" autocomplete="off" onkeyup="this.value=this.value.toUpperCase()" >
              <span></span>
              <label>Place Name</label>
            </div>
            <input type="submit" value="ADD">
             <center>
               <?php
               if(isset($_GET['success']))
               {
                   echo'<font color="red" size="4">New Place Added!</font>';
                   echo'<br><br>';
               }
               if(isset($_GET['fail']))
               {
                   echo'<font color="red" size="4">This Place already exist!</font>';
                   echo'<br><br>';
               }
               if(isset($_GET['missingcat']))
                 {
                    echo'<font color="red" size="4">Missing Place Name.<br>Please Enter a Place Name..!</font>';
                   echo'<br><br>';
                 } 
               ?>
             </center>
        </form>
    </div>

</body>
</html>



