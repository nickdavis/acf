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
				'key'               => 'field_595b767b30421',
				'label'             => 'Background Color',
				'name'              => 'background_color',
				'type'              => 'color_picker',
				'instructions'      => 'Set a background color for the whole section. If set along with a Gradient - Bottom background color, this background color becomes the top color for the gradient effect',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
			),
			array(
				'key'               => 'field_595b767b30422',
				'label'             => 'Background Color (Gradient - Bottom)',
				'name'              => 'background_color_bottom',
				'type'              => 'color_picker',
				'instructions'      => 'If set, along with the background color field above, will be used as the bottom color for the gradient effect',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
			),
			array(
				'key'   => $key . '_css_class',
				'label' => 'CSS Class',
				'name'  => 'css_class',
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
					array(
						'key'               => 'field_595b767b30425',
						'label'             => 'Background Color',
						'name'              => 'background_color',
						'type'              => 'color_picker',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
					),
					array(
						'key'               => 'field_595b768c30426',
						'label'             => 'Background Image',
						'name'              => 'background_image',
						'type'              => 'image',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'return_format'     => 'array',
						'preview_size'      => 'thumbnail',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
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
