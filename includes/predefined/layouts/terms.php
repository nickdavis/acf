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
	$key = 'terms';

	return array(
		'key'        => $key,
		'name'       => $key,
		'label'      => 'Terms',
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
				'key'               => $key . '_taxonomy',
				'label'             => 'Taxonomy',
				'name'              => $key . '_taxonomy',
				'type'              => 'repeater',
				'layout'            => 'table',
				'button_label'      => 'Add Term',
				'sub_fields'        => array(
					array(
						'key'               => 'term',
						'label'             => 'Term',
						'name'              => 'term',
						'type'              => 'taxonomy',
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
