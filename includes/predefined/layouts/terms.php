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

function get_acf_terms_layout() {
	return array(
		'key'        => 'terms',
		'name'       => 'terms',
		'label'      => 'Terms',
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
				'type'  => 'textarea',
			),
			array(
				'key'               => 'taxonomy',
				'label'             => 'Taxonomy',
				'name'              => 'taxonomy',
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
				'max'               => 0,
				'layout'            => 'table',
				'button_label'      => '',
				'sub_fields'        => array(
					array(
						'key'               => 'term',
						'label'             => 'Term',
						'name'              => 'term',
						'type'              => 'taxonomy',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'taxonomy'          => 'category',
						'field_type'        => 'radio',
						'allow_null'        => 0,
						'add_term'          => 0,
					),
				),
			),
		),
		'min'        => '',
		'max'        => '',
	);
}
