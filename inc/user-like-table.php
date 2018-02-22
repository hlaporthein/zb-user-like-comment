<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

/**
 * Create User API key table
 */
function _zb_ulc_table_create() {

	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	$table_name      = $wpdb->prefix . ZB_ULC_PLUGIN_TABLE_NAME;

	$sql = "CREATE TABLE $table_name (
		  id int(11) unsigned NOT NULL AUTO_INCREMENT,
		  user_id int(11) NOT NULL,
		  comment_id int(11) NOT NULL,
		  datetime datetime NOT NULL default current_timestamp,
		  PRIMARY KEY (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

}


/**
 * Drop user key table
 */
function _zb_ulc_table_delete() {
	global $wpdb;
	$table_name = $wpdb->prefix . ZB_ULC_PLUGIN_TABLE_NAME;
	$sql        = "DROP TABLE IF EXISTS $table_name";
	$wpdb->query( $sql );
}