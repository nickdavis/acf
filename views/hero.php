<?php use function NickDavis\ACF\Predefined\underscores_to_hypens; ?>

<div
	class="<?php echo underscores_to_hypens( $key ); ?>-row row-hero acf-row"
	<?php echo isset( $background_image_src ) ? 'style="background-image: url(' . $background_image_src[0] . ')"' : ''?>>
	<div class="wrap">
		<?php if ( $title ) : ?>
			<<?php echo $classes['title_tag']; ?> class="<?php echo underscores_to_hypens( $key ); ?>-row-title">
				<?php esc_html_e( $title ); ?>
			</<?php echo $classes['title_tag']; ?>>
		<?php endif; ?>

		<?php if ( $text ) : ?>
			<?php echo wp_kses_post( wpautop( $text ) ); ?>
		<?php endif; ?>

		<?php if ( $button_text && $button_link ) : ?>
			<div class="row-hero-call-to-action">
				<a href="<?php echo esc_url( $button_link ); ?>" class="<?php esc_attr_e( $classes['button_classes'] ); ?>">
					<?php esc_html_e( $button_text ); ?>
				</a>
			</div>
		<?php endif; ?>

		<?php if ( ! empty( $text_after ) ) : ?>
			<p class="row-hero-text-after"><?php echo wp_kses_post( $text_after ); ?></p>
		<?php endif; ?>
	</div>
</div>
