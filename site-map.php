<?php 
$pathArray = split('/', $_SERVER['PHP_SELF']);
$headerPath = str_repeat("../", sizeof($pathArray) - 2) . "includes/header.php";
$footerPath = str_repeat("../", sizeof($pathArray) - 2) . "includes/footer.php";

include($headerPath); ?>
			
			<div class="span-19 last" id="body">
			
				<h1>Site Map</h1>
				
				<?php include(str_repeat("../", sizeof($pathArray) - 2) . "includes/navigation.php");?>
	
			</div>
			
<?php include($footerPath); ?>