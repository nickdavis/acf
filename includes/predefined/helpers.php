<?php
/**
 * Description
 *
 * @package     ${NAMESPACE}
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.com
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\ACF\Predefined;

/**
 * Return 'ugly' labels as human readable strings.
 *
 * @since 1.0.0
 *
 * @param $label
 *
 * @return string
 */
function label_cleanup( $label ) {
	$label = str_replace( '_', ' ', $label );
	$label = ucwords( $label );

	return $label;
}

/**
 * Converts all underscores in the given string to hypens and then returns it.
 *
 * @since 1.0.0
 *
 * @param string $string
 *
 * @return string
 */
function underscores_to_hypens( $string ) {
	return str_replace( '_', '-', $string );
}
