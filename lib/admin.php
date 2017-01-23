<?php

include_once( APOLLONIA_YES_NO_POPUPS_PLUGIN_DIR . '/pages/settings.php');
include_once( APOLLONIA_YES_NO_POPUPS_PLUGIN_DIR . '/pages/popup-1.php');
include_once( APOLLONIA_YES_NO_POPUPS_PLUGIN_DIR . '/pages/popup-2.php');
include_once( APOLLONIA_YES_NO_POPUPS_PLUGIN_DIR . '/pages/popup-3.php');
include_once( APOLLONIA_YES_NO_POPUPS_PLUGIN_DIR . '/pages/popup-4.php');

/* Admin options menu */
add_action( 'admin_menu', 'apollonia_yes_no_popups_add_menus' );
function apollonia_yes_no_popups_add_menus() {
	global $apollonia_yes_no_popups_settings_page;

	$apollonia_yes_no_popups_settings_page = add_menu_page(
		__( 'Yes/No Popups', 'apollonia-yes-no-popups' ),
		__( 'Yes/No Popups', 'apollonia-yes-no-popups' ),
		'manage_options',
		'apollonia-yes-no-popups-menu',
		'apollonia_yes_no_popups_settings_page',
		'dashicons-welcome-view-site'
	);
	$apollonia_yes_no_popups_settings_page = add_submenu_page(
		'apollonia-yes-no-popups-menu',
		__( 'Yes/No Popups', 'apollonia-yes-no-popups' ),
		__( 'Yes/No Popups', 'apollonia-yes-no-popups' ),
		'manage_options',
		'apollonia-yes-no-popups-menu',
		'apollonia_yes_no_popups_settings_page'
	);
	$apollonia_yes_no_popups_settings_page = add_submenu_page(
		'apollonia-yes-no-popups-menu',
		__( 'Popup 1', 'apollonia-yes-no-popups' ),
		__( 'Popup 1', 'apollonia-yes-no-popups' ),
		'manage_options',
		'apollonia-yes-no-popups-1-menu',
		'apollonia_yes_no_popups_popup_1_page'
	);
	$apollonia_yes_no_popups_settings_page = add_submenu_page(
		'apollonia-yes-no-popups-menu',
		__( 'Popup 2', 'apollonia-yes-no-popups' ),
		__( 'Popup 2', 'apollonia-yes-no-popups' ),
		'manage_options',
		'apollonia-yes-no-popups-2-menu',
		'apollonia_yes_no_popups_popup_2_page'
	);
	$apollonia_yes_no_popups_settings_page = add_submenu_page(
		'apollonia-yes-no-popups-menu',
		__( 'Popup 3', 'apollonia-yes-no-popups' ),
		__( 'Popup 3', 'apollonia-yes-no-popups' ),
		'manage_options',
		'apollonia-yes-no-popups-3-menu',
		'apollonia_yes_no_popups_popup_3_page'
	);
	$apollonia_yes_no_popups_settings_page = add_submenu_page(
		'apollonia-yes-no-popups-menu',
		__( 'Popup 4', 'apollonia-yes-no-popups' ),
		__( 'Popup 4', 'apollonia-yes-no-popups' ),
		'manage_options',
		'apollonia-yes-no-popups-4-menu',
		'apollonia_yes_no_popups_popup_4_page'
	);
}

// Custom styles and scripts for admin pages
add_action( 'admin_enqueue_scripts', 'apollonia_yes_no_popups_admin_scripts' );
function apollonia_yes_no_popups_admin_scripts( $hook ) {
	global $apollonia_yes_no_popups_settings_page;
    if ( $hook == $apollonia_yes_no_popups_settings_page ) {
    	wp_enqueue_style( 'apollonia-yes-no-popups', APOLLONIA_YES_NO_POPUPS_PLUGIN_URL . '/css/surbma-admin-min.css' );
    }
}
