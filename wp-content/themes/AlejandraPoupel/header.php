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
					<a href="/">

						<svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 441.5 160.9" style="enable-background:new 0 0 441.5 160.9;" xml:space="preserve">
<g>
	<g>
		<path d="M-425.1,22c-23.8,0-42.5-5.1-58.9-9.6c-11.8-3.2-22-6-31.3-6c-3.2,0-5.8,2.6-5.8,5.8s2.6,5.8,5.8,5.8c1.1,0,2,0.9,2,2
			s-0.9,2-2,2c-5.4,0-9.8-4.4-9.8-9.8s4.4-9.8,9.8-9.8c9.9,0,20.3,2.9,32.4,6.1c16.2,4.4,34.6,9.5,57.9,9.5c1.1,0,2,0.9,2,2
			S-424,22-425.1,22z"/>
	</g>
	<g>
		<path d="M-335.7,22c-1.1,0-2-0.9-2-2s0.9-2,2-2c3.2,0,5.8-2.6,5.8-5.8s-2.6-5.8-5.8-5.8c-9.3,0-19.5,2.8-31.3,6
			c-16.5,4.5-35.1,9.6-58.9,9.6c-1.1,0-2-0.9-2-2s0.9-2,2-2c23.3,0,41.7-5,57.9-9.5c12.1-3.3,22.5-6.1,32.4-6.1
			c5.4,0,9.8,4.4,9.8,9.8S-330.3,22-335.7,22z"/>
	</g>
	<g>
		<path d="M-425.1,22c-5.4,0-9.8-4.4-9.8-9.8s4.4-9.8,9.8-9.8s9.8,4.4,9.8,9.8S-419.7,22-425.1,22z M-425.1,6.4
			c-3.2,0-5.8,2.6-5.8,5.8s2.6,5.8,5.8,5.8c3.2,0,5.8-2.6,5.8-5.8S-421.9,6.4-425.1,6.4z"/>
	</g>
