

	<html>
 
 <head>
    <h1>ASSIGNMENT</h1>
   
    <h2>Table calculate</h2>

     <style type="text/css">
      h1{
      	background-color: orange;
      } 
      h2{
      	background-color: blue;
      	font-style: italic;
      }   


      body{
      	
      	background-color: lightgreen;
      
      }
      form{
         background-color: white;
      }


      </style>

      <?php
 
  	
	$start = 0;
	$end = 0;
	$multy = 0;
	$result   = 1;

 	 if(isset($_POST['createtable'])) {
		$start= $_POST['start'];
	      $end = $_POST['end'];
	      $multy= $_POST['multy'];

	  for($x = $start;$x<=$end;$x++) {
		  $result=$x*$multy;
          echo "$x";
          echo "x";
          echo "$multy";
          echo "="; 
          echo "$result";
          echo "<br><br><br>";         
		
    }
		}
	    
	?>
	
             
   </head>
 <body>

  
   <form  name = "Calculator" METHOD="POST" ACTION = "agn.php">
	starting number  <INPUT TYPE = "INT" name = "start" value="">

   	end Number <INPUT TYPE = "INT" name= "end" value="">
	
	by which number you want to multiply<INPUT TYPE = "INT" name = "multy" value="">
	
	<INPUT TYPE = "SUBMIT" name = "createtable" value="show table ">
    
    </form>


   </body>
</html>