<!DOCTYPE html>
<html>
<head>
	<title>feedback</title>
</head>
<link rel="stylesheet" type="text/css" href="feedback.css">

<?php
require("cartmenu.php");
$oid=$_GET['oid'];
?>
<body>
<div class="box">
		<form action="process_feedback.php?oid=<?php echo $oid ?>" method="POST">
			<h1>Feedback</h1>
			
			<span>it means a lot to as!</span>
			<br>

			<p>Order ID:<?php echo $oid; ?></p>
			<input type="text" placeholder="feedbacks.." required name="feedback" autocomplete="off">
			<br>	
			<input type="submit" value="Send">
			<br>
			<?php
             if(isset($_GET['yes']))
             {
              echo '<p style="color: red; font-family: sans-serif; font-weight: bold;">Thanks For your Feedback!<br><br>';
             }
             if(isset($_GET['no']))
             {
              echo '<font color="red" size="4">Error In Adding New Product!!</font><br><br>';
             }
             ?>
		
		</form>
	</div>

</body>
</html>