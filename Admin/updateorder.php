
<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="addpro.css">
<head>
</head>
<body>
  <?php 
  include('adminmenu.php');
  ?>  
    <div class="loginBox">
           
       <h2 style="color: black;">UPDATE ORDER STATUS</h2>

        <form action="process_updateorder.php?oid=<?php echo $_GET['oid']; ?>" method="POST">
         
          
            <div class="cat" style="padding-bottom: 10px; width: 100%; "> 
            
            <select name="status">
            <option value="Cooking">Cooking</option>
             <option value="On the way">On the way</option>
              <option value="Delivered">Delivered</option>
             </select>
              
              
           </div>
            <input type="submit" value="UPDATE">
             <center>
               <?php
               if(isset($_GET['success']))
               {
                   echo'<font color="red" size="4">Status Updated!</font>';
                   echo'<br><br>';
               }
               if(isset($_GET['fail']))
               {
                   echo'<font color="red" size="4">Status Not Updated!</font>';
                   echo'<br><br>';
               }
               
               ?>
             </center>
        </form>
    </div>

</body>
</html>



