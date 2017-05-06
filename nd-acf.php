<?php
/**
 * Library for Advanced Custom Fields module generation and rendering
 *
 * @package     NickDavis\ACF
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.com
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\ACF;

/**
 * Checks if package is already loaded and bails, if so.
 *
 * @since 1.0.0
 */
if ( defined( 'ND_ACF_LOADED' ) ) {
	return;
}

/**
 * Sets up the packages's constants.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_constants() {
	$package_url = plugin_dir_url( __FILE__ );
	if ( is_ssl() ) {
		$package_url = str_replace( 'http://', 'https://', $package_url );
	}

	define( 'ND_ACF_LOADED', true );
	define( 'ND_ACF_VERSION', '1.0.0' );
	define( 'ND_ACF_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
	define( 'ND_ACF_URL', $package_url );
	define( 'ND_ACF_FILE', __FILE__ );
}

/**
 * Kicks off the package by initializing the package files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_autoloader() {
	require_once( 'includes/autoload.php' );

	autoload();
}

/**
 * Launches the package.
 *
 * @since 1.0.0
 *
 * @return void
 */
function launch() {
	init_autoloader();
}

init_constants();
launch();
