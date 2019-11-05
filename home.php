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
		s20{
		    font-size:70px;
			
		}
		.welcome{margin-top:40px;text-align:right;margin-right:100px;}
		.pad{padding-top:40px;text-align:right;margin-right:90px;}
		.padleft1{margin-right:100px;}
		.padleft2{margin-right:75px;}
		.padleft3{margin-right:107px;}
		.padleft4{margin-right:48px;}
		.padleft5{margin-right:113px;}
                .wel{text-align:right;margin-right:20px;}
		
	</style>
</head>

<body style="background:url(home.jpg) no-repeat; background-size:100%">
<div class="wel">
<h3><a href="includes/logout.inc.php">Log out</a></h3>
</div>
	<div class="welcome">
		<s20> Home </s20>
	</div>

	<div class="pad">
		<ul>

              <h1><a href="index.php">Places</a></li></h1>
            
              <h1><a href="gallary.php">Gallery</a></li></h1>

              <h1><a href="tripadvisor.php">Review</a></li></h1>
		
	     <h1><a href="tripadvisor.php">About</a></li></h1>


       </ul>
   
	</div>
	<?php
     if(isset($_SESSION['id'])){
     	echo $_SESSION['id'];
     }
     else{
     	//echo" you are not logged in!";
     }

	?>


</body>
	

</html>