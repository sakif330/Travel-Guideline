<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>favicon.ico">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			
			<ul class="nav">
				<?php
				  /* list items with a class of "on" indicate the current section; those links 
				   * are underlined in the CSS to communicate that back to the site visitor;
				   * the $section variable is set in each individual file
				   */
				?>
				<li  <?php echo "on";  ?>"><a href="<?php echo BASE_URL; ?>index.php">HOME</a></li>
				<li  <?php if ($section == "shirts") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>shirts/">PLACES</a></li>
				<li class="contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>contact/">Contact</a></li>
				<li class="search <?php if ($section == "search") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>search/">Search</a></li>
				
				<li  <?php echo "on";  ?>"><a href="<?php echo BASE_URL; ?>includes/logout.inc.php">logout</a></li>
				

						
			</ul>

		</div>

	</div>

	