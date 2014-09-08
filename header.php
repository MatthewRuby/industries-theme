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

        <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400|Roboto+Slab' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>

        <style>.ig-b- { display: inline-block; }
            .ig-b- img { visibility: hidden; }
            .ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
            .ig-b-24 { width: 24px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-sprite-24.png) no-repeat 0 0; }
            @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
            .ig-b-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-sprite-24@2x.png); background-size: 60px 178px; } }
        </style>
	</head>
	<body <?php body_class(); ?>>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=903936332953317&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="site-header clear" role="banner">
                <div class="nav-wrap">
					<h2 class="site-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

<img src="data:image/png;base64,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"/>


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
