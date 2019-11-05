
<html>
 
 <head>
   

     <style type="text/css">
      .title1{
        background-color: orange;
        width:220px;
        height:70px;
        margin-top: 10px;
        margin-left: 600px;
        margin-bottom: 10px;
        border:5px black solid;
      } 
      .title2{
        background-color: lightblue;
        font-style: italic;
        width:720px;
        height:70px;
        margin-top: 10px;
        margin-left: 300px;
        margin-bottom: 10px;

        border:5px black solid;
      }   

      .main{
        background-color: brown;
        font-style: italic;
        width:400px;
        height:200px;
        margin-top: 100px;
        margin-left: 500px;
        margin-bottom: 10px;

        border:5px black solid;
      }   


      body{
        
        background-color: grey;
        background-image: url('1.jpg');
      
      }
      


      </style>

      <?php
 
 //include "php.php";
    
  $start = 0;
  $end = 0;
  $multy = 0;
  $result   = 1;

   if(isset($_POST['createtable'])) {
    $start= $_POST['start'];
        $end = $_POST['end'];
        $multy= $_POST['multy'];
        include "php.php";

    for($x = $start;$x<=$end;$x++) {
      $result=$x*$multy;
          echo "$x";
          echo " x ";
          echo "$multy";
          echo "="; 
          echo "$result";
          echo "<br>";         
    
    }
    }
      
  ?>
  
             
   </head>
 <body>
   <div class="title1">
     <h1>ASSIGNMENT</h1>
   </div>

   <div class="title2">   
    <h2>Table calculate</h2>
  </div>
   
  

  <div class="main">

   <form  name = "Calculator" METHOD="POST" ACTION = "agn.php">
  <br>starting number  <INPUT TYPE = "INT" name = "start" value=""><br><br>

  end Number <INPUT TYPE = "INT" name= "end" value=""><br><br>
  
  by which number you want to multiply<INPUT TYPE = "INT" name = "multy" value=""><br>
  
  <INPUT TYPE = "SUBMIT" name = "createtable" value="show table ">
    
    </form>
    </div>


   </body>
</html>