<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package foundation_s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			 <ul class="title-area">
			    <!-- Title Area -->
			    <li class="name">
			      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			    </li>
			    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			 </ul>
		
			<?php wp_nav_menu( array( 
			'theme_location' => 'primary', 
			'container' => 'div',
			'container_class' => 'top-bar-section',
			'menu_class' => 'right',
			'walker' => new Foundation_Walker()

			) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">