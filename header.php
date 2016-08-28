<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon"
	href="<?php bloginfo('template_directory');?>/data/images/favicon.ico" />
	<?php wp_head();?>
</head>

<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<a class="" href="<?php bloginfo('wpurl');?>"> <img class="logo"
				alt="LV"
				src="<?php bloginfo('template_directory');?>/data/images/LV-Black.png">
			</a>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php bloginfo('wpurl');?>">Home</a></li>
				<?php wp_list_pages( '&title_li='); ?>
				<li><a href="https://account.luxvacuos.net">Account</a></li>
				<li><a href="https://github.com/Lux-Vacuos">Github</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">