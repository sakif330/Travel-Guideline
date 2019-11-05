<?php 
require_once("\inc\config.php");
require_once("\inc\products.php");
	
if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
    $product=get_product_single($product_id);
    $details=get_details_single($product_id);
}
?>
<?php
ob_start();
require('./fpdf.php');
$name=$product['name'];
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,100,"welcome {$name}");
$pdf->Output();
ob_start();
?>