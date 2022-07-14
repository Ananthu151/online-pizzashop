
<!DOCTYPE html>
<html>
    <?php
	require("usermenu.php");  
	
	?>
	<br>
<head>
	<title>Home</title>
</head>
<link rel="stylesheet" type="text/css" href="userhome.css">
<body>

<div>
<br><br><br><br>
<div class="bar"><h3>Categories:</h3></div>

	<table align="center" border="5">
			
       <?php
        require("config.php");
	
		$query="SELECT * FROM `categories` ORDER BY `catid` ASC";								
		$res=mysqli_query($conn,$query) or die("Wrong Query...");
	
		$count=0;
			
		while($row=mysqli_fetch_assoc($res))
			{
				if($count==0)
				{
				echo '<tr>';
             	}
                 
	        ?>
				<td valign="top" width="10%" align="center"><a href="#<?php echo $row['catname'] ?>">
										<img src="../images/<?php echo $row['catimg'] ?>" id="c">
										<br><?php echo $row['catname']; ?></a>
				</td>
			
					<?php	

						$count++;							
													
						if($count==4)
							{
							echo '</tr>';
							$count=0;
							}
			}
			
		
											
	echo "</table><br><center>";

				
   											
    ?>
    </center>

</div>

<div class="pro">

         <?php
            require('config.php');
            $query="SELECT * FROM `categories` ORDER BY `catid` ASC";
            $res=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($res))
                 {
                 	$cats=$row['catid'];
                 	?>
                <div id="<?php echo $row['catname'] ?>">
                	<br><br><br><br>
<div class="heading">
    			<div class="catbar" ><h3><?php echo $row['catname']?></h3></div>
    			<br>
                </div>  

</div>  

<div class="container">
		 <?php
        $q="select * from products where catid=$cats";								
		$re=mysqli_query($conn,$q) or die("Wrong Query...");
	
		while($r=mysqli_fetch_assoc($re))
			{   
			
                 
	        ?>
		<div class="box">
			<img src="../images/<?php echo $r['pimg'] ?>">
			<h3><?php echo $r['pname']; ?></h3>
			<h4>Price:<?php echo $r['price'];?><i class="fas fa-rupee-sign icon"></i></h4>
			<p><?php echo $r['details']; ?></p>
			<?php
			
			if(isset($_SESSION['cid']))
			{ 
				?>				
			<div class="b"><a class="btt" href="process_cart.php?pid=<?php echo $r['pid'];?>&pname=<?php echo $r['pname'];?>
			&price=<?php echo $r['price'];?>
			&details=<?php echo $r['details'];?>&cid=<?php echo $cats ?>"><img src="../images/cart.png" id="add"></a></button>
			</div>
	
			<?php
		}	
		?>
		</div>
		<?php				
		}
		?>	
	</div>





        
<?php
         }
          ?>



</div>


















<?php
if (isset($_GET['noti'])) {

?>


<div class="boxx">
	<div class="close"><a>x</a></div>
	<h3 style="color: white;">Item is added to the cart!</h3>		
	<div class="tocart"><a href="viewcart1.php">&#8702</a></div>
</div>
<?php
}

?>




<script type="text/javascript">
	
   
	const b = document.querySelector(".boxx");
	const c = document.querySelector(".close");
	let timer;
	/* const bt = document.querySelector(".btt");
	bt.addEventListener("click",function(){
		b.classList.remove("hide");
		setTimeout(function() {},5000);
	}); */
	c.addEventListener("click",function(){
		b.classList.add("hide");
clearTimeout(timer);
	});
	timer=setTimeout(function() {
	b.classList.add("hide");
}, 5000);


			

</script>
</body>
</html>