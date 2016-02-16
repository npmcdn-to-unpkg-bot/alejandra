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


		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">



			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<div class="container">
					<a href="/">
						<svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 460.2 156.2" style="enable-background:new 0 0 460.2 156.2;" xml:space="preserve">
<g>
	<g>
		<path d="M230.5,19.6c-23.8,0-42.5-5.1-58.9-9.6c-11.8-3.2-22-6-31.3-6c-3.2,0-5.8,2.6-5.8,5.8s2.6,5.8,5.8,5.8c1.1,0,2,0.9,2,2
			s-0.9,2-2,2c-5.4,0-9.8-4.4-9.8-9.8s4.4-9.8,9.8-9.8c9.9,0,20.3,2.9,32.4,6.1c16.2,4.4,34.6,9.5,57.9,9.5c1.1,0,2,0.9,2,2
			S231.6,19.6,230.5,19.6z"/>
	</g>
	<g>
		<path d="M319.9,19.6c-1.1,0-2-0.9-2-2s0.9-2,2-2c3.2,0,5.8-2.6,5.8-5.8S323.1,4,319.9,4c-9.3,0-19.5,2.8-31.3,6
			c-16.5,4.5-35.1,9.6-58.9,9.6c-1.1,0-2-0.9-2-2s0.9-2,2-2c23.3,0,41.7-5,57.9-9.5C299.6,2.9,310.1,0,319.9,0
			c5.4,0,9.8,4.4,9.8,9.8S325.3,19.6,319.9,19.6z"/>
	</g>
	<g>
		<path d="M230.5,19.6c-5.4,0-9.8-4.4-9.8-9.8s4.4-9.8,9.8-9.8s9.8,4.4,9.8,9.8S235.9,19.6,230.5,19.6z M230.5,4
			c-3.2,0-5.8,2.6-5.8,5.8s2.6,5.8,5.8,5.8c3.2,0,5.8-2.6,5.8-5.8S233.7,4,230.5,4z"/>
	</g>
