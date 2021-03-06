<?php
/**
 * @package     Adminimize
 * @subpackage  Menu on settings page
 * @author      Frank Bültge
 */
if ( ! function_exists( 'add_action' ) ) {
	echo "Hi there!  I'm just a part of plugin, not much I can do when called directly.";
	exit;
}

$screen  = get_current_screen();
$message = '';
if ( _mw_adminimize_is_active_on_multisite() ) {
	$message = esc_attr__( 'Network' );
}
?>

<h2><?php esc_attr_e( 'Adminimize', 'adminimize' );
	echo ' ' . $message; ?></h2>
<br class="clear" />
<div id="poststuff" class="ui-sortable meta-box-sortables">
	<div id="minimeu" class="postbox ">
		<div class="handlediv" title="<?php esc_attr_e( 'Click to toggle' ); ?>"><br /></div>
		<h3 class="hndle" id="menu"><?php esc_attr_e( 'MiniMenu', 'adminimize' ) ?></h3>

		<div class="inside">
			<table class="widefat" cellspacing="0">
				<tr>
					<td class="row-title"><a href="#about"><?php esc_attr_e(
								'About the plugin', 'adminimize'
							); ?></a></td>
				</tr>

				<tr>
					<td class="row-title"><a href="#self-settings"><?php esc_attr_e(
								'Plugin Settings', 'adminimize'
							); ?></a></td>
				</tr>

				<tr>
					<td class="row-title"><a href="#admin_bar_options"><?php esc_attr_e(
								'Admin Bar Back end Options', 'adminimize'
							); ?></a></td>
				</tr>

				<tr>
					<td class="row-title"><a href="#admin_bar_frontend_options"><?php esc_attr_e(
								'Admin Bar Front end Options', 'adminimize'
							); ?></a></td>
				</tr>

				<tr>
					<td class="row-title"><a href="#backend_options"><?php esc_attr_e(
								'Backend Options', 'adminimize'
							); ?></a></td>
				</tr>
				<tr>
					<td class="row-title"><a href="#global_options"><?php esc_attr_e(
								'Global options', 'adminimize'
							); ?></a></td>
				</tr>
				<tr>
					<td class="row-title"><a href="#dashboard_options"><?php esc_attr_e(
								'Dashboard options', 'adminimize'
							); ?></a></td>
				</tr>
				<tr>
					<td class="row-title"><a href="#config_menu"><?php esc_attr_e(
								'Menu Options', 'adminimize'
							); ?></a></td>
				</tr>
				<tr>
					<td class="row-title"><a href="#config_edit_post"><?php esc_attr_e(
								'Write options - Post', 'adminimize'
							); ?></a></td>
				</tr>
				<tr>
					<td class="row-title"><a href="#config_edit_page"><?php esc_attr_e(
								'Write options - Page', 'adminimize'
							); ?></a></td>
				</tr>
				<?php
				if ( function_exists( 'get_post_types' ) ) {
					$args = array( 'public' => TRUE, '_builtin' => FALSE );
					foreach ( get_post_types( $args ) as $post_type ) {
						$post_type_object = get_post_type_object( $post_type );
						?>
						<tr>
							<td class="row-title">
								<a href="#config_edit_<?php echo $post_type; ?>">
									<?php esc_attr_e( 'Write options', 'adminimize' );
									echo ' - ' . $post_type_object->label ?>
								</a>
							</td>
						</tr>
						<?php
					}
				}

				// check for active links, active since WP 3.5
				if ( 0 !== (int) get_option( 'link_manager_enabled' ) ) {
					?>
					<tr>
						<td class="row-title"><a href="#links_options"><?php esc_attr_e(
									'Links options', 'adminimize'
								); ?></a></td>
					</tr>
				<?php } ?>

				<tr>
					<td class="row-title"><a href="#widget_options"><?php esc_attr_e(
								'Widgets', 'adminimize'
							); ?></a></td>
				</tr>
				<tr>
					<td class="row-title"><a href="#nav_menu_options"><?php esc_attr_e(
								'WP Nav Menu', 'adminimize'
							); ?></a></td>
				</tr>
				<tr>
					<td class="row-title"><a href="#set_theme"><?php esc_attr_e(
								'Set Theme', 'adminimize'
							); ?></a></td>
				</tr>
				<tr>
					<td class="row-title"><a href="#import"><?php esc_attr_e(
								'Export/Import Options', 'adminimize'
							); ?></a></td>
				</tr>
				<tr>
					<td class="row-title"><a href="#uninstall"><?php esc_attr_e(
								'Uninstall Options', 'adminimize'
							); ?></a></td>
				</tr>
			</table>
		</div>
	</div>
