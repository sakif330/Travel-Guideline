<!DOCTYPE HTML>  
<html>
<head>





    <title>Travel Assistant</title>
	<link rel="icon" type= "image/png" href="head.png"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<style type="text/css">

	    
        .error {color: #FF0000;}

		s10{
		    font-size:100px;
			
		}
		s20{
		    font-size:70px;
			
		}
		.welcome{margin-top:40px;text-align:right;margin-right:30px;}
		.pad{padding-top:40px;text-align:right;margin-right:90px;}
		.padleft1{margin-right:100px;}
		.padleft2{margin-right:100px;}
		.padleft3{margin-right:107px;}
		.padleft4{margin-right:48px;}
		.padleft5{margin-right:113px;}
		
	</style>
</head>

<body style="background:url(signup.jpg) no-repeat; background-size:100%">
<div class="welcome">
		<s20 style= "color:#FFFFFF"> Sign Up </s20>
	</div>


   
   <?php
     if(isset($_SESSION['id'])){
     	echo $_SESSION['id'];
     }
     else{
     	
     }

   ?>

   <br><br>
<div class="pad">
				
	<p><span class="error">* required field.</span></p>		
   <form action="includes/signup.inc.php" method="POST">
      <div class="padleft1">
				<h4 style= "color:#FFFFFF"> First Name       * </h4>

			</div>
		
			<input type="text" name="first" value="">
		
		
			<div class="padleft1">
				<h4 style= "color:#FFFFFF"> Last Name    * </h4>
			</div>
			<input type="text" name="last" value="">   
			<div class="padleft2">
				<h4 style= "color:#FFFFFF"> User Name     *</h4>
			</div>
			<input type="text" name="uid" value="">   
			<div class="padleft3">
				<h4 style= "color:#FFFFFF"> Password      *</h4>
			</div>
			<input type="password" name="pwd" value="">   
			 
			<br><br><br>
			<div class="padleft5">
				<button type="submit">Sign Up</button>
			</div>
    </form>  

  </div>


</body>

</html>
