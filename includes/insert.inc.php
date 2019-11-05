
<?php
   session_start();
 include '../dbh1.php';
 $sku = $_POST['sku'];
 $name = $_POST['name'];
  $img = $_POST['img'];
  $price = $_POST['price'];
  $paypal = $_POST['paypal'];

  $sql="INSERT INTO products(sku,name,img,price,paypal)
  VALUES('$sku','$name','$img','$price','$paypal')";

  $result=mysqli_query($conn,$sql);

  header("Location: ../admin.php");