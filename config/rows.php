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

namespace NickDavis\ACF;

$key = 'nd_rows';

return array(
	'key'  => $key,
	'type' => 'rows',

	'args' => array(
		'key'      => 'group_' . $key,
		'title'    => 'Rows',
		'location' => '',
		'position' => 'acf_after_title',
	),

	'layouts' => array(
		'hero',
		'columns_two',
		'content',
	),

	'view' => array(
		'classes'         => '',
		'wrapper_classes' => '',

		'title_tag'      => '',
		'button_classes' => '',
	)
);
