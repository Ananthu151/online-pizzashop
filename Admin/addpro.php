<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="addpro.css">
<head>
    <title></title>
</head>
<body>
  <?php 
  include('adminmenu.php');
  ?>
<div class="loginBox">
    
             <h2 style="color: black;">ADD PRODUCT</h2>

        <form action="process_add_product.php" method="POST">
        
            <div class="text">
            <input type="text" name="itname" required="true" onkeyup='this.value=this.value.toUpperCase()' autocomplete="off">
            <span></span>
            <label>Product Name</label>
            </div>

            <div class="text">
            <input type="number" name="itprice" required="true" autocomplete="off">
            <span></span>
            <label>Price</label>
            </div>

            <div class="text">
            <input type="text" name="details" required="true" autocomplete="off">
            <span></span>
            <label>Details</label>
            </div>
            <div class=both>          
            <div class="cat">
            <label>Category</label>
            <select name="cat">
            <?php
             require('config.php');
            $query="select * from categories";
            $res=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($res))
                 {
                        echo "<option value='".$row['catid']."'>".$row['catname'];

                }
            ?>
             </select>
             </div>

            <div class="file">
            <input type="file" name="image" class="upload" required>
            <span></span>
            <label>Image</label>
            </div>
</div>
            <input type="submit" value="ADD">
            <center>
            <?php
             if(isset($_GET['yes']))
             {
              echo '<p style="color: red; font-family: sans-serif; font-weight: bold;">New Product added!!</font><br><br>';
             }
             if(isset($_GET['no']))
             {
              echo '<font color="red" size="4">Error In Adding New Product!!</font><br><br>';
             }
             ?>
         </center>
        </form>
</body>
</html>