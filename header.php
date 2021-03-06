<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pdlab
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="nav-icon3" class="open-overlay">
			  <span></span>
			  <span></span>
			  <span></span>
			  <span></span>
		</div>
<div id="page" class="site">
	
	<header id="masthead" class="site-header">
		

		<nav id="site-navigation" class="main-navigation">
			<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a class="cin" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a></h1>
			<?php else : ?>
				<p class="site-title"><a class="cin" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a></p>
			<?php
			endif;
 ?>
		</div><!-- .site-branding -->
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container' => false
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">
<script>
	document.getElementById('content').classList += ' fade-in';
</script>



