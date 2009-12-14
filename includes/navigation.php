<?php

	$pathArray = split('/', $_SERVER['PHP_SELF']);
	$navPath = str_repeat("../", sizeof($pathArray) - 2) . 'includes/navigation.xml';
	$xml = simplexml_load_file($navPath);

	displayChildrenRecursive($xml);
	
?>