<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?=getPageTitle()?>Site Name</title>
	<?=getMetaTags()?>
	
    <!-- Framework CSS -->
    <link rel="stylesheet" href="/css/blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="/css/blueprint/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="/css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
	<link rel="stylesheet" href="/css/style.css" type="text/css" />
	
	<script type="text/javascript" src="/js/jquery-1.3.2.min.js"></script>
	<?=getJavascript()?>
    <script type="text/javascript" src="/js/siteScripts.js"></script>
    
  </head>
  <body>

    <div class="container">
    
		<div class="span-24 last" id="header">
			<h1>Site Header</h1>
		</div>
		
		<div class="span-24 last" id="content">
		
			<div class="span-5" id="navigation">
				<?php include("navigation.php"); ?>
			</div>
			
			<div class="span-19 last" id="breadcrumbs">
				<?=getBreadcrumbs()?>
			</div>