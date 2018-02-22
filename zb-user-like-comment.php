<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://facebook.com/hlaporthein
 * @since             1.0.0
 * @package           zb-user-like-comment
 *
 * @wordpress-plugin
 * Plugin Name:       ZB User Like Comment
 * Plugin URI:        http://flextech.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            flextech
 * Author URI:        http://facebook.com/hlaporthein
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       zb-user-like-comment
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define('ZB_ULC_PLUGIN_VERSION', '1.0.0');
define('ZB_ULC_PLUGIN_TABLE_NAME', 'user_like');
define('ZB_ULC_PLUGIN_LANG', 'zebra');


/**
 * Create Like Table
 */
require_once plugin_dir_path(__FILE__) . 'inc/user-like-table.php';


/**
 * Database table create with hook
 */
register_activation_hook(__FILE__, '_zb_ulc_table_create');
register_deactivation_hook(__FILE__, '_zb_ulc_table_delete');