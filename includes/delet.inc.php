<?php
   session_start();
 include '../dbh1.php';
 
  $sku = $_POST['sku'];

  
  $sql = "DELETE FROM products WHERE sku=$sku";
  

  $result=mysqli_query($conn,$sql);

  header("Location: ../admin.php");
 