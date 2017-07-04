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
 * Register the two column ACF row layout.
 *
 * @since 1.0.0
 *
 * @return array
 */
function get_acf_columns_layout() {
	$key = 'columns';

	return array(
		'key'        => $key,
		'name'       => $key,
		'label'      => 'Columns',
		'display'    => 'block',
		'sub_fields' => array(
			array(
				'key'   => $key . '_title',
				'label' => 'Title',
				'name'  => 'title',
				'type'  => 'text',
			),
			array(
				'key'               => $key . 'column',
				'label'             => 'Columns',
				'name'              => 'column',
				'type'              => 'repeater',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'collapsed'         => '',
				'min'               => 0,
				'max'               => 2,
				'layout'            => 'row',
				'button_label'      => 'Add Column',
				'sub_fields'        => array(
					array(
						'key'               => 'field_5926cdc082e88',
						'label'             => 'Column',
						'name'              => 'text',
						'type'              => 'wysiwyg',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'tabs'              => 'all',
						'toolbar'           => 'full',
						'media_upload'      => 1,
						'delay'             => 0,
					),
				),
			),
			array(
				'key'   => $key . '_button_text',
				'label' => 'Button Text',
				'name'  => 'button_text',
				'type'  => 'text',
			),
			array(
				'key'   => $key . '_button_link',
				'label' => 'Button Link',
				'name'  => 'button_link',
				'type'  => 'url',
			),
		),
		'min'        => '',
		'max'        => '',
	);
}
