<?php 
$pathArray = split('/', $_SERVER['PHP_SELF']);
$headerPath = str_repeat("../", sizeof($pathArray) - 2) . "includes/header.php";
$footerPath = str_repeat("../", sizeof($pathArray) - 2) . "includes/footer.php";

include($headerPath); ?>
			
			<div class="span-19 last" id="body">
			
				<h1>404: Page Not Found</h1>
				
				<p>Sorry, but the page you're looking for couldn't be located.</p>
	
			</div>
			
<?php include($footerPath); ?>