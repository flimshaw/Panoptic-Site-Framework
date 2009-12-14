<?php

	$pathArray = split('/', $_SERVER['PHP_SELF']);
	$navPath = str_repeat("../", sizeof($pathArray) - 2) . 'includes/navigation.xml';
	$xml = simplexml_load_file($navPath);

?>


<div class="span-5" id="navigation">
	<?=displayChildrenRecursive($xml);?>
</div>