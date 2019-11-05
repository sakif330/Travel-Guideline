<?php
  /*session_start();
 include '../dbh.php';
 
  //$uid = $_POST['uid'];
  //$comment = $_POST['message'];

  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $comment = trim($_POST["message"]);

   

 $sql="INSERT INTO com(comment)
  VALUES('$comment')";

  $result=$conn->query($sql);

  if(!$row=mysqli_fetch_assoc($result )){
         echo" password is incorrect";
  }

  else{
  	$_SESSION['id']=$row['id'];
  }
 // header("Location: ../thankyou.php");


    if ($name == "" OR $email == "" OR $message == "") {
        header("Location: \contact\index.php");
    }else{
  header("Location: thankyou.php/");
}
*/

   session_start();
 include '../dbh.php';
 







 //$first = test_input($_POST['name']);
 $last = test_input($_POST['email']);
 $com = test_input($_POST['message']);
 





// define variables and set to empty values

 





   
 
if (empty($_POST['message'])) {
    header("Location: /contact/index.php");
    echo "Name is required";

  } 
  
 else if ($_POST["message"]) 
  {
    
    
      //header("Location: ../login.php");
    header("Location: /contact/t.php");
  } 


   if (empty($_POST['email'])) {
    header("Location: /contact/index.php");
    echo "Name is required";

  } 
  
 else if ($_POST["email"]) 
  {
    
    
      //header("Location: ../login.php");
    header("Location: /contact/t.php");
  } 


   






function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



 $sql="INSERT INTO com(comment)
  VALUES('$comment')";

  $result=mysqli_query($conn,$sql);

  //header("Location: ../login.php");
  ?>


  ?>