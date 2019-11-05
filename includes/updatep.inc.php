<?php
   session_start();
 include '../dbh1.php';
 
  $sku = $_POST['sku'];
  $name=$_POST['price'];
  //$price=$_POST['price'];

  
  $sql = "UPDATE products SET price='$name' WHERE sku=$sku";
  //$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

  $result=mysqli_query($conn,$sql);

  header("Location: ../admin.php");
