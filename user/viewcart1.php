


<html>
<body>
<style type="text/css">
	
	
		.entry{
		position: relative;
	margin-left: 15%;
	}
.empty
{
	top:50%;
	left:30%;
}
.c{ top: 100px;
	font-weight: lighter;
	position: relative;
	text-align: center;


}
</style>
<div>
<?php	
	require("cartmenu.php");
	if (isset($_SESSION['cart'])) {
	
	
?>
		

		
							<h1 class="title">Viewcart</h1>
							<div class="entry">
							<form action="process_cart.php" method="POST" color="black">
							<table width="80%" border="0" align="center">
								<tr >
									<Td> <b>No.								
									<td> <b>Product Name
									<td> <b>Quantity
									<td> <b>Rate
									<td> <b>Price
									<td> <b>Delete
								</tr>
							<tr><td colspan="6"><hr style="border:1px Solid #a1a1a1;"></tr>
				
								<?php
								$tot = 0;
									$i = 1;
									
									

									foreach($_SESSION['cart'] as $pid=>$x)
									{	
								
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['pname'].'

						<td><input type="text" size="2" value="'.$x['qty'].'" name="'.$pid.'">
											<td> '.$x['price'].'
											<td> '.($x['qty']*$x['price']).'
							<td> <a href="process_cart.php?pid='.$pid.'" style="color: red; text-decoration:none;">Delete</a>
										</tr> ';										
								
										
							$tot = $tot + ($x['qty']*$x['price']);
										$i++;
									}
									
								?>
							
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="4" align="right">
							<h4 >Total:</h4>
							
							</td>

							<td><h3> <?php echo $tot; ?></h3></td>
						
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid black;"></td></tr>
							
							<Br>
								
								</table>						

								<br><br>
							<center>
							<input type="submit" value=" Re-Calculate " style="margin-left: -15%; background-color: red; border:none; outline: none; color: white; padding: 5px 10px; border-radius: 25px;" > 
							
                                <a href="shipping.php?t=<?php echo $tot; ?>" style=" border:none; outline: none; color: red; text-decoration: none; padding: 5px 10px; border-radius: 25px;">CONFIRM & PROCEED</a>
                                                         
							</center>
		
							</form>
							</div>
									

</div>
<?php
}
else
echo '<div class="c">Cart is empty!</div>';
?>
</body>
</html>
