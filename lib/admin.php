<?php

include_once( APOLLONIA_YES_NO_POPUP_PLUGIN_DIR . '/pages/settings.php');

/* Admin options menu */
add_action( 'admin_menu', 'apollonia_yes_no_popup_add_menus' );
function apollonia_yes_no_popup_add_menus() {
	global $apollonia_yes_no_popup_settings_page;
	$apollonia_yes_no_popup_settings_page = add_options_page(
		__( 'Yes/No Popup', 'apollonia-yes-no-popup' ),
		__( 'Yes/No Popup', 'apollonia-yes-no-popup' ),
		'manage_options',
		'apollonia-yes-no-popup-menu',
		'apollonia_yes_no_popup_settings_page'
	);
}

// Custom styles and scripts for admin pages
add_action( 'admin_enqueue_scripts', 'apollonia_yes_no_popup_admin_scripts' );
function apollonia_yes_no_popup_admin_scripts( $hook ) {
	global $apollonia_yes_no_popup_settings_page;
    if ( $hook == $apollonia_yes_no_popup_settings_page ) {
    	wp_enqueue_style( 'apollonia-yes-no-popup', APOLLONIA_YES_NO_POPUP_PLUGIN_URL . '/css/apollonia-admin-min.css' );
    }
}
