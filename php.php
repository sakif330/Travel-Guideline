<html>
 <head>
   <style type="text/css">
   	

   </style>

   <?php

   if (isset($_POST['Submit1'])) {

$selected_radio = $_POST['gender'];
print $selected_radio;

}

   
 // implode
       $text_line = array('hellow','sexy','bitch');
   $a=implode("|",$text_line);
   echo $a;


//explode
     $explode="i have nothing to say";
     $explode= explode(" ",$explode);
     for($i=0;$i<count($explode);$i++){
        print '<br>';
     	print $explode[$i];
     }
  //foreach loop
     $full_name = array( );
$full_name["David"] =1;
$full_name["Nick"] = 2;
$full_name["Roger"] = 3;
$full_name["Richard"] = 4;
foreach ($full_name as $s => $key_value) {
print $s."=".$key_value."<br>";


}

?>
 </head>
   
 <body>
 <a href="http://www.w3schools.com/html/html_links.asp">newinput</a>
 
 <Form name ="form1" Method ="Post" ACTION ="php.php">
<Input type = 'Radio' Name ='gender' value= 'male'>male
<Input type = 'Radio' Name ='gender' value= 'female'>female
<P>
<Input type = "Submit" Name = "Submit1" Value = "Select a Radio Button">
</FORM>




 </body>

</html>