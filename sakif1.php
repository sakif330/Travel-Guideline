<?php
  session_start();
?>
<html>
<head>

<title>Travel Assistant</title>
	<link rel="icon" type= "image/png" href="head.png"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<style type="text/css">
		a{text-decoration:none;}
		s10{
		    font-size:100px;
			
		}
		.welcome{text-align:left}
		.pad{padding-top:50px;}
		.padleft{padding-left:10px;}
		
	</style>
</head>
<body style="background:url(travel-021.jpg) no-repeat; background-size:130%">
<div class="welcome">
<s10 style= "color:#FFFFFF"> Welcome </s10>
</div>
  <div class="pad">
              <?php
               echo"<form action'includes/login1.inc.php' method'POST'>

               <input type'text' name'uid' placeholder'username'>
		<br><br>
               <input type'password' name'pwd' placeholder'password'>
		<br><br>
               <button type'submit'>login</button>
               </form>"
              ?>
     
<br>
 <p>Don't have an account ?  <a href="signup.php">SIGN UP</a>  </p>
</div>

</body>
</html>