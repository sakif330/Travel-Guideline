<html>
 
 <head>
      <?php
 
  	$i     = 0;
	$First = 0;
	$Last  = 0;
	$Multi = 0;
	$Ans   = 0;

 	 if(isset($_POST['done'])) {
		$First= $_POST['Frst'];
	      $Last = $_POST['last'];
	      $Multi= $_POST['Mul'];

	  for($i = $First;$i<=$Last;$i++) {
		print("".$i);
		print(" x ");
		print(" ".$Multi);
		$Ans = $i*Multi;
		print(" = ".$Ans);
		echo"</br>";
		}
	    }
	?>
		
             
   </head>
 <body>
   <form  name = "Calculator" METHOD="POST" ACTION = "home2.php">
	First Number <INPUT TYPE = "INT" name = "first" value=""><br></br>
   	Last Number <INPUT TYPE = "INT" name= "last" value=""><br></br>
	Multiply Them By <INPUT TYPE = "INT" name = "Mul" value="">
	<INPUT TYPE = "SUBMIT" name = "done" value="Multiply">
    </form>
   </body>
</html>