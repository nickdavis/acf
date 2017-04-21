<div
	class="<?php echo $key; ?>-row row row-terms terms-count-<?php echo $terms;?>"
	<?php echo isset( $background_image_src ) ? 'style="background-image: url(' . $background_image_src[0] . ')"' : '' ?>>
	<div class="wrap">
		<?php if ( $title ) : ?>
			<h2><?php esc_html_e( $title ); ?></h2>
		<?php endif; ?>

		<?php if ( $text ) : ?>
			<p><?php esc_html_e( $text ); ?></p>
		<?php endif; ?>

		<?php if ( $terms ) :
			for ( $terms_count = 0; $terms_count < $terms; $terms_count ++ ) :
				$term_id = get_post_meta( get_the_ID(), $key . '_' . $count . '_taxonomy_' . $terms_count . '_term', true );
				$term = get_term( $term_id );
		?>

				<h5><a href="<?php echo get_term_link( $term ); ?>"><?php esc_html_e( $term->name ); ?></a></h5>

			<?php endfor;
		endif; ?>

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
