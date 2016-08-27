<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package non-profit-focus
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'non-profit-focus' ); ?></a>
	<div class="head-container">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding col grid_3_of_12">
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="focus logo" rel="home" >
							<img src="<?php echo get_template_directory_uri(); ?>/images/focus-logo.png" height="94" width="202" alt="FOCUS pittsburgh Logo">
						</a>
					</h1>
			</div><!-- .site-branding -->
			<div class="col grid_9_of_12 site-title">
				<div class="donate-button">
					<a href="<?php echo get_permalink(get_page_by_title('Donate'));?>">Donate</a> 
				</div>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'non-profit-focus' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->
		<?php if(!is_front_page()): ?>
			<div class="page-title-banner">
				<h1 class="page-banner-title"><?php echo get_the_title(); ?></h1>
			</div>
		<?php endif;?>
	</div>
	<div id="content" class="site-content">
