<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid #78909c;
     background-color:#212121;
     color:#bcaaa4;
     width:400px;
     height: 25px;
}

  .main1{
  	position: absolute;
    top: 210px;
    left: 550px;
 

    

  }
  .main2{
  	position: absolute;
    top: 150px;
    left: 550px;
   
    

  }
  .main3{
  	position: absolute;
    top: 90px;
    left: 550px;
    
    

  }

  .main4{
    position: absolute;
    top: 500px;
    left: 550px;
    
    

  }

   .table{
  	position: absolute;
    top: 90px;
    left: 50px;
    
    

  }
</style>
</head>
<body style="background:url(admin.jpg) no-repeat; background-size:150%">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trip";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sku,name,price FROM products";
$result = $conn->query($sql);
?>
 <h1> WELCOME ADMIN </h1>


  
<div class="table">
 <?php

if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Name</th><th>PRICE</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["sku"]. "</td><td>" . $row["name"]. "</td><td>" . $row["price"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>
</div> 



<div class="main1">

   <form  name = "insert" METHOD="POST" ACTION = "insert.php">
      <INPUT TYPE = "SUBMIT" style="height:40px;width:90px;color:white;background-color:#616161" name = "insert" value="INSERT ">
    </form>
 </div>

 <div class="main2">

   <form  name = "update" METHOD="POST" ACTION = "update1.php">
      <INPUT TYPE = "SUBMIT" style="height:40px;width:90px;color:white;background-color:#616161" name = "update" value="UPDATE">
    </form>
 </div>

 <div class="main3">

   <form  name = "delet" METHOD="POST" ACTION = "delet.php">
      <INPUT TYPE = "SUBMIT" style="height:40px;width:90px;color:white;background-color:#616161" name = "delet" value="DELETE ">
    </form>
 </div>

 <div class="main4">

   <form  name = "home" METHOD="POST" ACTION = "index.php">
      <INPUT TYPE = "SUBMIT" style="height:40px;width:90px;color:white;background-color:#616161" name = "home" value="HOME ">
    </form>
 </div>

</body>

</html>


