<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="logincss.css">
<head>
	<title>pizzaExpress</title>
</head>
<body>

    <div class="loginBox">
    
    			
        <h2>WELCOME</h2>

        <form action="<?php $_PHP_SELF ?>" method="POST">
            <div class="text">
            	
            <input type="text" name="adname" required="true" autocomplete="off">
            <span></span>
            <label>AdminName</label>
            </div>

            <div class="text">
            <input type="password" name="adpass" required="true">
            <span></span>
            <label>Password</label>
            </div>
            <input type="submit" value="LOGIN">
            <center>
             <?php
            if(isset($_GET['wrongpass'])) {
            	echo '<font color="red" size="4">Incorrcet password!!</font>';
            	echo "<br><br>";
            }
            if (isset($_GET['wronguser'])) {
            	echo '<font color="red" size="4">Invalid username!!</font>';
            	echo '<br><br>';
            }
            ?>    
        </center>
        </form>
    </div>

</body>
</html>


<?php
require ("config.php");
if (!empty($_POST)) {
	$unm=$_POST['adname'];
	$q="select * from adminlogin where adname='$unm'";
	$res=mysqli_query($conn,$q) or die("wrong query");
	$row=mysqli_fetch_assoc($res);
	if(!empty($row))
	{
		if($_POST['adpass']==$row['adpass'])
		{
			
			header('Location:adminhome.php?cust=1');
		}
		else
		{
			header('Location:login.php?wrongpass=1');
		}
	}
	else
	{
		header('Location:login.php?wronguser=1');
	}
}
?>