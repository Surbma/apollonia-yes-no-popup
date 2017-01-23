<?php

include_once( APOLLONIA_YES_NO_POPUPS_PLUGIN_DIR . '/pages/settings.php');

/* Admin options menu */
add_action( 'admin_menu', 'apollonia_yes_no_popups_add_menus' );
function apollonia_yes_no_popups_add_menus() {
	add_menu_page(
		__( 'Yes/No Popups', 'surbma-premium-wp' ),
		__( 'Yes/No Popups', 'surbma-premium-wp' ),
		'read',
		'surbma-premium-wp-menu',
		'surbma_premium_wp_start_page',
		'dashicons-star-filled',
		989374658
	);
	add_submenu_page(
		'surbma-premium-wp-menu',
		__( 'Premium WordPress', 'surbma-premium-wp' ),
		__( 'Premium WP', 'surbma-premium-wp' ),
		'read',
		'surbma-premium-wp-menu',
		'surbma_premium_wp_start_page'
	);

	global $apollonia_yes_no_popups_settings_page;
	$apollonia_yes_no_popups_settings_page = add_options_page(
		__( 'Yes/No Popup', 'apollonia-yes-no-popups' ),
		__( 'Yes/No Popup', 'apollonia-yes-no-popups' ),
		'manage_options',
		'apollonia-yes-no-popups-menu',
		'apollonia_yes_no_popups_settings_page'
	);
}

// Custom styles and scripts for admin pages
add_action( 'admin_enqueue_scripts', 'apollonia_yes_no_popups_admin_scripts' );
function apollonia_yes_no_popups_admin_scripts( $hook ) {
	global $apollonia_yes_no_popups_settings_page;
    if ( $hook == $apollonia_yes_no_popups_settings_page ) {
    	wp_enqueue_style( 'apollonia-yes-no-popups', APOLLONIA_YES_NO_POPUPS_PLUGIN_URL . '/css/apollonia-admin-min.css' );
    }
}
