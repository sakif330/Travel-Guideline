<?php 

	require_once("../inc/config.php");
	require_once("../inc/products.php");
	//$products = get_products_all();

// if an ID is specified in the query string, use it
if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
    $details=get_details_single($product_id);
}
                     
					       
		 require('./fpdf.php');
				 
				$name=$details['hotel'];
				$pdf=new FPDF();
				$pdf->AddPage();
				$pdf->SetFont('Arial','B',16);
				$pdf->Cell(40,100,"welcome {$name}");

				$pdf->Output();			           
					        
					       
                            

// a $product will only be set and not false if an ID is specified in the query
// string and it corresponds to a real product. If no product is
// set, then redirect to the shirts listing page; otherwise, continue
// on and display the Shirt Details page for that $product


 include("../inc/footer.php");?>
