<?php 
$pathArray = split('/', $_SERVER['PHP_SELF']);
$headerPath = str_repeat("../", sizeof($pathArray) - 2) . "includes/header.php";
$footerPath = str_repeat("../", sizeof($pathArray) - 2) . "includes/footer.php";

include($headerPath); ?>

			<div class="span-19 last" id="body">
			
				<h1>Page Template</h1>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
				tristique, ligula id fermentum tincidunt, diam dui hendrerit
				eros, in feugiat tortor felis in massa. Phasellus non lorem
				ante, sit amet dapibus lorem. Pellentesque porttitor faucibus
				sapien, a dignissim quam consequat non. Quisque scelerisque erat
				id velit luctus sit amet feugiat odio dignissim. Aliquam lacinia
				feugiat vestibulum.</p>
		
				<p>Pellentesque habitant morbi tristique senectus et netus et
				malesuada fames ac turpis egestas. Fusce cursus, eros ut
				vestibulum blandit, orci nibh posuere ligula, vel suscipit orci
				nisl eu lectus. Nunc vitae tortor eu mi aliquam venenatis. Nam
				vel ligula sed erat tempus commodo.</p>
	
			</div>

<?php include($footerPath); ?>