<div
	class="<?php echo $key; ?>-row row row-hero"
	<?php echo isset( $background_image_src ) ? 'style="background-image: url(' . $background_image_src[0] . ')"' : ''?>>
	<div class="wrap">
		<?php if ( $title ) : ?>
			<h2><?php esc_html_e( $title ); ?></h2>
		<?php endif; ?>

		<?php if ( $text ) : ?>
			<p><?php esc_html_e( $text ); ?></p>
		<?php endif; ?>

		<?php if ( $button_text && $button_link ) : ?>
			<a href="<?php echo esc_url( $button_link ); ?>" class="button">
				<?php esc_html_e( $button_text ); ?>
			</a>
		<?php endif; ?>

		<?php if ( ! empty( $text_after ) ) : ?>
			<p class="row-hero-text-after"><?php esc_html_e( $text_after ); ?></p>
		<?php endif; ?>
	</div>
</div>
