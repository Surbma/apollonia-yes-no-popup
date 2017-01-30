<?php

/*
Plugin Name: Apollonia - Yes/No Popups
Description: Shows popups with Yes/No options

Version: 2.1.0

Author: Surbma
Author URI: http://apollonia.com/

License: GPLv2

Text Domain: apollonia-yes-no-popupss
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

define( 'APOLLONIA_YES_NO_POPUPS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'APOLLONIA_YES_NO_POPUPS_PLUGIN_URL', plugins_url( '', __FILE__ ) );

// Localization
add_action( 'plugins_loaded', 'apollonia_yes_no_popups_init' );
function apollonia_yes_no_popups_init() {
	load_plugin_textdomain( 'apollonia-yes-no-popups', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}

// Include files
if ( is_admin() ) {
	include_once( APOLLONIA_YES_NO_POPUPS_PLUGIN_DIR . '/lib/admin.php' );
}
include_once( APOLLONIA_YES_NO_POPUPS_PLUGIN_DIR . '/lib/show-popup-1.php' );
include_once( APOLLONIA_YES_NO_POPUPS_PLUGIN_DIR . '/lib/show-popup-2.php' );
include_once( APOLLONIA_YES_NO_POPUPS_PLUGIN_DIR . '/lib/show-popup-3.php' );
include_once( APOLLONIA_YES_NO_POPUPS_PLUGIN_DIR . '/lib/show-popup-4.php' );

add_action( 'wp_enqueue_scripts', 'apollonia_yes_no_popups_enqueue_scripts', 999 );
function apollonia_yes_no_popups_enqueue_scripts() {
	wp_enqueue_script( 'apollonia-yes-no-popups-scripts', plugins_url( '', __FILE__ ) . '/js/scripts-min.js', array( 'jquery' ), '2.27.1', true );
	wp_enqueue_style( 'apollonia-yes-no-popups-styles', plugins_url( '', __FILE__ ) . '/css/styles.css', false, '2.27.1' );
}
