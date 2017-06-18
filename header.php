<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sinensis
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sinensis' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
				<h1 class="site-title"><?php
				if (get_theme_mod( 'sinensis_header_capitalization', false) == 'true'): ?>
					<bigger><?php echo substr(get_bloginfo('name'), 0, 1) ?></bigger><?php	echo substr(get_bloginfo('name'), 1);
				else:
					echo bloginfo('name');

				endif;
				?></h1>
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( get_theme_mod( 'sinensis_header_show_description', false) AND $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<hr id="#separateur-header">

	<div id="content" class="site-content">
