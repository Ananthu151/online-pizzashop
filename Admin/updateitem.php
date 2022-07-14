<html>
<head>		
</head>
<link rel="stylesheet" type="text/css" href="updateitem.css">
<body>
<?php
require('adminmenu.php');
?>
<div class="loginbox">
<form  action="updateitem_process.php" method="POST">
<h2 style="color: black;">UPDATE PRODUCTS</h2>
	        <?php
			session_start();						
			require('config.php');									
			if(!empty($_GET['pid']))
	        {
			  	$itid=$_GET['pid'];
			  	$_SESSION=array();
				$_SESSION['pid']=$itid;
			 	$query="select * from products where pid='$itid'";
				$res=mysqli_query($conn,$query);
				$row=mysqli_fetch_assoc($res);
				$cat=$row['pid'];
			}
			?>
			<div class="text">	
			<input type='text' size='30' maxlength='30' name='pname' required onkeyup='this.value=this.value.toUpperCase()' value="<?php echo $row['pname'] ?>">
				<span></span>
				<label>Product Name</label>	
			</div>


			<div class="text">	
			<input type='number' size='30' name='price' required value="<?php echo $row['price'] ?>">
				<span></span>
				<label>Price</label>	
			</div>
			<div class="text">	
			<input type='text' name='details' required value="<?php echo $row['details'] ?>">
				<span></span>
				<label>Details</label>	
			</div>
		            

		    <div class="file">
            <input type="file" name="pimg" class="upload" value="<?php echo $row['pimg'] ?>" required>
            <span></span>
            <label>Image</label>
            </div>
		           
			<input  type='submit'  value='SAVE CHANGES' >
			
			
</form>
</div>
</body>
</html>