<?php
  include'header.php';
?>
<html>
   <body style="background:url(travel-021.jpg) no-repeat; background-size:130%">
   
   <?php
     if(isset($_SESSION['id'])){
     //	echo $_SESSION['id'];
      //include'home.php';
      header("Location: ../index.php");
     }
     else{
     //	echo" password wrong";
     }
    

   ?>
   <h> FOR ADMIN ONLY </h><br><br>
    <form  name = "admin" METHOD="POST" ACTION = "includes/admin1.php">
       NAME:<input type="text" name="name" value="" ><br><br>
       password:<input type="password" name="pass" value="" ><br><br>
  
 
  
       <INPUT TYPE = "submit" name = "ADMIN" value="ADMIN"  style="height:40px;width:90px;color:white;background-color:#616161">
    
    </form>
   


</body>

</html>

