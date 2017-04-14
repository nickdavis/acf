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

function get_acf_hero_layout() {
	return array(
		'key'        => 'hero',
		'name'       => 'hero',
		'label'      => 'Hero',
		'display'    => 'block',
		'sub_fields' => array(
			array(
				'key'   => 'title',
				'label' => 'Title',
				'name'  => 'title',
				'type'  => 'text',
			),
			array(
				'key'   => 'text',
				'label' => 'Text',
				'name'  => 'text',
				'type'  => 'text',
			),
			array(
				'key'   => 'button_text',
				'label' => 'Button Text',
				'name'  => 'button_text',
				'type'  => 'text',
			),
			array(
				'key'   => 'button_link',
				'label' => 'Button Link',
				'name'  => 'button_link',
				'type'  => 'text',
			),
			array(
				'key'   => 'background_image',
				'label' => 'Background Image',
				'name'  => 'background_image',
				'type'  => 'image',
			),
		),
		'min'        => '',
		'max'        => '',
	);
}

function get_acf_hero_layout_defaults() {
	return array(
		'key'        => 'hero',
		'name'       => 'hero',
		'label'      => 'Hero',
		'display'    => 'block',
//		'sub_fields' => array(
//			array(
//				'key'   => 'title',
//				'label' => 'Title',
//				'name'  => 'title',
//				'type'  => 'text',
//			),
//			array(
//				'key'   => 'text',
//				'label' => 'Text',
//				'name'  => 'text',
//				'type'  => 'text',
//			),
//			array(
//				'key'   => 'background_image',
//				'label' => 'Background Image',
//				'name'  => 'background_image',
//				'type'  => 'image',
//			),
//		),
		'min'        => '',
		'max'        => '',
	);
}
