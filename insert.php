<html>
<head>
    <title>Travel Assistant</title>
	<link rel="icon" type= "image/png" href="head.png"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<style type="text/css">
		s10{
		    font-size:100px;
			
		}
		s20{
		    font-size:70px;
			
		}
		.welcome{margin-top:40px;text-align:right;margin-right:30px;}
		.pad{padding-top:40px;text-align:right;margin-right:90px;}
		.padleft1{margin-right:150px;}
		.padleft2{margin-right:135px;}
		.padleft3{margin-right:145px;}
		.padleft4{margin-right:137px;}
		.padleft5{margin-right:117px;}
		.padleft6{margin-right:25px;}
		
	</style>
</head>

<body style="background:url(admin.jpg) no-repeat; background-size:100%">



   
   <?php
     if(isset($_SESSION['id'])){
     	echo $_SESSION['id'];
     }
     else{
     	
     }

   ?>

   <br><br>
<div class="pad">
				
			
   <form action="includes/insert.inc.php" method="POST">
      <div class="padleft1">
				<h4 style= "color:#FFFFFF"> ID </h4>
			</div>
			<div class="padleft6">
			<input type="text" name="sku" value="">
			</div>
		
			<div class="padleft2">
				<h4 style= "color:#FFFFFF"> Name </h4>
			</div>
			<div class="padleft6">
			<input type="text" name="name" value="">  
			</div> 
			<div class="padleft3">
				<h4 style= "color:#FFFFFF"> Img</h4>
			</div>
			<div class="padleft6">
			<input type="text" name="img" value=""> 
			</div>  
			<div class="padleft4">
				<h4 style= "color:#FFFFFF"> Price</h4>
			</div>
			<div class="padleft6">
			<input type="text" name="price" value=""> 
			</div> 

			  
			 
			<br><br><br>
			<div class="padleft5">
				<button type="submit">insert</button>
			</div>
    </form>  

  </div>


</body>

</html>
