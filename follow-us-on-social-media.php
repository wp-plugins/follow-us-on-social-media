<?php
/**
 * Follow Us on Social Media.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   Follow_Us_On_Social_Media 
 * @author    Dave Bush <dave@nimkeesoftware.com>
 * @license   GPL-2.0+
 * @link      https://github.com/bush/follow-us-on-social-media
 * @copyright 2014 NimkeeSoftware.com
 *
 * @wordpress-plugin
 * Plugin Name:       Follow Us on Social Media 
 * Plugin URI:        https://github.com/bush/follow-us-on-social-media
 * Description:       Just Another Follow Us Plugin
 * Version:           1.0.4
 * Author:            Dave Bush
 * Author URI:        http://nimkeesoftware.com
 * Text Domain:       follow-us-on-social-media-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/bush/follow-us-on-social-media
 * WordPress-Plugin-Boilerplate: v2.6.1
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-follow-us-on-social-media.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
register_activation_hook( __FILE__, array( 'Follow_Us_On_Social_Media', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Follow_Us_On_Social_Media', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
add_action( 'plugins_loaded', array( 'Follow_Us_On_Social_Media', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-name-admin.php` with the name of the plugin's admin file
 * - replace Plugin_Name_Admin with the name of the class defined in
 *   `class-plugin-name-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-follow-us-on-social-media-admin.php' );
	add_action( 'plugins_loaded', array( 'Follow_Us_On_Social_Media_Admin', 'get_instance' ) );

}
