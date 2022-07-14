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

  max-width: 400px;
  min-width: 600px;
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

    top: 25%;
    left: 50%;
  
    text-align: center;
}
.table2{
       
    text-align: center;
}
h1{
  font-size: 30px;
  
}
</style>

<body>
   <br><br><br><br><br>
    <div class="table">
  <center>
    <h1>DELIVERY DETAILS:</h1>
<table class="content-table">
  <thead>
    <tr>
      <th>OrderID</th>
      <th>Name</th>
      <th>Hno</th>
      <th>Place</th>
      <th>Location</th>
      <th>Landmark</th>
      <th>Phone</th>
    </tr>
  </thead>

<?php
        include 'config.php';           
        $id=$_GET['oid'];
        $select = "SELECT * FROM deliverydetails where oid=$id";
        $result =mysqli_query($conn,$select);
        while($row = mysqli_fetch_assoc($result)){
?>
  <tbody>
    <tr>
      <td><?php echo $row['oid']; ?></td>
      <td><?php echo $row['dname']; ?></td>
      <td><?php echo $row['hno']; ?></td>
      <td><?php echo $row['pin']; ?></td>
      <td><?php echo $row['city']; ?></td>
      <td><?php echo $row['landmark']; ?></td>
      <td><?php echo $row['dphone']; ?></td>
    </tr>    
  </tbody>
<?php
}
?>
</table>
</center>
</div>


<br><br>
 <div class="table2">
  <center>
    <h1>PRODUCT DETAILS:</h1>
<table class="content-table">
  <thead>
    <tr>
      <th>Prodcut ID</th>
      <th>Name</th>
      <th>Quantity</th>     
    </tr>
  </thead>

<?php
        include 'config.php';           
        $id=$_GET['oid'];
        $select = "SELECT * FROM orderdetails where oid=$id";
        $result =mysqli_query($conn,$select);
        while($row = mysqli_fetch_assoc($result)){
?>
  <tbody>
    <tr>
      <td><?php echo $row['pid']; ?></td>
      <?php
                require("config.php");
                $pid=$row['pid'];
                $aa="select pname from products where pid='$pid'";
                $r=mysqli_query($conn,$aa);
                $rrr=mysqli_fetch_assoc($r);
                ?>
                
      <td><?php echo $rrr['pname']; ?></td>
      <td><?php echo $row['quantity']; ?></td>
     
    </tr>    
  </tbody>
<?php
}
?>
</table>
</center>
</div>
</body>

</html>








