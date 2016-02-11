<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Alejandra Poupel Events
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
        
        
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
        <link rel="styleheet" type="text/css" href="<?php bloginfo('template_url');?>/library/css/grid.css">
        
</head>

<body <?php body_class(); ?>>
    
    <header>
        
    </header>
    
		<main id="main" class="site-main" role="main">
                    <div class="container">
                        ZIZOUZ
                    </div>