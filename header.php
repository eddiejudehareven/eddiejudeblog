<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"> <!-- character set -->
		<meta name="viewport" content="width=device-width"> <!-- responsiveness -->
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?> <!-- wp plugins --> 
	</head>
	
<body <?php body_class(); ?>> <!-- to target css easily -->
	
	<div class="container">
	
		<!-- site-header -->
		<header class="site-header">
			
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?></h5> 
			
			<nav class="site-nav">
				
				<?php
				
				$args = array(
					'menu' => 'hua'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
			</nav>
			
		</header><!-- /site-header -->