<?

while (ob_get_level())
ob_end_clean();
header("Content-Encoding: None", true);

?>
<?php 
require_once("../inc/config.php");
	require_once("../inc/products.php");

	
if (!isset($_GET["id"])) {
	$product_id = $_GET["id"];
    $product=get_product_single($product_id);
    $details=get_details_single($product_id);
    $details=0;
    
}
?>
<h><?php echo $details; ?></h>

