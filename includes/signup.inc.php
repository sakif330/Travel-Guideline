<?php
   session_start();
 include '../dbh.php';
 







 $first = test_input($_POST['first']);
 $last = test_input($_POST['last']);
 $uid = test_input($_POST['uid']);
 $pwd = test_input($_POST['pwd']);





// define variables and set to empty values

 if (empty($_POST['first'])) {
    header("Location: ../signup.php");
    $nameErr = "Name is required";

  } 
  else {
    $name = test_input($_POST["first"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    	header("Location: ../signup.php");
      $nameErr = "Only letters and white space allowed";
    }
  }
 if ($_POST["first"]) 
  {
    $name = test_input($_POST["first"]);
    // check if name only contains letters and whitespace
    if (preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      header("Location: ../login.php");
    }
  } 





   if (empty($_POST['last'])) {
    header("Location: ../signup.php");
    echo "Name is required";

  } 
  else {
    $name = test_input($_POST["last"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    	header("Location: ../signup.php");
      echo "Only letters and white space allowed";
    }
  }
 if ($_POST["first"]) 
  {
    $name = test_input($_POST["last"]);
    // check if name only contains letters and whitespace
    if (preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo "Only letters and white space allowed";
      header("Location: ../login.php");
    }
  } 




   if (empty($_POST['uid'])) {
    header("Location: ../signup.php");
    echo "Name is required";

  } 
  
 else if ($_POST["uid"]) 
  {
    
    
      header("Location: ../login.php");
    
  } 


   if (empty($_POST['pwd'])) {
    header("Location: ../signup.php");
    echo "Name is required";

  } 
  
 else if ($_POST["pwd"]) 
  {
    
    
      header("Location: ../login.php");
    
  } 






function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



  $sql="INSERT INTO user(first,last,uid,pwd)
  VALUES('$first','$last','$uid','$pwd')";

  $result=mysqli_query($conn,$sql);

  //header("Location: ../login.php");
  ?>