<?php 
$customJS = "jquery.validate.pack.js";

$pathArray = split('/', $_SERVER['PHP_SELF']);
$headerPath = str_repeat("../", sizeof($pathArray) - 2) . "includes/header.php";
$footerPath = str_repeat("../", sizeof($pathArray) - 2) . "includes/footer.php";

include($headerPath); ?>

			<div class="span-19 last" id="body">
			
				<h1>Thank You!</h1>
				
				<p>Thanks for your message.  Someone will respond to you shortly.</p>
	
			</div>

<?php include($footerPath); ?>