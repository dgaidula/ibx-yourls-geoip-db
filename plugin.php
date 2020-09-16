<?php
/*
Plugin Name: GEOIP DB PATH
Plugin URI: https://github.com/dgaidula/ibx-yourls-geoip-db
Description: Set GEOIP DB to your own locally updated one rather than the inlcuded yourls one.
Version: 1.0
Author: D Gaidula
Author URI: https://gaidula.com/
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

// location of your server's maxmind country DB.
define( 'IBX_YOURLS_COUNTRY_DB', '/PATHTO/GeoIP/GeoLite2-Country.mmdb' );

yourls_add_filter( 'geo_ip_path_to_db', 'ibx_geoip_db_path' );

function ibx_geoip_db_path ( $value ) {

	return IBX_YOURLS_COUNTRY_DB;
}


?>
