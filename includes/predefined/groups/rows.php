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

use WP_Query;

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

	include ND_ACF_DIR . 'views/rows-open.php';

	foreach ( (array) $rows as $count => $row ) {
		switch ( $row ) {
			// Columns layout
			case 'columns':
				$title       = get_post_meta( get_the_ID(), $key . '_' . $count . '_title', true );
				$columns     = get_post_meta( get_the_ID(), $key . '_' . $count . '_column', true );
				$button_text = get_post_meta( get_the_ID(), $key . '_' . $count . '_button_text', true );
				$button_link = get_post_meta( get_the_ID(), $key . '_' . $count . '_button_link', true );

				$custom_classes = $config['view'];

				$default_classes = array(
					'title_tag'      => 'h2',
					'button_classes' => 'button',
				);

				$classes = process_custom_acf_classes( $default_classes, $custom_classes );

				include ND_ACF_DIR . 'views/columns.php';

				unset(
					$title,
					$columns,
					$button_text,
					$button_link
				);

				break;

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

				$custom_classes = $config['view'];

				$default_classes = array(
					'title_tag'      => 'h3',
					'button_classes' => 'button',
				);

				$classes = process_custom_acf_classes( $default_classes, $custom_classes );

				include ND_ACF_DIR . 'views/hero.php';

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

			// Posts layout
			case 'posts':
				$case = 'posts';

				$title   = get_post_meta( get_the_ID(), $key . '_' . $count . '_' . $case . '_title', true );
				$text    = get_post_meta( get_the_ID(), $key . '_' . $count . '_' . $case . '_text', true );
				$posts   = get_post_meta( get_the_ID(), $key . '_' . $count . '_' . $case . '_posts', true );
				$classes = get_post_meta( get_the_ID(), $key . '_' . $count . '_' . $case . '_classes', true );

				if ( isset( $posts ) ) {
					$show_excerpts = get_post_meta( get_the_ID(), $key . '_' . $count . '_' . $case . '_show_excerpts', true );
					$show_images   = get_post_meta( get_the_ID(), $key . '_' . $count . '_' . $case . '_show_images', true );
					$read_more     = get_post_meta( get_the_ID(), $key . '_' . $count . '_' . $case . '_read_more', true );

					$post_ids = array();

					for ( $posts_count = 0; $posts_count < $posts; $posts_count ++ ) {
						$post_ids[] = get_post_meta( get_the_ID(), $key . '_' . $count . '_posts_posts_' . $posts_count . '_post', true );
					}

					$args_for_posts_query = array(
						'orderby'   => 'post__in',
						'post_type' => 'any',
						'post__in'  => $post_ids,
					);

					$posts_query = new WP_Query( $args_for_posts_query );
				}

				include ND_ACF_DIR . 'views/posts.php';

				wp_reset_postdata();

				break;

			// Terms layout
			case
			'terms':
				$case = 'terms';

				$title = get_post_meta( get_the_ID(), $key . '_' . $count . '_' . $case . '_title', true );
				$text  = get_post_meta( get_the_ID(), $key . '_' . $count . '_' . $case . '_text', true );
				$terms = get_post_meta( get_the_ID(), $key . '_' . $count . '_' . $case . '_taxonomy', true );

				include ND_ACF_DIR . 'views/terms.php';

				break;
		}
	}

	include ND_ACF_DIR . 'views/rows-close.php';
}
