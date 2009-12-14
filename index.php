<?php 
$pathArray = split('/', $_SERVER['PHP_SELF']);
$headerPath = str_repeat("../", sizeof($pathArray) - 2) . "includes/header.php";
$footerPath = str_repeat("../", sizeof($pathArray) - 2) . "includes/footer.php";

include($headerPath); ?>
			
			<div class="span-19 last" id="body">
			
				<h1>Headline</h1>
				
				<p>Lorem <em>ipsum dolor sit amet</em>, consectetur adipiscing elit. Sed
				tristique, ligula id fermentum tincidunt, diam dui hendrerit
				eros, in feugiat tortor felis in massa. Phasellus non lorem
				ante, sit amet dapibus lorem. Pellentesque porttitor faucibus
				sapien, a dignissim quam consequat non. Quisque scelerisque erat
				id velit luctus sit amet feugiat odio dignissim. Aliquam lacinia
				feugiat vestibulum.</p>
		
				<p><strong>Pellentesque</strong> habitant morbi tristique senectus et netus et
				malesuada fames ac turpis egestas. Fusce cursus, eros ut
				vestibulum blandit, orci nibh posuere ligula, vel suscipit orci
				nisl eu lectus. Nunc vitae tortor eu mi aliquam venenatis. Nam
				vel ligula sed erat tempus commodo.</p>
				
				<ul>
					<li>test 1</li>
					<li>test 1</li>
					<li>test 1</li>
					<li>test 1</li>
				</ul>
	
			</div>
			
<?php include($footerPath); ?>