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

function get_acf_flexible_content_field( $key ) {
	return array(
		'key'          => $key,
		'label'        => '',
		'name'         => $key,
		'type'         => 'flexible_content',
		'button_label' => 'Add Row',
	);
}
