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

function do_acf_terms_group( $key, $config ) {
	$predefined_fields = $config['fields'];

	if ( ! $predefined_fields ) {
		return;
	}

	/**
	 * Set field names dynamically.
	 *
	 * @link http://stackoverflow.com/questions/9257505/dynamic-variable-names-in-php#9257536
	 */
	foreach ( $predefined_fields as $field ) {
		${$field} = get_post_meta( get_the_ID(), $key . '_' . $field, true );
	}

	if ( isset( $background_image ) ) {
		$background_image_src = wp_get_attachment_image_src( $background_image, 'full' );
	}

	include ND_ACF_DIR . 'views/groups/hero.php';
}
