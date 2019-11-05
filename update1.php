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
		    font-size:35px;
			
		}
		.welcome{margin-top:140px;text-align:right;margin-right:153px;}
		.pad{padding-top:40px;text-align:right;margin-right:90px;}
		.padleft1{margin-right:100px;}
		.padleft2{margin-right:100px;}
		.padleft3{margin-right:107px;}
		.padleft4{margin-right:116px;}
		.padleft5{margin-right:113px;}
		
	</style>
</head>

<body style="background:url(admin.jpg) no-repeat; background-size:100%">
<div class="welcome">
		<s20 style= "color:#FFFFFF"> Choose </s20>
	</div>


   
   <?php
     if(isset($_SESSION['id'])){
     	echo $_SESSION['id'];
     }
     else{
     	
     }

   ?>

   <br>
<div class="pad">
				
			
   <form action="update.php" method="POST">
      
			
			
			<div class="padleft5">
				<button type="submit">Name</button>
			</div>
    </form>  

    <form action="updateprice.php" method="POST">
      <div class="padleft1">
				
			</div>
			
			
		    <br>
			<div class="padleft4">
				<button type="submit">Price</button>
			</div>
    </form>  

    

  </div>


</body>

</html>