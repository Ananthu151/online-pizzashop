<html>
<head>
<script type="text/javascript">
	
		function sureToApprove(pid)
		{
			if(confirm("Are you sure you want to discontinue this item?")){
				window.location.href ='deleteproduct.php?pid='+pid;
			}
		}
		
	</script>

<style>
	.master1{
		margin: 0 10%;

	}
table,th,td {
	border: 1px solid #fff;
	border-radius: 3px;

	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 15%;
}
th,td {
	padding: 6 px;
	text-align: center;
	text-color: violet;
	background-color: rgba(0,0,0,0.02);
}




th {
  background-image: url(../images/menu.jpg);
  background-repeat: repeat; 
   color: white;
 }
 
td a{
	text-decoration: none;
	text-transform: uppercase;
	font-family: sans-serif;
	font-weight: bold;
	font-size: 14px;
	color: #1f92e7;
}
</style>
</head>
<?php
require('adminmenu.php');
?>
<body bgcolor="white" >
	<div class="master1">
	<form >
		
			
		<br>
	                	
				     <table style="width:100%" id="fb">
						<caption align="center">
						 <b><h1><font color="white">ITEM DETAILS</font></h1>
					   </caption>

					
						<tr>

<th><b>PRODUCT ID</b></th>
<th><b>CATEGORY NAME</b></th>
<th><b>ITEM NAME</b></th>
<th><b>PRICE</b></th>
<th><b>DETAILS</b></th>
<th><b>IMAGE</b></th>
<th colspan="6"><b>Action</b></th>
			
</tr						
    <?php
		include 'config.php';
		
		
			
		$select = "SELECT *,catname FROM products,categories where products.catid=categories.catid";
		$result =mysqli_query($conn,$select);
		while($row = mysqli_fetch_assoc($result)){
	?>
						
<tr>						
	                            <td><?php echo $row['pid'] ?></td>
								<td><?php echo $row['catname'] ?></td>
								<td><?php echo $row['pname'] ?></td>
								<td><?php echo $row['price'] ?></td>
								<td><?php echo $row['details'] ?></td>
								<td>

								<img src="../images/<?php echo $row['pimg'] ?>" width="100"></td>
								<td><a href="updateitem.php?pid=<?php echo $row['pid'];?>">Update</a></td>
								
								<td>
									<a style="color: red;" href="javascript:sureToApprove(<?php echo $row['pid'];?>)" >Dicontinue</a>

									</td>
							
</tr>
							
								<?php
								
								}
								
								?>
											
							</table>
						
	</div>				
</body>
</html>



