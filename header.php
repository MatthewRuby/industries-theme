<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="nav-wrap">


			<hgroup>
				<h2 class="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 86.246 56.133" enable-background="new 0 0 86.246 56.133" xml:space="preserve">
							<g>
								<g>
									<g opacity="0.75">
										<path fill="#FFFFFF" d="M61.686,9.482c-5.17,0.001-10.362,1.823-14.728,4.821c-2.791-2.999-7.032-4.821-12.204-4.821
											C23.58,9.483,12.288,17.994,9.536,28.49c-2.753,10.496,4.076,19.002,15.251,19c5.17,0,10.365-1.822,14.728-4.82
											c2.79,2.998,7.031,4.822,12.203,4.82c11.177,0,22.467-8.51,25.22-19.006C79.689,17.989,72.863,9.482,61.686,9.482z"/>
									</g>
									<path fill="#FFFFFF" d="M34.564,5.778c4.826,0,9.202,1.373,12.628,3.915c4.507-2.537,9.494-3.913,14.302-3.914
										c3.297,0,6.365,0.626,9.115,1.861c2.766,1.243,5.08,3.033,6.881,5.323c1.77,2.25,2.932,4.846,3.457,7.715
										c0.524,2.861,0.385,5.863-0.418,8.919C79,35.426,75.195,40.87,69.816,44.922c-5.365,4.045-11.725,6.272-17.906,6.273
										c-4.826,0-9.203-1.373-12.627-3.914c-4.508,2.537-9.495,3.913-14.303,3.913c-3.297,0-6.363-0.626-9.114-1.86
										c-2.767-1.242-5.082-3.033-6.881-5.322c-1.769-2.249-2.932-4.846-3.458-7.717c-0.524-2.859-0.384-5.86,0.418-8.917
										c1.529-5.83,5.334-11.272,10.711-15.327c5.367-4.044,11.725-6.272,17.906-6.273H34.564 M34.564,2.074L34.564,2.074h-0.003
										c-6.98,0-14.131,2.494-20.135,7.019C8.385,13.646,4.1,19.806,2.362,26.438c-0.941,3.587-1.102,7.128-0.479,10.525
										c0.635,3.468,2.043,6.609,4.188,9.338c2.173,2.765,4.958,4.922,8.275,6.412c3.232,1.449,6.809,2.187,10.632,2.187
										c4.729,0,9.555-1.146,14.083-3.328c3.718,2.185,8.11,3.328,12.849,3.328c6.98,0,14.133-2.493,20.137-7.019
										c6.041-4.553,10.326-10.713,12.064-17.346c0.939-3.584,1.102-7.125,0.479-10.526c-0.635-3.467-2.043-6.607-4.188-9.337
										c-2.174-2.765-4.959-4.921-8.275-6.411c-3.231-1.451-6.809-2.187-10.633-2.187c-4.728,0-9.554,1.146-14.082,3.329
										C43.695,3.218,39.3,2.074,34.564,2.074L34.564,2.074z"/>
								</g>
							</g>
						</svg>
					</a>
				</h2>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
			</hgroup>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav><!-- #site-navigation -->

			<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
			<?php endif; ?>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">