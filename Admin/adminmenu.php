<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="adminmenu.css">
	<link rel="stylesheet" type="text/css" href="../font/css/all.css">
	<title></title>
</head>
<body>
	
<div class="master">
<div class="navbar">
	<a href="adminhome.php"><h2>PIZZAEXPRESS</h2></a>
	<div class="left">
	<ul>
		<li class="dropdown">
    <a href="#" class="dropbtn">Categories &#9662</a>
    <div class="dropdown-content">
      <a href="addcat.php">Add Category</a>
      <a href="delcat.php">Delete Category</a>
    </div>
  </li>
   <li class="dropdown">
    <a href="#" class="dropbtn">Products &#9662</a>
    <div class="dropdown-content">
      <a href="addpro.php">Add Product</a>
      <a href="itemdetail.php">Update Product</a>
    </div>
  </li>
		
		
		<li class="dropdown">
   		 <a href="#" class="dropbtn">Delivery &#9662</a>
    		<div class="dropdown-content">
     		 <a href="addplace.php">Add Place</a>
     		 <a href="deleteplace.php">Delete Place</a>
    		</div>
  		</li>
		</li>
		<li class="dropdown">
    <a href="#" class="dropbtn">Orders &#9662</a>
    <div class="dropdown-content">
      <a href="adminorder.php">All Orders</a>
      <a href="sales.php">Sales Report</a>
    </div>
  </li>
		
		<li><a href="Customers.php">Customers</a></li>
	</ul>	
	

	
	</div>



	<div class=right>

		
		<a class="sign" href="logout.php" >Signout</a>
		
 
	</div>
</div>
</div>

</body>
</html>