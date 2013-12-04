<?php

/**
 * Hard code in a flush_rewrite_rules to WordPress
 * once by writing to the database.
 *
 * This is NOT the proper way, but is here in lew of 
 * http://wordpress.org/support/topic/unable-to-use-register_activation_hook
 * 
 */
function itempress_rewrites_bad(){

	if(!get_option('itempress_rewrites_bad_flushed')){

		itempress_rewrites();
		update_option('itempress_rewrites_bad_flushed', time());

	}
}

add_action('admin_footer','itempress_rewrites_bad');

/**
 * Rewrite actions, mainly just flushing
 * the URL rewrites.
 */
function itempress_rewrites(){

	flush_rewrite_rules();
	update_option('itempress_last_flush', time());

}

/**
 * Upon plugin activation, perform first-time
 * actions.
 */
function itempress_plugin_activation() {

	/**
	 * Tell the DB when you last flushed the rewrites.
	 * Used mainly for debugging.
	 */
	itempress_rewrites();

}

register_deactivation_hook( __FILE__ , 'itempress_plugin_deactivate' );

/**
 * Upon plugin activation, perform final
 * actions.
 */
function itempress_plugin_deactivate() {

	/**
	 * Tell the DB when you last flushed the rewrites.
	 * Used mainly for debugging.
	 */
	itempress_rewrites();

}

register_deactivation_hook( __FILE__ , 'itempress_plugin_deactivate' );

?>