</div>

<div id="poststuff" class="ui-sortable meta-box-sortables">
	<div id="about" class="postbox">
		<div class="handlediv" title="<?php esc_attr_e( 'Click to toggle' ); ?>"><br /></div>
		<h3 class="hndle" id="about-sidebar"><?php esc_attr_e( 'About the plugin', 'adminimize' ) ?></h3>

		<div class="inside">
			<p>
				<?php
				echo _mw_adminimize_get_plugin_data( 'Title' ) . ', ' .
					esc_attr__( 'Version', 'adminimize' ) . ' ' . _mw_adminimize_get_plugin_data( 'Version' );
				?>
			</p>

			<p><?php echo _mw_adminimize_get_plugin_data( 'Description' ) ?></p>
			<ul>
				<li><?php
					printf(
						__(
							'Further information: Visit the <a href="%1$s">plugin homepage</a> for further information or to grab the latest version of this plugin. Also see the <a href="%2$s">support forum</a> for questions.',
							'adminimize'
						),
						'http://wordpress.org/extend/plugins/adminimize/',
						'http://wordpress.org/support/plugin/adminimize'
					);
					printf(
						__( '<br>For more hints about the functions and how to\'s with the possibilities of the plugin settings see the <a href="%s">FAQ page</a> on the plugin site.', 'adminimize' ),
						'https://wordpress.org/plugins/adminimize/faq/'
					);?></li>
				<li><?php esc_attr_e( 'Report a issue on the development repository:', 'adminimize' ); ?>
					<a href="https://github.com/bueltge/Adminimize/issues">issues</a></li>
				<li><?php esc_attr_e(
						'The plugin have a github repository to easy add a issue or a create a fork, pull request:',
						'adminimize'
					); ?> <a href="https://github.com/bueltge/Adminimize">github.com/bueltge/Adminimize</a></li>
				<li>
					<?php printf(
						__(
							'You want to thank me? Visit my <a href="%1$s">wishlist</a> or <a href="%2$s">donate</a>.',
							'adminimize'
						),
						'http://bueltge.de/wunschliste/',
						'https://www.paypal.me/FrankBueltge'
					); ?>
					<span>
				</li>
			</ul>
			<div style="padding:.3em 1em;">
				<p>
					<span style="font-size: 35px; float: left; margin: -5px 3px 0 0;">&#x261D;</span><strong>
					<?php esc_attr_e(
						'Please note: The Adminimize settings page ignores the Menu Options below and displays the menu with all entries.',
						'adminimize'
					);
					esc_attr_e(
						'To view your changes to the menu you need to navigate away from the Adminimize settings page.',
						'adminimize'
					); ?>
				</strong></p>
				<?php if ( _mw_adminimize_is_active_on_multisite() ) { ?>
					<p><?php esc_attr_e(
							'You have to activated the Plugin for your Multisite Network. Your settings works now on all blogs in the network. Please set the settings only in one blog, there you have all active menu items and plugins. If you update the settings then write the plugin new settings in dependence of the blog where you put, save the settings.',
							'adminimize'
						); ?></p>
				<?php } ?>
			</div>
			<p>&copy; Copyright 2008 - <?php echo date( 'Y' ); ?> <a href="http://bueltge.de">Frank B&uuml;ltge</a></p>

			<p>
				<a class="alignright button" href="javascript:void(0);" onclick="window.scrollTo(0,0);" style="margin:3px 0 0 30px;"><?php esc_attr_e(
						'scroll to top', 'adminimize'
					); ?></a><br class="clear" /></p>
		</div>
	</div>
</div>
