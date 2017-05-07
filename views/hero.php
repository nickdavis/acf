<?php use function NickDavis\ACF\Predefined\underscores_to_hypens; ?>

<div
	class="<?php echo underscores_to_hypens( $key ); ?>-row row-hero acf-row"
	<?php echo isset( $background_image_src ) ? 'style="background-image: url(' . $background_image_src[0] . ')"' : ''?>>
	<div class="wrap">
		<?php if ( $title ) : ?>
			<<?php echo $classes['title_tag']; ?>>
				<?php esc_html_e( $title ); ?>
			</<?php echo $classes['title_tag']; ?>>
		<?php endif; ?>

		<?php if ( $text ) : ?>
			<p><?php esc_html_e( $text ); ?></p>
		<?php endif; ?>

		<?php if ( $button_text && $button_link ) : ?>
			<a href="<?php echo esc_url( $button_link ); ?>" class="<?php esc_attr_e( $classes['button_classes'] ); ?>">
				<?php esc_html_e( $button_text ); ?>
			</a>
		<?php endif; ?>

		<?php if ( ! empty( $text_after ) ) : ?>
			<p class="row-hero-text-after"><?php esc_html_e( $text_after ); ?></p>
		<?php endif; ?>
	</div>
</div>