</g>
							<g>
								<g>
									<path d="M-335.7,158.5c-9.9,0-20.3-2.8-32.4-6.2c-16.2-4.4-34.6-9.5-57.9-9.5c-1.1,0-2-0.9-2-2s0.9-2,2-2
			c23.8,0,42.5,5.1,58.9,9.6c11.8,3.2,22,6,31.3,6c3.2,0,5.8-2.6,5.8-5.8c0-3.2-2.6-5.8-5.8-5.8c-1.1,0-2-0.9-2-2s0.9-2,2-2
			c5.4,0,9.8,4.4,9.8,9.8S-330.3,158.5-335.7,158.5z"/>
								</g>
								<g>
									<path d="M-515.4,158.5c-5.4,0-9.8-4.4-9.8-9.8s4.4-9.8,9.8-9.8c1.1,0,2,0.9,2,2s-0.9,2-2,2c-3.2,0-5.8,2.6-5.8,5.8
			c0,3.2,2.6,5.8,5.8,5.8c9.3,0,19.5-2.8,31.3-6c16.5-4.5,35.1-9.6,58.9-9.6c1.1,0,2,0.9,2,2s-0.9,2-2,2c-23.3,0-41.7,5-57.9,9.5
			C-495.1,155.7-505.5,158.5-515.4,158.5z"/>
								</g>
								<g>
									<path d="M-426,158.5c-5.4,0-9.8-4.4-9.8-9.8s4.4-9.8,9.8-9.8c5.4,0,9.8,4.4,9.8,9.8S-420.6,158.5-426,158.5z M-426,142.9
			c-3.2,0-5.8,2.6-5.8,5.8c0,3.2,2.6,5.8,5.8,5.8s5.8-2.6,5.8-5.8C-420.2,145.5-422.8,142.9-426,142.9z"/>
								</g>
							</g>
							<g>
								<g>
									<path d="M-640,68.3h-9.1l-1.3,3.6h-5.2l8.2-21.3h5.7l8.2,21.3h-5.2L-640,68.3z M-647.9,64.4h6.6l-3.3-9.1L-647.9,64.4z"/>
								</g>
								<g>
									<path d="M-621.7,50.7h4.5V68h9v4h-13.5V50.7z"/>
								</g>
								<g>
									<path d="M-595.1,50.7h15v4h-10.5v4.5h10.3v4h-10.3V68h10.5v4h-15V50.7z"/>
								</g>
								<g>
									<path d="M-566.6,66.8c0.8,0.8,1.9,1.5,3.4,1.5c2,0,3.3-1.3,3.3-3.4V50.7h4.5V65c0,5-3.1,7.4-7.5,7.4c-2.1,0-4.2-0.6-5.7-2.1
			L-566.6,66.8z"/>
								</g>
								<g>
									<path d="M-529,68.3h-9.1l-1.3,3.6h-5.2l8.2-21.3h5.7l8.2,21.3h-5.2L-529,68.3z M-536.8,64.4h6.6l-3.3-9.1L-536.8,64.4z"/>
								</g>
								<g>
									<path d="M-506.1,58.1v13.9h-4.5V50.7h4.7l9.8,13.4V50.7h4.5v21.3h-4.4L-506.1,58.1z"/>
								</g>
								<g>
									<path d="M-477.5,50.7h8.4c6.7,0,11.3,4.2,11.3,10.6s-4.6,10.6-11.3,10.6h-8.4V50.7z M-469.1,68c4.2,0,6.7-3,6.7-6.6
			c0-3.8-2.3-6.7-6.7-6.7h-3.9V68H-469.1z"/>
								</g>
								<g>
									<path d="M-436.9,64.4h-3.3v7.6h-4.5V50.7h9.9c4.4,0,7.1,2.9,7.1,6.9c0,3.8-2.4,5.8-4.7,6.3l4.8,8.1h-5.2L-436.9,64.4z
			 M-435.4,54.7h-4.7v5.7h4.7c1.8,0,3.2-1.1,3.2-2.9C-432.2,55.8-433.6,54.7-435.4,54.7z"/>
								</g>
								<g>
									<path d="M-401,68.3h-9.1l-1.3,3.6h-5.2l8.2-21.3h5.7l8.2,21.3h-5.2L-401,68.3z M-408.8,64.4h6.6l-3.3-9.1L-408.8,64.4z"/>
								</g>
								<g>
									<path d="M-364.6,50.7h9.9c4.6,0,7.1,3.1,7.1,6.9c0,3.7-2.5,6.9-7.1,6.9h-5.4v7.6h-4.5V50.7z M-355.2,54.7h-4.8v5.7h4.8
			c1.8,0,3.1-1.1,3.1-2.9C-352.1,55.8-353.4,54.7-355.2,54.7z"/>
								</g>
								<g>
									<path d="M-324.7,50.3c6.4,0,11.1,4.6,11.1,11s-4.7,11-11.1,11c-6.4,0-11.1-4.6-11.1-11S-331.1,50.3-324.7,50.3z M-324.7,54.4
			c-3.9,0-6.4,3-6.4,7c0,4,2.5,7,6.4,7s6.5-3,6.5-7C-318.2,57.3-320.8,54.4-324.7,54.4z"/>
								</g>
								<g>
									<path d="M-300.5,50.7h4.6v12.6c0,3,1.7,5,5,5c3.3,0,5-2,5-5V50.7h4.6v12.7c0,5.3-3.1,8.9-9.6,8.9s-9.6-3.6-9.6-8.9V50.7z"/>
								</g>
								<g>
									<path d="M-267.2,50.7h9.9c4.6,0,7.1,3.1,7.1,6.9c0,3.7-2.5,6.9-7.1,6.9h-5.4v7.6h-4.5V50.7z M-257.9,54.7h-4.8v5.7h4.8
			c1.8,0,3.1-1.1,3.1-2.9C-254.8,55.8-256.1,54.7-257.9,54.7z"/>
								</g>
								<g>
									<path d="M-237.5,50.7h15v4h-10.5v4.5h10.3v4h-10.3V68h10.5v4h-15V50.7z"/>
								</g>
								<g>
									<path d="M-209,50.7h4.5V68h9v4H-209V50.7z"/>
								</g>
								<g>
									<path d="M-535.8,110.2V89h13.5v1.7H-534v7.9h11.4v1.7H-534v8.4h11.7v1.7H-535.8z"/>
								</g>
								<g>
									<path d="M-488.9,110.2l-8.7-21.3h2.1l7.7,19.2l7.7-19.2h2.1l-8.7,21.3H-488.9z"/>
								</g>
								<g>
									<path d="M-452.5,110.2V89h13.5v1.7h-11.7v7.9h11.4v1.7h-11.4v8.4h11.7v1.7H-452.5z"/>
								</g>
								<g>
									<path d="M-397,110.2l-13.4-18.3v18.3h-1.8V89h1.8l13.3,18V89h1.8v21.3H-397z"/>
								</g>
								<g>
									<path d="M-362.2,110.2V90.6h-6.9V89h15.7v1.7h-6.9v19.6H-362.2z"/>
								</g>
								<g>
									<path d="M-328.5,107.2l1.2-1.4c1.4,1.6,3.6,3.1,6.6,3.1c4.4,0,5.6-2.4,5.6-4.2c0-6.2-12.7-3-12.7-10.4c0-3.5,3.1-5.7,7-5.7
			c3.2,0,5.5,1.1,7.2,3l-1.2,1.3c-1.5-1.8-3.7-2.7-6.1-2.7c-2.8,0-5,1.6-5,3.9c0,5.4,12.7,2.5,12.7,10.4c0,2.7-1.8,6-7.6,6
			C-324.3,110.6-326.9,109.2-328.5,107.2z"/>
								</g>
							</g>
							<g>
								<path d="M0,99.1c0,0,0.6-1.7,1.7-5c1.2-3.2,2.8-8,5.1-14c2.3-6,5.1-13.2,8.5-21.5c1.7-4.1,3.6-8.5,5.6-13.1c1-2.3,2.2-4.6,3.5-6.9
		c1.3-2.3,2.5-4.7,3.9-7.1c2.7-4.8,5.5-9.9,8.8-14.9c1.6-2.5,3.4-5.1,5.3-7.6c1-1.3,2-2.5,3.2-3.8C46.8,4,48,2.7,49.8,1.6
		c0.5-0.3,0.9-0.6,1.5-0.8l0.4-0.2c0,0,0.6-0.2,0.4-0.1l0.1,0c0.2-0.1,0.3-0.1,0.7-0.2c0.7-0.2,1.3-0.2,2-0.2c0.7,0,1.4,0.1,2.1,0.3
		c1.5,0.4,2.9,1.4,3.7,2.4c0.9,1.1,1.4,2.1,1.7,3.2c0.7,2,0.9,3.9,1.1,5.7c0.1,1.8,0.1,3.6,0.1,5.3c-0.3,6.9-1.4,13.7-2.6,20.5
		c-2.5,13.6-5.8,27.4-9.2,41.4c-3.4,14-7,28.1-10.1,42.3c-1.5,7.1-3,14.2-3.8,21.2c-0.2,1.7-0.4,3.5-0.5,5.2
		c-0.1,1.7-0.1,3.4,0.1,4.8c0.1,0.7,0.2,1.4,0.4,1.9c0.1,0.2,0.2,0.4,0.2,0.4c0,0,0,0,0,0c0,0,0,0-0.1-0.1c0.1,0-0.9-0.6-0.4-0.3
		l0.2,0.1c0.2,0.1-0.2-0.1-0.4-0.2c-0.2-0.1-0.5-0.1-0.7-0.1c-0.3-0.1-0.8,0.1-1,0.2c-0.3,0.1-0.5,0.3-0.6,0.3
		c-0.1,0-0.1,0.1-0.2,0.1c0,0.1,0,0-0.1,0.1c-0.1,0.2,0,0,0.1-0.3c0.2-0.5,0.5-1.3,0.7-2c0.8-3.2,1.4-6.7,2-10.2
		c0.6-3.5,1.2-7,1.8-10.5c1.3-7,2.7-14,5-20.7c1.2-3.4,2.5-6.8,4.5-10c1-1.6,2.2-3.2,3.6-4.6c1.4-1.4,3.3-2.7,5.3-3.5l0.8-0.3
		l0.4-0.1l0.3-0.1l1.2-0.3c0.8-0.2,1.6-0.4,2.4-0.6c1.6-0.4,3.1-0.8,4.7-1.2c3.1-0.8,6.1-1.7,9.1-2.5c3-0.9,5.8-1.8,8.5-2.8
		c2.7-1,5.3-2.2,7.4-3.6c1-0.7,1.9-1.4,2.5-2.1c0.5-0.7,0.7-1.3,0.7-1.6c0-0.3,0-0.8-0.1-0.9l0-0.3L95.7,76
		c-0.1-0.5-0.3-0.9-0.4-1.4c-0.4-0.9-0.9-1.8-1.6-2.6c-1.3-1.6-3.2-2.9-5.2-3.8c-2.1-0.9-4.3-1.6-6.5-2.2c-1.1-0.3-2.2-0.5-3.3-0.8
		c-1.1-0.2-2.2-0.4-3.4-0.5c-1.1-0.1-2.2-0.3-3.3-0.3c-1.1-0.1-2.2-0.1-3.3-0.2c-8.6-0.2-16.3,0.6-22.6,1.5
		c-3.1,0.4-5.9,0.9-8.4,1.3c-2.4,0.5-4.5,0.8-6.2,1.2c-3.4,0.7-5.1,1.1-5.1,1.1s1.7-0.6,5-1.8c3.2-1.1,8-2.8,14.2-4.4
		c6.2-1.7,13.9-3.5,23-4.2c1.1-0.1,2.3-0.2,3.5-0.2c1.2-0.1,2.4-0.1,3.6,0c1.2,0,2.5,0.1,3.8,0.2c1.3,0.1,2.6,0.2,3.9,0.5
		c2.7,0.4,5.4,1.2,8.1,2.6c2.7,1.3,5.4,3.1,7.5,5.7c1.1,1.3,2,2.8,2.7,4.4c0.3,0.8,0.6,1.7,0.8,2.6l0.1,0.7l0.1,0.8
		c0.1,0.6,0.1,0.9,0.1,1.2c0.1,2.5-1,4.7-2.2,6.3c-1.3,1.6-2.7,2.7-4.1,3.6c-2.9,1.9-5.8,3.1-8.8,4.3c-3,1.1-6,2.1-9.1,3
		c-3.1,0.9-6.2,1.8-9.3,2.6c-1.6,0.4-3.1,0.8-4.7,1.2c-0.8,0.2-1.6,0.4-2.4,0.6l-1.2,0.3l-0.3,0.1l-0.2,0.1l-0.4,0.1
		c-2,0.7-3.9,2.7-5.4,5.2c-1.5,2.5-2.8,5.5-3.8,8.5c-2.1,6.2-3.5,12.9-4.7,19.7c-0.6,3.4-1.2,6.9-1.8,10.4
		c-0.6,3.5-1.2,7.1-2.2,10.9c-0.3,1-0.5,1.9-1,3.1c-0.3,0.6-0.5,1.2-1.3,2c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.3,0.2-0.4,0.4
		c-0.2,0.2-0.7,0.5-1.2,0.7c-0.4,0.2-1.1,0.3-1.7,0.3c-0.3,0-0.7-0.1-1.1-0.2c-0.3-0.1-0.8-0.3-0.7-0.3l-0.2-0.1
		c0.4,0.3-0.7-0.4-0.7-0.4c-0.2-0.2-0.4-0.3-0.6-0.5c-0.3-0.3-0.6-0.7-0.9-1c-0.5-0.7-0.8-1.4-1-2c-0.4-1.2-0.6-2.4-0.8-3.4
		c-0.2-2.1-0.2-4.1-0.1-6c0.1-1.9,0.3-3.8,0.5-5.7c0.9-7.4,2.4-14.6,3.9-21.8C38.1,105.1,41.7,91,45.1,77c3.4-13.9,6.7-27.7,9.1-41
		c1.2-6.6,2.2-13.2,2.5-19.5c0-1.6,0.1-3.1-0.1-4.5c-0.1-1.4-0.3-2.8-0.7-3.8c-0.2-0.5-0.4-0.9-0.5-1.1C55.3,7,55.3,7,55.2,7
		c0,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.4,0c0,0-0.3,0.1-0.4,0.1l-0.1,0c-0.3,0.1,0.2-0.1,0.1,0l-0.1,0.1c-0.1,0-0.4,0.2-0.6,0.3
		C52.6,8.1,51.6,9,50.7,10c-1,1-1.9,2.1-2.7,3.3c-1.8,2.3-3.4,4.7-5,7.1c-3.1,4.9-5.9,9.8-8.5,14.5c-1.3,2.4-2.6,4.7-3.7,7
		c-1.1,2.3-2.3,4.6-3.5,6.8c-2.5,4.3-4.8,8.4-6.9,12.3C16,68.8,12.3,75.6,9.3,81.3c-3,5.7-5.3,10.1-6.9,13.1C0.8,97.5,0,99.1,0,99.1
		z"/>
							</g>
							<g>
								<g>
									<path d="M134.4,72.1h-6.3l-0.9,2.5h-3.6l5.7-14.7h3.9l5.7,14.7h-3.6L134.4,72.1z M129,69.3h4.6l-2.3-6.3L129,69.3z"/>
									<path d="M147.1,59.9h3.1v11.9h6.2v2.8h-9.3V59.9z"/>
									<path d="M165.4,59.9h10.4v2.8h-7.3v3.1h7.1v2.8h-7.1v3.3h7.3v2.8h-10.4V59.9z"/>
									<path d="M185.2,71c0.6,0.6,1.3,1.1,2.3,1.1c1.4,0,2.3-0.9,2.3-2.4v-9.8h3.1v9.9c0,3.5-2.2,5.1-5.2,5.1c-1.5,0-2.9-0.4-3.9-1.4
			L185.2,71z"/>
									<path d="M211.1,72.1h-6.3l-0.9,2.5h-3.6l5.7-14.7h3.9l5.7,14.7H212L211.1,72.1z M205.7,69.3h4.6L208,63L205.7,69.3z"/>
									<path d="M226.9,65v9.6h-3.1V59.9h3.2l6.8,9.2v-9.2h3.1v14.7h-3L226.9,65z"/>
									<path d="M246.7,59.9h5.8c4.6,0,7.8,2.9,7.8,7.4c0,4.4-3.2,7.3-7.8,7.3h-5.8V59.9z M252.5,71.8c2.9,0,4.6-2.1,4.6-4.6
			c0-2.6-1.6-4.6-4.6-4.6h-2.7v9.2H252.5z"/>
									<path d="M274.8,69.4h-2.3v5.2h-3.1V59.9h6.9c3.1,0,4.9,2,4.9,4.7c0,2.6-1.6,4-3.2,4.4l3.3,5.6h-3.6L274.8,69.4z M275.8,62.6h-3.3
			v4h3.3c1.3,0,2.2-0.7,2.2-2C278,63.4,277,62.6,275.8,62.6z"/>
									<path d="M299.6,72.1h-6.3l-0.9,2.5h-3.6l5.7-14.7h3.9l5.7,14.7h-3.6L299.6,72.1z M294.1,69.3h4.6l-2.3-6.3L294.1,69.3z"/>
									<path d="M324.7,59.9h6.9c3.2,0,4.9,2.2,4.9,4.7c0,2.6-1.8,4.7-4.9,4.7h-3.7v5.2h-3.1V59.9z M331.2,62.6h-3.3v4h3.3
			c1.2,0,2.2-0.8,2.2-2C333.3,63.4,332.4,62.6,331.2,62.6z"/>
									<path d="M352.2,59.7c4.4,0,7.7,3.2,7.7,7.6c0,4.4-3.2,7.6-7.7,7.6c-4.4,0-7.7-3.2-7.7-7.6C344.6,62.8,347.8,59.7,352.2,59.7z
			 M352.2,62.4c-2.7,0-4.4,2.1-4.4,4.8c0,2.7,1.7,4.8,4.4,4.8s4.5-2.1,4.5-4.8C356.7,64.5,354.9,62.4,352.2,62.4z"/>
									<path d="M369,59.9h3.2v8.7c0,2,1.2,3.5,3.5,3.5c2.3,0,3.4-1.4,3.4-3.5v-8.7h3.2v8.8c0,3.7-2.2,6.1-6.6,6.1s-6.6-2.5-6.6-6.1V59.9z
			"/>
									<path d="M391.9,59.9h6.9c3.2,0,4.9,2.2,4.9,4.7c0,2.6-1.8,4.7-4.9,4.7h-3.7v5.2h-3.1V59.9z M398.4,62.6h-3.3v4h3.3
			c1.2,0,2.2-0.8,2.2-2C400.5,63.4,399.6,62.6,398.4,62.6z"/>
									<path d="M412.5,59.9h10.4v2.8h-7.3v3.1h7.1v2.8h-7.1v3.3h7.3v2.8h-10.4V59.9z"/>
									<path d="M432.2,59.9h3.1v11.9h6.2v2.8h-9.3V59.9z"/>
									<path d="M206.4,101V86.3h9.3v1.1h-8.1v5.4h7.9v1.1h-7.9v5.8h8.1v1.1H206.4z"/>
									<path d="M238.8,101l-6-14.7h1.5l5.3,13.3l5.3-13.3h1.5l-6,14.7H238.8z"/>
									<path d="M264,101V86.3h9.3v1.1h-8.1v5.4h7.9v1.1h-7.9v5.8h8.1v1.1H264z"/>
									<path d="M302.3,101l-9.2-12.6V101h-1.3V86.3h1.3l9.2,12.4V86.3h1.3V101H302.3z"/>
									<path d="M326.4,101V87.5h-4.8v-1.1h10.9v1.1h-4.8V101H326.4z"/>
									<path d="M349.6,98.9l0.8-0.9c0.9,1.1,2.5,2.1,4.6,2.1c3,0,3.9-1.7,3.9-2.9c0-4.3-8.8-2.1-8.8-7.2c0-2.4,2.2-3.9,4.8-3.9
			c2.2,0,3.8,0.8,5,2.1l-0.8,0.9c-1.1-1.3-2.6-1.9-4.2-1.9c-2,0-3.4,1.1-3.4,2.7c0,3.8,8.8,1.7,8.8,7.2c0,1.9-1.3,4.2-5.2,4.2
			C352.5,101.3,350.7,100.3,349.6,98.9z"/>
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

