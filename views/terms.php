<div
	class="<?php echo $key; ?>-row acf-row row-terms terms-count-<?php echo $terms; ?>"
	<?php echo isset( $background_image_src ) ? 'style="background-image: url(' . $background_image_src[0] . ')"' : '' ?>>
	<div class="wrap">
		<?php if ( $title ) : ?>
			<h3><?php esc_html_e( $title ); ?></h3>
		<?php endif; ?>

		<?php if ( $text ) : ?>
			<p><?php echo nl2br( esc_html( $text ) ); ?></p>
		<?php endif; ?>

		<?php if ( $terms ) : ?>
			<div class="row-terms-terms">
				<?php for ( $terms_count = 0; $terms_count < $terms; $terms_count ++ ) :
					$term_id = get_post_meta( get_the_ID(), $key . '_' . $count . '_terms_taxonomy_' . $terms_count . '_term', true );
					$term = get_term( $term_id );
					?>

					<div class="row-terms-term">
						<h5>
							<a href="<?php echo get_term_link( $term ); ?>"><?php esc_html_e( $term->name ); ?></a>
						</h5>
					</div>

				<?php endfor; ?>
			</div>
		<?php endif; ?>

		<?php if ( isset( $button_text ) && isset( $button_link ) ) : ?>
			<a href="<?php echo esc_url( $button_link ); ?>" class="button">
				<?php esc_html_e( $button_text ); ?>
			</a>
		<?php endif; ?>

		<?php if ( ! empty( $text_after ) ) : ?>
			<p class="row-hero-text-after"><?php esc_html_e( $text_after ); ?></p>
		<?php endif; ?>
	</div>
</div>
