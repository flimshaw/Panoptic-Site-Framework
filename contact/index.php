<?php 
$customJS = "jquery.validate.pack.js";

$pathArray = split('/', $_SERVER['PHP_SELF']);
$headerPath = str_repeat("../", sizeof($pathArray) - 2) . "includes/header.php";
$footerPath = str_repeat("../", sizeof($pathArray) - 2) . "includes/footer.php";

include($headerPath); ?>

			<div class="span-19 last" id="body">
			
				<h1>Contact</h1>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
				tristique, ligula id fermentum tincidunt, diam dui hendrerit
				eros, in feugiat tortor felis in massa.</p>
		
				<form id="contactForm" method="post" action="/includes/mailer.php">
					<fieldset>
						<legend>All fields marked <strong>*</strong> are required.</legend>
						<input type="hidden" name="location" value="/contact/thank-you.php" />
						<div>
							<label for="name">Name</label>
							<strong>*</strong><input id="name" name="name" class="required itext" />
						</div>
						
						<div>
							<label for="email">Email</label>
							<strong>*</strong><input id="email" name="email" class="required email itext" />
						</div>
						
						<div>
							<label for="comments">Comments</label>
							<strong>*</strong><textarea id="comments" name="comments" class="required itext"></textarea>
						</div>
						
						<div>
							<input type="submit" class="submit" value="Send Comments" />	
						</div>
						
					</fieldset>
				</form>
	
			</div>

<?php include($footerPath); ?>