</g>
							<g>
								<g>
									<path d="M319.9,156.2c-9.9,0-20.3-2.8-32.4-6.2c-16.2-4.4-34.6-9.5-57.9-9.5c-1.1,0-2-0.9-2-2s0.9-2,2-2c23.8,0,42.5,5.1,58.9,9.6
			c11.8,3.2,22,6,31.3,6c3.2,0,5.8-2.6,5.8-5.8c0-3.2-2.6-5.8-5.8-5.8c-1.1,0-2-0.9-2-2s0.9-2,2-2c5.4,0,9.8,4.4,9.8,9.8
			S325.3,156.2,319.9,156.2z"/>
								</g>
								<g>
									<path d="M140.2,156.2c-5.4,0-9.8-4.4-9.8-9.8s4.4-9.8,9.8-9.8c1.1,0,2,0.9,2,2s-0.9,2-2,2c-3.2,0-5.8,2.6-5.8,5.8
			c0,3.2,2.6,5.8,5.8,5.8c9.3,0,19.5-2.8,31.3-6c16.5-4.5,35.1-9.6,58.9-9.6c1.1,0,2,0.9,2,2s-0.9,2-2,2c-23.3,0-41.7,5-57.9,9.5
			C160.5,153.3,150.1,156.2,140.2,156.2z"/>
								</g>
								<g>
									<path d="M229.7,156.2c-5.4,0-9.8-4.4-9.8-9.8s4.4-9.8,9.8-9.8c5.4,0,9.8,4.4,9.8,9.8S235.1,156.2,229.7,156.2z M229.7,140.5
			c-3.2,0-5.8,2.6-5.8,5.8c0,3.2,2.6,5.8,5.8,5.8s5.8-2.6,5.8-5.8C235.5,143.2,232.9,140.5,229.7,140.5z"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M15.6,66H6.5l-1.3,3.6H0l8.2-21.3h5.7l8.2,21.3h-5.2L15.6,66z M7.7,62h6.6l-3.3-9.1L7.7,62z"/>
								</g>
								<g>
									<path d="M34,48.3h4.5v17.3h9v4H34V48.3z"/>
								</g>
								<g>
									<path d="M60.5,48.3h15v4H65v4.5h10.3v4H65v4.8h10.5v4h-15V48.3z"/>
								</g>
								<g>
									<path d="M89.1,64.4c0.8,0.8,1.9,1.5,3.4,1.5c2,0,3.3-1.3,3.3-3.4V48.3h4.5v14.3c0,5-3.1,7.4-7.5,7.4c-2.1,0-4.2-0.6-5.7-2.1
			L89.1,64.4z"/>
								</g>
								<g>
									<path d="M126.7,66h-9.1l-1.3,3.6h-5.2l8.2-21.3h5.7l8.2,21.3H128L126.7,66z M118.8,62h6.6l-3.3-9.1L118.8,62z"/>
								</g>
								<g>
									<path d="M149.6,55.7v13.9H145V48.3h4.7l9.8,13.4V48.3h4.5v21.3h-4.4L149.6,55.7z"/>
								</g>
								<g>
									<path d="M178.2,48.3h8.4c6.7,0,11.3,4.2,11.3,10.6s-4.6,10.6-11.3,10.6h-8.4V48.3z M186.5,65.6c4.2,0,6.7-3,6.7-6.6
			c0-3.8-2.3-6.7-6.7-6.7h-3.9v13.3H186.5z"/>
								</g>
								<g>
									<path d="M218.8,62h-3.3v7.6h-4.5V48.3h9.9c4.4,0,7.1,2.9,7.1,6.9c0,3.8-2.4,5.8-4.7,6.3l4.8,8.1H223L218.8,62z M220.2,52.3h-4.7
			V58h4.7c1.8,0,3.2-1.1,3.2-2.9C223.4,53.4,222,52.3,220.2,52.3z"/>
								</g>
								<g>
									<path d="M254.7,66h-9.1l-1.3,3.6h-5.2l8.2-21.3h5.7l8.2,21.3H256L254.7,66z M246.8,62h6.6l-3.3-9.1L246.8,62z"/>
								</g>
								<g>
									<path d="M291.1,48.3h9.9c4.6,0,7.1,3.1,7.1,6.9c0,3.7-2.5,6.9-7.1,6.9h-5.4v7.6h-4.5V48.3z M300.4,52.3h-4.8V58h4.8
			c1.8,0,3.1-1.1,3.1-2.9C303.5,53.4,302.2,52.3,300.4,52.3z"/>
								</g>
								<g>
									<path d="M330.9,47.9c6.4,0,11.1,4.6,11.1,11s-4.7,11-11.1,11c-6.4,0-11.1-4.6-11.1-11S324.5,47.9,330.9,47.9z M330.9,52
			c-3.9,0-6.4,3-6.4,7c0,4,2.5,7,6.4,7s6.5-3,6.5-7C337.4,55,334.8,52,330.9,52z"/>
								</g>
								<g>
									<path d="M355.1,48.3h4.6v12.6c0,3,1.7,5,5,5c3.3,0,5-2,5-5V48.3h4.6V61c0,5.3-3.1,8.9-9.6,8.9s-9.6-3.6-9.6-8.9V48.3z"/>
								</g>
								<g>
									<path d="M388.4,48.3h9.9c4.6,0,7.1,3.1,7.1,6.9c0,3.7-2.5,6.9-7.1,6.9h-5.4v7.6h-4.5V48.3z M397.7,52.3h-4.8V58h4.8
			c1.8,0,3.1-1.1,3.1-2.9C400.9,53.4,399.5,52.3,397.7,52.3z"/>
								</g>
								<g>
									<path d="M418.2,48.3h15v4h-10.5v4.5H433v4h-10.3v4.8h10.5v4h-15V48.3z"/>
								</g>
								<g>
									<path d="M446.7,48.3h4.5v17.3h9v4h-13.5V48.3z"/>
								</g>
								<g>
									<path d="M119.9,107.8V86.6h13.5v1.7h-11.7v7.9h11.4v1.7h-11.4v8.4h11.7v1.7H119.9z"/>
								</g>
								<g>
									<path d="M166.7,107.8L158,86.6h2.1l7.7,19.2l7.7-19.2h2.1l-8.7,21.3H166.7z"/>
								</g>
								<g>
									<path d="M203.1,107.8V86.6h13.5v1.7h-11.7v7.9h11.4v1.7h-11.4v8.4h11.7v1.7H203.1z"/>
								</g>
								<g>
									<path d="M258.6,107.8l-13.4-18.3v18.3h-1.8V86.6h1.8l13.3,18v-18h1.8v21.3H258.6z"/>
								</g>
								<g>
									<path d="M293.5,107.8V88.2h-6.9v-1.7h15.7v1.7h-6.9v19.6H293.5z"/>
								</g>
								<g>
									<path d="M327.1,104.8l1.2-1.4c1.4,1.6,3.6,3.1,6.6,3.1c4.4,0,5.6-2.4,5.6-4.2c0-6.2-12.7-3-12.7-10.4c0-3.5,3.1-5.7,7-5.7
			c3.2,0,5.5,1.1,7.2,3l-1.2,1.3c-1.5-1.8-3.7-2.7-6.1-2.7c-2.8,0-5,1.6-5,3.9c0,5.4,12.7,2.5,12.7,10.4c0,2.7-1.8,6-7.6,6
			C331.4,108.2,328.7,106.8,327.1,104.8z"/>
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
				</div>
			</header>

			<?php wp_nav_menu( array( 'theme_location' => 'Social_Links' ) ); ?>

