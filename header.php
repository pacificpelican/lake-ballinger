<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Lake Ballinger
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/more/css/foundation/foundation.css"/>
<script src="<?php bloginfo('template_directory'); ?>/more/js/modernizr/modernizr.js"></script>

<?php wp_head(); ?>
</head>

<body>


<div class="row">

	<div id="page" class="hfeed site">
		

			<nav class="top-bar" data-topbar>
					<ul class="title-area">
					 
					<li class="name">
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</li>
					<li class="toggle-topbar menu-icon">
					<a href="#"><span></span></a>
					</li>
					</ul>
						<section class="top-bar-section">
							<ul class="right">
							<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
							</ul>
							
						</section>
			</nav> 

</div>



	<div id="content" class="site-content spacez">
