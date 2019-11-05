<?php
require('./fpdf.php');
 
$name=$_POST['name'];


$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,100,"welcome {$name}");

$pdf->Output();
?>