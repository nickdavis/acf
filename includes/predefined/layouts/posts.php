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

function get_acf_posts_layout() {
	$key = 'posts';

	return array(
		'key'        => $key,
		'name'       => $key,
		'label'      => 'Posts',
		'display'    => 'block',
		'sub_fields' => array(
			array(
				'key'   => $key . '_title',
				'label' => 'Title',
				'name'  => $key . '_title',
				'type'  => 'text',
			),
			array(
				'key'   => $key . '_text',
				'label' => 'Text',
				'name'  => $key . '_text',
				'type'  => 'textarea',
			),
			array(
				'key'          => $key . '_posts',
				'label'        => 'Posts',
				'name'         => $key . '_posts',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add Post',
				'sub_fields'   => array(
					array(
						'key'        => 'post',
						'label'      => 'Post',
						'name'       => 'post',
						'type'       => 'post_object',
						'field_type' => 'radio',
						'allow_null' => 0,
						'add_term'   => 0,
					),
				),
			),
			array(
				'key'           => $key . '_show_images',
				'label'         => 'Show images?',
				'name'          => $key . '_show_images',
				'type'          => 'true_false',
				'default_value' => 1,
			),
			array(
				'key'           => $key . '_show_excerpts',
				'label'         => 'Show excerpts?',
				'name'          => $key . '_show_excerpts',
				'type'          => 'true_false',
				'default_value' => 1,
			),
			array(
				'key'           => $key . '_read_more',
				'label'         => '\'Read More\' text',
				'name'          => $key . '_read_more',
				'type'          => 'text',
				'instructions'  => 'Leave blank for no \'read more\'',
				'default_value' => 'Read More',
			),
			array(
				'key'           => $key . '_classes',
				'label'         => 'CSS class',
				'name'          => $key . '_classes',
				'type'          => 'text',
				'instructions'  => 'Add custom CSS classes to this layout (separate multiple classes with spaces)',
				'default_value' => '',
			),
		),
		'min'        => '',
		'max'        => '',
	);
}
