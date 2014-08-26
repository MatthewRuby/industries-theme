<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="site-header clear" role="banner">
                <div class="nav-wrap">
					<h2 class="site-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 86.246 56.133" enable-background="new 0 0 86.246 56.133" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <path fill="#00f900" d="M61.686,9.482c-5.17,0.001-10.362,1.823-14.728,4.821c-2.791-2.999-7.032-4.821-12.204-4.821
                                                C23.58,9.483,12.288,17.994,9.536,28.49c-2.753,10.496,4.076,19.002,15.251,19c5.17,0,10.365-1.822,14.728-4.82
                                                c2.79,2.998,7.031,4.822,12.203,4.82c11.177,0,22.467-8.51,25.22-19.006C79.689,17.989,72.863,9.482,61.686,9.482z"/>
                                        </g>
                                        <path fill="#00f900" d="M34.564,5.778c4.826,0,9.202,1.373,12.628,3.915c4.507-2.537,9.494-3.913,14.302-3.914
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

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
                </div>
			</header>
			<!-- /header -->
