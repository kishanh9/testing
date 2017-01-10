<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package palms4u
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default navbar-fixed-top">
		    <div class="container-fluid">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="#">
		            	<!-- logo -->
		            	<img src="<?php echo get_template_directory_uri(); ?>/images/palms4u-logo.png" alt="Palms4u - Big palms at small prices" class="logo" />
		            </a>
		        </div>
		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-nav navbar-right">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		            </ul>
		        </div>
		        <!-- /.navbar-collapse -->
		    </div>
		    <!-- /.container-fluid -->
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
