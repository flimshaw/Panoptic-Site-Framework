<?php

// Define custom functions

// Get a clean page name for the current page
function getPageName() {
	$myName = basename($_SERVER['PHP_SELF']);
	if($myName == "index.php") {
		$myName = split("/", $_SERVER['PHP_SELF']);
		$myName = $myName[sizeof($myName) - 2];
	} else {
		$myName = preg_replace(array("/.php/", "/-/"), array("", "-"), $myName);
	}
	return $myName;
}

function getPageTitle($pageTitle) {
	if($pageTitle == "") {
		$pageTitle = ucwords(getPageName());
		$pageTitle = str_replace("-", " ", $pageTitle);
	}
	if($pageTitle != "") return $pageTitle . " :: ";
}

// Check for current page
function isCurrent($pageName) {
	$currentPage = getPageName();
	if($currentPage == $pageName) return ' class="current"';
}

// Check for current section
function dirCurrent($dirName, $level = 1) {
	$myName = split("/", $_SERVER['PHP_SELF']);
	array_shift($myName);
	if($dirName == $myName[0]) return ' class="current"';
}

// get current directory name
function getDirectory() {
	$myDir = split("/", $_SERVER['PHP_SELF']);
	array_shift($myDir);
	return $myDir[0];
}

// get custom javascript
function getJavascript() {
	global $customJS;
	$jsPath = "/js/";
	if($customJS) {
		$jsArray = explode(",", $customJS);
		while($jsFile = array_shift($jsArray)) { 
			$jsHTML .= '<script type="text/javascript" src="' . $jsPath . $jsFile . '"></script>' . "\n";
		}
		return $jsHTML;
	}
}

// get META tags
function getMetaTags() {
	global $metaDescription, $metaKeywords;
	if($metaDescription) {
		$metaHTML .= '<meta name="description" content="' . $metaDescription . '" />' . "\n";
	}
	if($metaKeywords) {
		$metaHTML .= '<meta name="keywords" content="' . $metaKeywords . '" />' . "\n";
	}
	return($metaHTML);
}

// Build Breadcrumbs from path
function getBreadcrumbs() {
	$myPadding = 0; // if we're in a file instead of a directory, we've gotta pad the ../'s by one
	$mySeparator = '&raquo;'; // set our separator variable
	$myCrumbs = split("/", $_SERVER['PHP_SELF']); // get the path
	$myKey = 0; // make a placeholder variable
	//array_shift($myCrumbs); // pop the first empty value off the array
	array_shift($myCrumbs); // pop the SPT off the array while we're at it
	echo '<a href="/">Home</a> ' . $mySeparator . ' ';
	if($myCrumbs[sizeof($myCrumbs) - 1] == "index.php") {
		array_pop($myCrumbs); // if we're at an index page, we don't want to use the file name as the final piece of the puzzle
		$myPadding = 1;
	}
	$myDepth = sizeof($myCrumbs); // find out how deep we are
	while($item = array_shift($myCrumbs)) { // while there's items in the path, get 'em
		$myKey++; // increment our key
		$myDots = ""; // blank our ../ variable
		$itemName = preg_replace(array("/.php/", "/-/"), array("", " "), $item); // make a clean version for the link target
		$itemName = ucwords($itemName); // capitalize each word
		if($myKey != $myDepth) {  // if we aren't on the final key
			for($i = 0; $i < (($myDepth + $myPadding) - $myKey); $i++) { // build out our ../'s
				$myDots .= "../";
			}
			echo '<a href="' . $myDots . $item . '">' . $itemName . '</a> ' . $mySeparator . ' '; // build our link
		} else { // if it's the current page, we don't want to link it
			echo $itemName;
		}	
	}
}

function displayChildrenRecursive($xmlObj,$depth=0) {
	  $startFlag = True;
	  foreach($xmlObj->children() as $child) {
		if($startFlag) {
			echo "\n";
			echo str_repeat(" ", $depth*2 + 2);
			echo "<ul>\n";
			$startFlag = False;
		}
		echo str_repeat(" ", ($depth*2 + 4));
		if($child['hidden'] != "true") {
			echo '<li' . isThisCurrent($child['href'], $depth, $child) . '><a href="' . $child['href'] . '">'. $child['title'] . '</a>';
			if(sizeof($child->children()) == 0) echo "</li>\n";
		}
		displayChildrenRecursive($child,$depth+1);
	  }
	  if(!$startFlag) {
	    echo str_repeat(" ", $depth*2 + 2);
		echo "</ul>\n";
		if($depth > 1) {
			echo str_repeat(" ", $depth*2 + 2);
			echo "</li>\n";
	  	}
	  }
	}
	
	function isFileCurrent($href) {
		if(basename($_SERVER['PHP_SELF']) == "index.php") {
			$pathVar = dirname($_SERVER['PHP_SELF']) . '/';
		} else {
			$pathVar = $_SERVER['PHP_SELF'];
		}
		if($pathVar == $href) return ' class="current"';
	}
	
	function isThisCurrent($href, $depth=0, $xmlObj) {
		$pathArray = split('/', $_SERVER['PHP_SELF']);
		$hrefArray = split('/', $href);
		if($pathArray != '') {
			if($pathArray[sizeof($pathArray)-1] == "index.php" && sizeof($pathArray) == sizeof($hrefArray)) {
				if($href == dirname($_SERVER['PHP_SELF']) . '/') {
					return ' class="current"';
				}
			} else if($_SERVER['PHP_SELF'] == $href) {
				return ' class="current"';
			} else if($pathArray[$depth+1] == $hrefArray[$depth+1]) {
				if($xmlObj->navItem[0]['hidden'] == "true") {
					return ' class="current"';
				} else {
					return ' class="subCurrent"';
				}
			}
		}
	}

?>