<?php

	require_once("../inc/config.php");
	require_once(ROOT_PATH . "inc/products.php");

	// retrieve current page number from query string; set to 1 if blank
	if (empty($_GET["pg"])) {
		$current_page = 1;
	} else {
		$current_page = $_GET["pg"];
	}
	// set strings like "frog" to 0; remove decimals
	$current_page = intval($current_page);

	$total_products = get_details_count();
	$products_per_page = 8;
	$total_pages = ceil($total_products / $products_per_page);

	// redirect too-large page numbers to the last page
	if ($current_page > $total_pages) {
		header("Location: ./?pg=" . $total_pages);
	}

	// redirect too-small page numbers (or strings converted to 0) to the first page
	if ($current_page < 1) {
		header("Location: ./");
	}

	// determine the start and end shirt for the current page; for example, on
	// page 3 with 8 shirts per page, $start and $end would be 17 and 24
	$start = (($current_page - 1) * $products_per_page) + 1;
	$end = $current_page * $products_per_page;
	if ($end > $total_products) {
		$end = $total_products;
	}

	$products = get_details_subset($start,$end);

?><?php 
$pageTitle = "places to visit with us ";
$section = "details";
include(ROOT_PATH . 'inc/header.php'); ?>

		<div class="section shirts page">

			<div class="wrapper">

				<h1>ALL THE PLACES YOU CAN VISIT WITH US </h1>

				<?php include(ROOT_PATH . "inc/partial-details-navigation.php"); ?>

				<ul class="products">
					<?php
						foreach($details as $detail) {
							include(ROOT_PATH . "inc/partial-details-list-view.php");
						}
					?>
				</ul>

				<?php include(ROOT_PATH . "inc/partial-details-navigation.html.php"); ?>

			</div>

		</div>

<?php include(ROOT_PATH . 'inc/footer.php') ?>