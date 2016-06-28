<?php
/**
 * The header for our theme.
 *
 * @package Shanti_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="title" content="<?php bloginfo('name') ?>">
		<meta name="description" content="<?php bloginfo('description') ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
					<div class="site-branding">
						<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home"><span class="logo"></span><h1 class="site-title screen-reader-text"><?php echo get_bloginfo('name'); ?></h1></a>
					</div>

					<div class="call-to-action">
						<a href="<?php echo get_permalink( get_page_by_path( 'donate-now' ) ); ?>" class="button cta">Donate Now</a>
					</div>
			<!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">...</button>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
