

</main>

<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

	<?php echo do_shortcode('[instagram-feed id="1399041279"]');?>

				<div id="inner-footer" class="wrap cf container">


					<div class="row">
						<div class="col-lg-2">
							LOGO
						</div>

						<nav role="navigation" class="col-lg-5">
							<?php wp_nav_menu(array(
							'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
							'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
							'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
							'menu_class' => 'nav footer-nav cf',            // adding custom nav class
							'theme_location' => 'footer-links',             // where it's located in the theme
							'before' => '',                                 // before the menu
							'after' => '',                                  // after the menu
							'link_before' => '',                            // before each link
							'link_after' => '',                             // after each link
							'depth' => 0,                                   // limit the depth of the nav
							'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
							)); ?>
						</nav>
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

					</div>
				</div>

			</footer>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
