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

function get_acf_button_link_field( $key, $field ) {
	return _get_acf_url_field( $key, $field );
}

function _get_acf_url_field( $key, $field ) {
	return array(
		'key'   => $key . $field,
		'label' => label_cleanup( $field ),
		'name'  => $key . $field,
		'type'  => 'url',
	);
}
