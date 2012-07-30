<?php
	$title_tag = 'IndySigns' . (!empty($title) ? ' - '.$title : '');
?>
<html>
<head>
	<title><?= $title_tag; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<?php
		if (strtolower($title) == "home")
			echo '<link href="style.css" rel="stylesheet" type="text/css" />';
	?>
</head>
<body>
	<div id="page">
		<div id="menu">
			<ul id="menu_items">
				<li class="nav_topleft"></li>
				<li class="nav_home"><a href="/"><img src="/images/home_<?= (strtolower($title) == "home" ? 'on' : 'off'); ?>.png" width="65" /></a></li>
				
				<li class="nav_products"><a href="products"><img src="/images/products_<?= (strtolower($title) == "products" ? 'on' : 'off'); ?>.png" width="83" /></a></li>
				
				<li class="nav_aboutus"><a href="about"><img src="/images/about<?= (strtolower($title) == "about" ? 'on' : 'off'); ?>.png" width="101" /></a></li>
				<li class="nav_whatsnew"><a href="whatsnew"><img src="/images/whatsnew_<?= (strtolower($title) == "whatsnew" ? 'on' : 'off'); ?>.png" width="102" /></a></li>
				<li class="nav_clubcrude"><a href="clubcrude"><img src="/images/clubcrude_<?= (strtolower($title) == "clubcrude" ? 'on' : 'off'); ?>.png" width="102" /></a></li>
				<li class="nav_contact"><a href="contact"><img src="/images/contact_<?= (strtolower($title) == "contact" ? 'on' : 'off'); ?>.png" width="124" /></a></li>
			</ul>
		</div>
		<div id="body">
			<div id="content">