<?php
require("adminmenu.php");

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">
 * {
  font-family: sans-serif; /* Change your font family */
}

.content-table {
  border-collapse: collapse;
  margin: 0;
  font-size: 0.9em;
  min-width: 500px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
 background-image: url(../images/menu.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  color: #ffffff;
  text-align: left;
  text-align: center;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #1f92e7;
}
.table{
    width: 525px;
    max-height: 400px;
    overflow-y: scroll;
    top: 30%;
    left: 50%;
    margin-left: 10%;
    text-align: center;
    margin-bottom: 4%;
}
form{
  margin-left:  10%;
  
}
select{
  margin-right:10px;
  border-radius: 10px;
  outline: none;
  border: 2px #1f92e7 solid;
}
input[type="submit"]{
  margin-left: -5px;
  background-color: #1f92e7;
  border-radius: 40px;
  border: none;
  color: white;
  padding: 5px 15px;
 cursor: pointer;
 text-decoration: none;
 outline: none;
}
.icon{
  font-size: 23px;
}
.box{
  position: fixed;
  right: 10%;
  top: 22.3%;
  border-radius: 20px;
  height: 130px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.09);
  width: 450px;
}
.text{
  padding: 30px;
}
</style>

<body>


<br><br><br><br><br>
  <form method="POST" action="sales.php">
    Year:
    <select name="year">
      <?php
        include 'config.php';                   
        $select = "SELECT distinct year(dod) as year from orders order by year(dod) desc";
        $result =mysqli_query($conn,$select);
        while($row = mysqli_fetch_assoc($result)){
      ?>
      <option><?php echo $row['year']?></option>
      <?php
    }
      ?>

    </select>

    Month:      
    <select name="month">
       <?php
        include 'config.php';                   
        $select = "SELECT distinct monthname(dod) as month from orders order by monthname(dod)";
        $result =mysqli_query($conn,$select);
        while($row = mysqli_fetch_assoc($result)){
      ?>
      <option><?php echo $row['month']?></option>
      <?php
    }
      ?>
    </select>
    <input type="submit" value="Search">
  </form>


<?php
if(isset($_POST['month']) && isset($_POST['year']))
{

$m=$_POST['month'];
$y=$_POST['year'];

?>



<br>
    <div class="table">

<table class="content-table">
  <thead>
    <tr>
      <th>OrderID</th>
      <th>Customer</th>
      <th>Date</th>
      <th>Total</th>     
    </tr>
  </thead>

<?php
        include 'config.php';           
        
        $select = "SELECT * FROM orders where year(dod)='$y' and monthname(dod)='$m'";
        $result =mysqli_query($conn,$select);
        if(!empty($result))
        {
        while($row = mysqli_fetch_assoc($result)){
?>
  <tbody>
    <tr>
      <td><?php echo $row['oid']; ?></td>
      <?php
                require("config.php");
                $cid=$row['cid'];
                $aa="select cname from customerdetails where cid='$cid'";
                $r=mysqli_query($conn,$aa);
                $rrr=mysqli_fetch_assoc($r);
                ?>
               
      <td><?php echo $rrr['cname']; ?></td>
      <td><?php echo $row['dod']; ?></td>
      <td><?php echo $row['total']; ?></td>
      
    </tr>    
  </tbody>
<?php
}

?>
</table>

</div>
<?php
}
?>

<div class="box">

  <?php
  include 'config.php';                  
        $select = "SELECT sum(total) as total,count(oid) as oid FROM orders where year(dod)='$y' and monthname(dod)='$m'";
        $result =mysqli_query($conn,$select);
        $r=mysqli_fetch_assoc($result);       
  ?>
<div class="text">
<h1>Total Amount:<?php echo $r['total']; ?><i class="fas fa-rupee-sign icon"></i></h1>
<h1>Total Orders:<?php echo $r['oid']; ?></h1>
</div>
</div>
<?php
}
?>
</body>

</html>








