
<?php
	require('cartmenu.php');
?>
<html>
<head>
		
</head>
<style type="text/css">
	img{
		position: absolute;
		left:50%;
		top: 30%;
		transform: translate(-50%,-50%);
		width: 400px;
		height: 300px;
	}
	.line{
		border-bottom:3px solid #fa8072;
		width: 600px;
		left: 50%;
		transform:translate(-50%,-50%);
		position: absolute;
	}
	.line .dot1{
		position: absolute;
		top: -6px;
		left :20px;
		color: red;
	}
	.line .dot2{
		position: absolute;
		top: -6px;
		left :200px;
		color: #fa8072;
	}
	.line .dot3{
		position: absolute;
		top: -6px;
		left :400px;
		color: #fa8072;
	}
	.line .dot4{
		position: absolute;
		top: -6px;
		left :565px;
		color: #fa8072;
	}
	.line h5{
	 margin-left: -18px;
	}
	#i{
		position: absolute;
		top: 60px;
	 left: 50%;
	 transform: translate(-50%,-50%);
		color: red;
	}
</style>
<body><br><br><br>
	
<h1 align="center"><font color="red"face="brush script mt" size="5">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="../images/gif1.gif">
<br><br><br><br><br><br><br><br>
Thanks for shopping with us.<br>Your order will be delivered with in 30 to 45m</font></h1><br><br>
<div class="line">
	<div class="dot1"><i class="fas fa-circle"></i><h5>Ordered</h5></div>
	<div class="dot2"><i class="fas fa-circle"></i><h5>Cooking</h5></div>
	<div class="dot3"><i class="fas fa-circle"></i><h5>On The Way</h5></div>
	<div class="dot4"><i class="fas fa-circle"></i><h5>Delivered</h5></div>
	<?php
if (isset($_GET['oid'])) {
	$oid=$_GET['oid'];
}
?>
<p id="i">Send your feedbacks to us <a href="chat.php?oid=<?php echo $oid ?>#bottom">Send</a></p>
</div>

<?php
unset($_SESSION['cart']);

//session_destroy();
?>

</body>	
</html>	