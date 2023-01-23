<?php
/*
Plugin Name: DPlugin
Description: This plugin adds date after the post title
Version: 1.0
Author: Dmitry Borovitsky
Text Domain: dplugin
*/

class DPlugin {

    public function __construct() {
        //Check PHP version and deactivate plugin if below 7.4
        if ( version_compare( PHP_VERSION, '7.4', '<' ) ) {
            add_action( 'admin_notices', array( $this, 'php_version_notice' ) );
            add_action( 'admin_init', array( $this, 'deactivate_self' ) );
            return;
        }
        add_filter( 'the_title', array( $this, 'add_date_to_title' ) );
    }

   function add_date_to_title( $title ) {
		$date = get_the_date();
		return $title . " - " . $date;
	}
   


    public function deactivate_self() {
        deactivate_plugins( plugin_basename( __FILE__ ) );
    }

    public function php_version_notice() {
        $message = sprintf( __( 'WARNING PHP VERSION!!! DPlugin plugin requires PHP 7.4 or higher to function. Your version is %s', 'dplugin' ), PHP_VERSION );
        printf( '<div class="notice notice-warning"><p>%s</p></div>', $message );
    }

}
new DPlugin();