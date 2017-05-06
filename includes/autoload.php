<?php
/**
 * Autoload
 *
 * @package     NickDavis\ACF
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://memberup.co
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\ACF;

/**
 * Autoload package files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'predefined/module.php',
	);

	foreach ($files as $file ) {
		include __DIR__ . '/' . $file;
	}
}
