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

use WP_Query;

/**
 * Returns the first post image for a taxonomy term.
 *
 * @todo Make this dynamic, configurable (won't always be category).
 *
 * @since 1.0.0
 *
 * @param $term_id
 */
function the_first_term_image( $term_id ) {
	$args = array(
		'cat'            => $term_id,
		'posts_per_page' => 20,
	);

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) : $query->the_post();
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'content-block' );
				break;
			}
		endwhile;
	endif;

	wp_reset_postdata();
}

/**
 * Return 'ugly' labels as human readable strings.
 *
 * @since 1.0.0
 *
 * @param $label
 *
 * @return string
 */
function label_cleanup( $label ) {
	$label = str_replace( '_', ' ', $label );
	$label = ucwords( $label );

	return $label;
}

/**
 * Converts all underscores in the given string to hypens and then returns it.
 *
 * @since 1.0.0
 *
 * @param string $string
 *
 * @return string
 */
function underscores_to_hypens( $string ) {
	return str_replace( '_', '-', $string );
}
