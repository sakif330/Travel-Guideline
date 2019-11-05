<?

while (ob_get_level())
ob_end_clean();
header("Content-Encoding: None", true);

?>

<?php 

	require_once("../inc/config.php");
	require_once("../inc/products.php");
	//$products = get_products_all();

// if an ID is specified in the query string, use it
if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
    $product=get_product_single($product_id);
    $details=get_details_single($product_id);
     $details['hotel'];
    
}
                     
					       
					           
//$hotel=$details['hotel'];
//$price=$products['price'];					        
					       
                           

// a $product will only be set and not false if an ID is specified in the query
// string and it corresponds to a real product. If no product is
// set, then redirect to the shirts listing page; otherwise, continue
// on and display the Shirt Details page for that $product
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	require('./fpdf.php');
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trip";

$db_handle = mysql_connect( $servername, $username, $password);
      $db_found = mysql_select_db($dbname, $db_handle);

     // require("\inc\database.php");


if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
    $product=get_product_single($product_id);
    $details=get_details_single($product_id);
    //$name=$details['hotel'];
}

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
	//require('./dbh1.php');
				 ob_start();

				 
				//$name=$details['hotel'];
				 $item=1;
                $pdf=new FPDF();
			    $pdf->AddPage();
				$pdf->SetFont('Arial','B',16);
				$pdf->image('../project/head.png',10,8,10,13,'PNG');
				$pdf->Cell(18,10,'',0);
				$pdf-> cell(150,10,'Booking Confirmation',0);
				$pdf->SetFont('Arial','',10);
				$pdf->Cell(50,10,'Date:'.date('d-m-y').'',0);
				$pdf->SetFont('Arial','B',25);
				$pdf->Ln(15);
				$pdf->Cell(0,70,'Thank You For Confirmation',0,0,"C");
				$pdf->SetFont('Arial','B',20);
				$pdf->Ln(5);

				$pdf->Cell(0,90,'Your Order ID:100013 ',0,0,"C");
				$pdf->Ln(5);

				$pdf->Cell(0,110,'Enjoy The World With Us',0,0,"C");

				
				//$pdf->Cell(40,100,"w");
				//$pdf->AddCol('hotel',40,'','C');
				//$pdf->table('select hotel from details order by sku');
				//$pdf->Cell(15,8,'item',0);
				//$pdf->cell(80,8,'number',0);
				//$pdf->cell(40,8,'Details',0);
				//$pdf->SetFont('Arial','B',16);
				//$mno=$_SESSION['sku'];
				/*$abc=mysql_query("select * from  details where sku=$mno");
				
				if (!$abc) { // add this check.
    die('Invalid query: ' . mysql_error());
}
				//$xyz=mysql_fetch_array($abc);
				while($xyz=mysql_fetch_array($abc)){
					
					//$pdf->cell(80,8,$abc2['flight'],0);
				$pdf->cell(40,8,$xyz['Duration'],0);
				//	$pdf->Ln(8);

				}*/
				//$pdf->cell(40,8,$item,0);



				$pdf->Output();
				ob_end_flush(); 
}

else{
if (empty($product)) {
	header("Location: " . BASE_URL . "shirts/");
	exit();
}

$section = "shirts";
$pageTitle = $product["name"];
include( "../inc/header.php"); 
?>

      
		<div class="section page">

			<div class="wrapper">

				<div class="breadcrumb"><a href="<?php echo BASE_URL; ?>shirts/">places</a> &gt; <?php //echo $product["name"]; ?></div>

				<div class="shirt-picture">
					<span>
					   
						<img src="<?php echo BASE_URL . $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">

					</span>
				</div>

				<div class="shirt-details">

					<h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>
					
                   
					

                     <iframe width="560" height="315" src="https://www.youtube.com/embed/RcmrbNRK-jY" frameborder="0" allowfullscreen></iframe>
                     
                    
                   
                    
                    
					
					

					<p class="note-designer">* traveling is food for the soul.</p>

				</div>

			</div>

		</div>
		<h> DETAILS </h>
		<div class="details">
		<h1><span class="price">DURATION : <?php echo $details["Duration"]; ?></span></h1> <br><br>
		<h1><span class="price">FLIGHT  : <?php echo $details["flight"]; ?></span></h1> <br><br>

		<h1><span class="price"> HOTEL : <?php echo $details["hotel"]; ?></span></h1> <br><br>
		
		<h1><span class="price">SIGHT :  <?php echo $details["sight"]; ?></span></h1> <br><br>
		<h1><span class="price">FOOD : <?php echo $details["food"]; ?></span></h1> <br><br>

		      
         </div> 

         <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

          <input type="submit" value="confirm" name="confirm">
         </form>
         
         


  <?php
   }    
                
                

       
          /*require('./fpdf.php');
				 
				$name=$details['hotel'];


				$pdf=new FPDF();
				$pdf->AddPage();
				$pdf->SetFont('Arial','B',16);
				$pdf->Cell(40,100,"welcome {$name}");

				$pdf->Output();
				*/
				

				



				
		

 include("../inc/footer.php"); 
