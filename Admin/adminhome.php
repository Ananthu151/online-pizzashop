 <?php
    include("adminmenu.php")
    ?>


<!DOCTYPE html>
<html>
<head>
   <style>
       body{
           background-color: white;
           margin: 0;
           padding: 0;

       }
      


       .container{
    
  margin: 0 85px;


  justify-content: flex-start;
  position: relative;
  display: flex;
  
  flex-wrap: wrap;

}
.container .box{
  box-shadow:6px 6px 10px -1px rgba(0,0,0,0.15),
        -6px -6px 10px -1px rgba(255,255,255,0.7);
  border-radius: 5px;
  position: relative;
  cursor: pointer;
  width: 233px; 
  overflow: hidden;
  min-height: 150px;
  max-height: 500px;
  background-color:white;
  margin: 20px;
  box-sizing: border-box;
  display: inline-block;

}

h3,h4{ margin: 2px;
  position: relative;

}
p{  margin: 3px;
  position:relative;
  color: gray;
  font-family: sans-serif;
  font-size: 13px;
  font-weight: lighter;
}
.color1{
  background: linear-gradient(to right, #FF4B2B, #FF416C);  
  border-radius: 5PX;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  position: relative;
  width: 233px;
  height: 90px;
}
.color2{
  background: linear-gradient(to right, #00ffa9, #0d4dff);  
  border-radius: 5PX;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  position: relative;
  width: 233px;
  height: 90px;
}
#one{
  color: #0d4dff;

}
.color3{
  background: linear-gradient(to right, #ffe53b, #ff2525);  
  border-radius: 5PX;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  position: relative;
  width: 233px;
  height: 90px;
}
#two{
  color: #ff2525;

}
.color4{
  background: linear-gradient(to right, #a32cdf, #106ad2);  
  border-radius: 5PX;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  position: relative;
  width: 233px;
  height: 90px;
}
#four{
  color: #a32cdf;

}
.color5{
  background: linear-gradient(to right, #1fc9fd, #fc0061);  
  border-radius: 5PX;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  position: relative;
  width: 233px;
  height: 90px;
}
#five{
  color: #fc0061;

}
.color6{
  background: linear-gradient(to right, #ffe53b, #00ffff);  
  border-radius: 5PX;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  position: relative;
  width: 233px;
  height: 90px;
}
#six{
  color: #ffe53b;

}
.color7{
  background: linear-gradient(to right, #00c0ff, #4218b8);  
  border-radius: 5PX;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  position: relative;
  width: 233px;
  height: 90px;
}
#seven{
  color: #4218b8;

}
.color8{
  background: linear-gradient(to right, #fec194, #ff0061);  
  border-radius: 5PX;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  position: relative;
  width: 233px;
  height: 90px;
}
#eight{
  color: #ff0061;

}
h1{
  position: absolute;
  z-index: 1;
  font-size:60px;
  right: 5px;
  top: 25px;
  color: white;
}
h3{
left: 2px;
position: absolute;

top:3px;
position: relative;
z-index: 242;
color:#FF4B2B;
}


p{
  position: absolute;
bottom:  15px;
}
#top{
  position: relative;
  color: #1f92e7;
  font-size: 35px;
  left: 108px;
}
   </style>
</head>
<body>
   
   
<br><br><br>

<h1 id="top">ADMIN DASHBOARD</h1><br>
   <div class="container">
     
    <div class="box">

      <?php
      include("config.php");
      $q="select count(*) as total from products";
      $res=mysqli_query($conn,$q);
      $row=mysqli_fetch_assoc($res); 
       ?>
      <h1><?php echo $row['total'];  ?></h1>
      <div class="color1"></div>
 
      <h3>PRODUCTS:</h3>
      <p>Total Products added in the system</p>
  
     </div>
     

     <div class="box">

      <?php
      include("config.php");
      $q="select count(*) as total from orders";
      $res=mysqli_query($conn,$q);
      $row=mysqli_fetch_assoc($res); 
       ?>
      <h1><?php echo $row['total'];  ?></h1>
      <div class="color2"></div>
 
      <h3 id="one">ORDERS:</h3>
      <p>Total orders placed by the customer</p>
  
     </div>


      <div class="box">

      <?php
      include("config.php");
      $q="select count(*) as total from categories";
      $res=mysqli_query($conn,$q);
      $row=mysqli_fetch_assoc($res); 
       ?>
      <h1><?php echo $row['total'];  ?></h1>
      <div class="color3"></div>
 
      <h3 id="two">CATEGORIES:</h3>
      <p>Total categories in the system</p>
  
     </div>




      <div class="box">

      <?php
      include("config.php");
      $q="select count(*) as total from customerdetails";
      $res=mysqli_query($conn,$q);
      $row=mysqli_fetch_assoc($res); 
       ?>
      <h1><?php echo $row['total'];  ?></h1>
      <div class="color4"></div>
 
      <h3 id="four">CUSTOMERS:</h3>
      <p>Total customers in the system</p>
  
     </div>


     <div class="box">

      <?php
      include("config.php");
      $q="select count(*) as total from places";
      $res=mysqli_query($conn,$q);
      $row=mysqli_fetch_assoc($res); 
       ?>
      <h1><?php echo $row['total'];  ?></h1>
      <div class="color5"></div>
 
      <h3 id="five">PLACES:</h3>
      <p>Total places in the system</p>
  
     </div>

 <div class="box">

      <?php
      include("config.php");
      $q="select count(*) as total from feedback";
      $res=mysqli_query($conn,$q);
      $row=mysqli_fetch_assoc($res); 
       ?>
      <h1><?php echo $row['total'];  ?></h1>
      <div class="color6"></div>
 
      <h3 id="six">FEEDBACKS:</h3>
      <p>Total feedbacks send by the customers</p>
  
     </div>
     <div class="box">

      <?php
      include("config.php");
      $d=date("y-m-d");
      $q="select sum(total) as total from orders where dod='$d'";
      $res=mysqli_query($conn,$q);
      $row=mysqli_fetch_assoc($res); 
       ?>
      <h1><?php echo $row['total'];  ?></h1>
      <div class="color7"></div>
 
      <h3 id="seven">TOTAL:</h3>
      <p>Today's total sales amount</p>
  
     </div>

      <div class="box">

      <?php
      include("config.php");
      $d=date("y-m-d");
      $q="select count(*) as total from orders where status!='Delivered' ";
      $res=mysqli_query($conn,$q);
      $row=mysqli_fetch_assoc($res); 
       ?>
      <h1><?php echo $row['total'];  ?></h1>
      <div class="color8"></div>
 
      <h3 id="eight">DELIVERY:</h3>
      <p>Total pending deliveries</p>
  
     </div>

   </div>












</body>

</html> 