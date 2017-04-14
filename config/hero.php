<?php
/**
 * Default runtime config for the ACF Hero module
 *
 * @package     NickDavis\ACF
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.com
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\ACF;

$key = 'nd_hero';

return array(
	'key'  => $key,

	'args' => array(
		'key'   => 'group_' . $key,
		'title' => 'Hero',
		'location' => '',
		'position' => 'acf_after_title',
	),

	'fields' => array(
		'title',
		'text',
		'button_text',
		'button_link',
		'text_after',
		'background_image',
	),

	'view' => array(
		'classes'         => '',
		'wrapper_classes' => '',

		'title_tag'      => '',
		'button_classes' => '',
	)
);
