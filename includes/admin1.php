<?php
  session_start();
 
 
  $uid = $_POST['name'];
  $pwd = $_POST['pass'];

 if(($uid=='admin'or$uid=='main') and ($pwd="123" and $pwd="345") ){
  header("Location: ../admin.php");
}
  else{
    header("Location: ../login.php");
  }
  ?>