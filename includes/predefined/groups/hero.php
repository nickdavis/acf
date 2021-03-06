<?php
/**
 * ACF Hero module
 *
 * @package     NickDavis\ACF\Hero
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.com
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\ACF\Predefined;

function get_acf_hero_group( $key, $config ) {
	$args = array();
	$args = $config['args'];

	$predefined_fields = $config['fields'];

	if ( ! $predefined_fields ) {
		return $args;
	}

	$args['fields'] = process_predefined_acf_fields( $key, $predefined_fields );

	return $args;
}

function do_acf_hero_group( $key, $config ) {
	$predefined_fields = $config['fields'];

	if ( ! $predefined_fields ) {
		return;
	}

	$custom_classes = $config['view'];

	$default_classes = array(
		'title_tag'      => 'h2',
		'button_classes' => 'button',
	);

	$classes = process_custom_acf_classes( $default_classes, $custom_classes );

	$empty_fields_count = 0;

	/**
	 * Set field names dynamically.
	 *
	 * @link http://stackoverflow.com/questions/9257505/dynamic-variable-names-in-php#9257536
	 */
	foreach ( $predefined_fields as $field ) {
		${$field} = get_post_meta( get_the_ID(), $key . '_' . $field, true );

		if ( empty( ${$field} ) ) {
			$empty_fields_count++;
		}
	}

	if ( $empty_fields_count === count( $predefined_fields ) ) {
		return;
	}

	if ( isset( $background_image ) ) {
		$background_image_src = wp_get_attachment_image_src( $background_image, 'full' );
	}

	include ND_ACF_DIR . 'views/hero.php';
}
