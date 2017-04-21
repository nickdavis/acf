<?php
/**
 * ACF Rows (Flexible Content) predefined group
 *
 * @package     NickDavis\ACF
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.com
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\ACF\Predefined;

function get_acf_rows_group( $key, $config ) {
	$args = array();
	$args = $config['args'];

	$args['fields'][0]            = get_acf_flexible_content_field( $key );
	$args['fields'][0]['layouts'] = process_predefined_acf_layouts( $key, $config['layouts'] );

	return $args;
}

function do_acf_rows_group( $key, $config ) {
	$rows = get_post_meta( get_the_ID(), $key, true );

	if ( ! $rows ) {
		return;
	}

	include ND_ACF_DIR . 'views/groups/rows-open.php';

	foreach ( (array) $rows as $count => $row ) {
		switch ( $row ) {
			// Hero layout
			case 'hero':
				$title            = get_post_meta( get_the_ID(), $key . '_' . $count . '_title', true );
				$text             = get_post_meta( get_the_ID(), $key . '_' . $count . '_text', true );
				$button_text      = get_post_meta( get_the_ID(), $key . '_' . $count . '_button_text', true );
				$button_link      = get_post_meta( get_the_ID(), $key . '_' . $count . '_button_link', true );
				$text_after       = get_post_meta( get_the_ID(), $key . '_' . $count . '_text_after', true );
				$background_image = get_post_meta( get_the_ID(), $key . '_' . $count . '_background_image', true );

				if ( isset( $background_image ) ) {
					$background_image_src = wp_get_attachment_image_src( $background_image, 'full' );
				}

				include ND_ACF_DIR . 'views/groups/hero.php';

				unset(
					$title,
					$text,
					$button_text,
					$button_link,
					$text_after,
					$background_image,
					$background_image_src
				);

				break;

			// Terms layout
			case 'terms':
				$title = get_post_meta( get_the_ID(), $key . '_' . $count . '_title', true );
				$text  = get_post_meta( get_the_ID(), $key . '_' . $count . '_text', true );
				$terms = get_post_meta( get_the_ID(), $key . '_' . $count . '_taxonomy', true );

//				$button_text      = get_post_meta( get_the_ID(), $key . '_' . $count . '_button_text', true );
//				$button_link      = get_post_meta( get_the_ID(), $key . '_' . $count . '_button_link', true );
//				$text_after       = get_post_meta( get_the_ID(), $key . '_' . $count . '_text_after', true );
//				$background_image = get_post_meta( get_the_ID(), $key . '_' . $count . '_background_image', true );

//				if ( isset( $background_image ) ) {
//					$background_image_src = wp_get_attachment_image_src( $background_image, 'full' );
//				}

				include ND_ACF_DIR . 'views/groups/terms.php';

				break;
		}
	}

	include ND_ACF_DIR . 'views/groups/rows-close.php';
}
