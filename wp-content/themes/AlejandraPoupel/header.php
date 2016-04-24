<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
                
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<meta name="theme-color" content="#121212">

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/library/css/grid.css">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href="https://file.myfontastic.com/dnen8cM8Ud8MRE4hXHXD3m/icons.css" rel="stylesheet">


		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
		<script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>


		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">



			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<div class="container">
					<a href="/" class="logoHeader">

						<svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 563.6 160.9" style="enable-background:new 0 0 563.6 160.9;" xml:space="preserve">
<path d="M0,99.1c0,0,0.6-1.8,1.8-5.1C3,90.7,4.7,85.8,7,79.7c2.3-6.1,5.2-13.6,8.8-22c1.8-4.2,3.7-8.7,5.8-13.4
	c1.1-2.3,2.4-4.6,3.7-7c1.3-2.4,2.6-4.8,4-7.3c2.7-4.9,5.7-10.1,9.1-15.2c1.7-2.6,3.5-5.2,5.7-7.7c1.1-1.3,2.2-2.5,3.6-3.8
	C48.3,2.7,49,2.1,50,1.5c0.5-0.3,1-0.6,1.6-0.8l0.2-0.1c0,0,0.6-0.2,0.4-0.1l0.3-0.1c0.1,0,0.1,0,0.3-0.1l0.5-0.1
	C54,0,54.6,0,55.3,0c0.7,0,1.5,0.1,2.2,0.4C58.3,0.6,59,1,59.6,1.5c0.6,0.5,1.1,1,1.5,1.6c0.8,1.1,1.3,2.2,1.6,3.2
	c0.3,1,0.5,2,0.7,2.9c0.6,3.8,0.4,7.3,0.2,10.8c-0.5,7-1.7,13.9-3,20.8c-2.7,13.9-6.2,28-9.6,42.3c-3.5,14.3-7.2,28.8-10.1,43.3
	c-0.7,3.6-1.4,7.3-2,10.9c-0.6,3.6-1,7.2-1.2,10.7c-0.1,1.7,0,3.4,0.2,4.9c0.1,0.7,0.3,1.3,0.4,1.6c0.1,0.1,0.1,0.2,0,0.1
	c0,0,0,0,0,0c0.3,0.2-0.4-0.3-0.3-0.2c0.1,0,0.2,0.1-0.1-0.1c-0.2-0.1-0.3-0.1-0.5-0.2c-0.3-0.1-0.7-0.1-1.1-0.1
	c-0.4,0.1-0.7,0.2-0.9,0.3c-0.4,0.3-0.5,0.4-0.5,0.4c0,0,0,0,0.1-0.1c0.1-0.2,0.2-0.5,0.3-0.8c0.2-0.7,0.5-1.5,0.7-2.3
	c0.4-1.7,0.7-3.4,1.1-5.2c1.3-7.1,2.3-14.4,3.9-21.6c0.8-3.6,1.6-7.2,2.7-10.7c1.1-3.5,2.3-7,4-10.5c0.9-1.7,1.9-3.4,3.1-5
	c1.2-1.6,2.7-3.1,4.6-4.3c0.9-0.6,2-1.1,3.1-1.5c0.3-0.1,0.6-0.2,0.8-0.2l0.6-0.2L61,92c1.7-0.4,3.3-0.8,5-1.2c6.6-1.6,13-3,18.8-5
	c2.9-1,5.6-2.1,7.8-3.5c1.1-0.7,1.9-1.5,2.5-2.3c0.5-0.8,0.8-1.5,0.8-2.3l0-0.1c0-0.1,0,0.1,0,0l0-0.3c0-0.2,0-0.4,0-0.5
	c0-0.2,0-0.4-0.1-0.7c-0.1-0.5-0.2-1.1-0.4-1.6c-0.4-1-0.9-2-1.6-2.9c-1.4-1.8-3.3-3.2-5.4-4.2c-2.2-1-4.6-1.6-6.9-2.2
	c-2.4-0.6-4.8-0.9-7.3-1.2c-4.9-0.4-9.6-0.3-14,0c-8.9,0.7-16.7,2.1-23.1,3.4c-6.4,1.4-11.4,2.6-14.8,3.5c-3.4,0.9-5.2,1.4-5.2,1.4
	s1.7-0.7,5-2c3.3-1.3,8.1-3.1,14.3-5.2c6.3-2,13.9-4.3,23.1-6c4.6-0.8,9.5-1.4,14.9-1.5c2.7,0,5.5,0.1,8.3,0.5
	c2.9,0.4,5.8,1.4,8.7,2.8l1.1,0.5l1.1,0.6c0.7,0.4,1.4,0.9,2.1,1.4c1.3,1.1,2.6,2.3,3.7,3.7c2.2,2.9,3.6,6.5,3.6,10.5
	c0,2.2-0.8,4.5-2.1,6.2c-1.2,1.7-2.8,3-4.3,4c-3.1,2-6.2,3.3-9.4,4.4c-6.4,2.1-12.9,3.6-19.4,5.2c-1.6,0.4-3.2,0.8-4.9,1.2L61.5,99
	l-0.6,0.2c-0.1,0-0.3,0.1-0.4,0.1c-0.5,0.2-1,0.4-1.5,0.7c-2,1.3-3.8,3.8-5.3,6.6c-1.4,2.8-2.6,6-3.6,9.3c-1,3.3-1.8,6.7-2.5,10.1
	c-1.5,6.9-2.5,14.1-3.8,21.4c-0.3,1.8-0.7,3.7-1.2,5.6c-0.2,1-0.5,1.9-0.9,3c-0.2,0.5-0.4,1.1-0.7,1.7c-0.2,0.3-0.4,0.7-0.7,1.1
	c-0.3,0.4-0.7,0.9-1.5,1.4c-0.4,0.2-0.9,0.5-1.5,0.6c-0.6,0.1-1.3,0-1.8-0.1c-0.2-0.1-0.5-0.2-0.8-0.3c-0.4-0.2-0.4-0.2-0.4-0.2
	c0,0-0.7-0.5-0.5-0.4l-0.3-0.3c-0.8-0.7-1.2-1.4-1.6-2.1c-0.7-1.4-0.9-2.6-1.1-3.7c-0.3-2.2-0.3-4.3-0.3-6.2c0.2-4,0.7-7.7,1.3-11.5
	c0.6-3.8,1.3-7.5,2.1-11.2c3-14.8,6.7-29.3,10.2-43.5c3.5-14.3,6.9-28.3,9.6-41.9c1.3-6.8,2.4-13.5,2.9-20c0.2-3.2,0.3-6.4-0.1-9.2
	c-0.2-1.3-0.6-2.6-1-3C55.3,7,55.3,7,55.3,7c0,0-0.3,0-0.6,0c0,0-0.1,0-0.1,0c0,0-0.2,0-0.2,0.1l-0.3,0.1c-0.3,0.1,0.2-0.1,0.1,0
	l-0.1,0c-0.1,0.1-0.3,0.2-0.6,0.3c-0.4,0.3-0.9,0.6-1.4,1.1c-1,0.9-2,1.9-2.9,3c-1.9,2.2-3.6,4.7-5.2,7.1c-3.2,4.9-6.1,9.9-8.8,14.8
	c-1.3,2.4-2.6,4.8-3.9,7.2c-1.2,2.4-2.3,4.7-3.6,6.9c-2.5,4.4-4.9,8.6-7.1,12.6c-4.4,8-8.1,15-11.2,20.7C3.4,92.4,0,99.1,0,99.1z"/>

							<g class="alterColor">
								<g>
									<path d="M138.5,68.9h-8.7l-1.3,3.4h-4.9l7.9-20.3h5.4l7.8,20.3h-4.9L138.5,68.9z M130.9,65.1h6.3l-3.2-8.7L130.9,65.1z"/>
									<path d="M156,52h4.3v16.5h8.6v3.8H156V52z"/>
									<path d="M181.4,52h14.4v3.8h-10.1v4.3h9.8v3.8h-9.8v4.6h10.1v3.8h-14.4V52z"/>
									<path d="M208.7,67.4c0.8,0.8,1.8,1.5,3.2,1.5c1.9,0,3.2-1.3,3.2-3.3V52h4.3v13.7c0,4.8-3,7-7.2,7c-2,0-4-0.5-5.5-2L208.7,67.4z"/>
									<path d="M244.7,68.9H236l-1.3,3.4h-4.9l7.9-20.3h5.4l7.8,20.3h-4.9L244.7,68.9z M237.2,65.1h6.3l-3.2-8.7L237.2,65.1z"/>
									<path d="M266.6,59.1v13.3h-4.3V52h4.4l9.4,12.8V52h4.3v20.3h-4.2L266.6,59.1z"/>
									<path d="M293.9,52h8c6.4,0,10.8,4.1,10.8,10.2s-4.4,10.1-10.8,10.1h-8V52z M301.9,68.5c4,0,6.4-2.9,6.4-6.3c0-3.6-2.2-6.4-6.4-6.4
			h-3.7v12.7H301.9z"/>
									<path d="M332.8,65.1h-3.2v7.2h-4.3V52h9.5c4.2,0,6.8,2.8,6.8,6.6c0,3.6-2.3,5.5-4.5,6l4.6,7.7h-5L332.8,65.1z M334.1,55.8h-4.5
			v5.5h4.5c1.7,0,3-1,3-2.7C337.2,56.8,335.9,55.8,334.1,55.8z"/>
									<path d="M367.1,68.9h-8.7l-1.3,3.4h-4.9L360,52h5.4l7.8,20.3h-4.9L367.1,68.9z M359.6,65.1h6.3l-3.2-8.7L359.6,65.1z"/>
									<path d="M401.9,52h9.5c4.4,0,6.8,3,6.8,6.6c0,3.5-2.4,6.6-6.8,6.6h-5.2v7.2h-4.3V52z M410.8,55.8h-4.6v5.5h4.6c1.7,0,3-1.1,3-2.7
			C413.8,56.8,412.5,55.8,410.8,55.8z"/>
									<path d="M440,51.6c6.2,0,10.6,4.4,10.6,10.5s-4.5,10.5-10.6,10.5c-6.1,0-10.6-4.4-10.6-10.5S433.9,51.6,440,51.6z M440,55.5
			c-3.7,0-6.2,2.9-6.2,6.7c0,3.8,2.4,6.7,6.2,6.7s6.2-2.9,6.2-6.7C446.2,58.4,443.8,55.5,440,55.5z"/>
									<path d="M463.2,52h4.4v12.1c0,2.8,1.6,4.8,4.8,4.8c3.1,0,4.8-2,4.8-4.8V52h4.4v12.2c0,5.1-3,8.5-9.2,8.5c-6.2,0-9.2-3.5-9.2-8.5
			V52z"/>
									<path d="M495,52h9.5c4.4,0,6.8,3,6.8,6.6c0,3.5-2.4,6.6-6.8,6.6h-5.2v7.2H495V52z M503.9,55.8h-4.6v5.5h4.6c1.7,0,3-1.1,3-2.7
			C506.9,56.8,505.6,55.8,503.9,55.8z"/>
									<path d="M523.5,52h14.4v3.8h-10.1v4.3h9.8v3.8h-9.8v4.6h10.1v3.8h-14.4V52z"/>
									<path d="M550.7,52h4.3v16.5h8.6v3.8h-12.9V52z"/>
									<path d="M238.2,108.9V88.6h12.9v1.6h-11.2v7.5h10.9v1.6h-10.9v8h11.2v1.6H238.2z"/>
									<path d="M283,108.9l-8.3-20.3h2L284,107l7.4-18.4h2l-8.3,20.3H283z"/>
									<path d="M317.8,108.9V88.6h12.9v1.6h-11.2v7.5h10.9v1.6h-10.9v8h11.2v1.6H317.8z"/>
									<path d="M370.9,108.9l-12.8-17.5v17.5h-1.7V88.6h1.8l12.7,17.2V88.6h1.7v20.3H370.9z"/>
									<path d="M404.2,108.9V90.2h-6.6v-1.6h15.1v1.6H406v18.7H404.2z"/>
									<path d="M436.4,106l1.1-1.3c1.3,1.5,3.4,3,6.3,3c4.2,0,5.4-2.3,5.4-4.1c0-6-12.2-2.9-12.2-10c0-3.3,3-5.4,6.7-5.4
			c3,0,5.3,1.1,6.9,2.9l-1.2,1.3c-1.5-1.8-3.5-2.6-5.8-2.6c-2.7,0-4.8,1.6-4.8,3.8c0,5.2,12.2,2.3,12.2,9.9c0,2.6-1.7,5.8-7.2,5.8
			C440.4,109.3,437.9,107.9,436.4,106z"/>
								</g>
							</g>
</svg>




					</a>
				<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>
					<span class="menuOpener"></span>
				</div>

				<?php wp_nav_menu( array( 'theme_location' => 'Social_Links' ) ); ?>

			</header>



