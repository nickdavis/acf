<?php use function NickDavis\ACF\Predefined\underscores_to_hypens; ?>

<div
	class="<?php echo underscores_to_hypens( $key ); ?>-row row-columns acf-row"
	<?php echo isset( $background_image_src ) ? 'style="background-image: url(' . $background_image_src[0] . ')"' : '' ?>>
	<div class="wrap">
		<?php if ( $title ) : ?>
		<<?php echo $classes['title_tag']; ?>
		class="<?php echo underscores_to_hypens( $key ); ?>-row-title">
		<?php esc_html_e( $title ); ?>
	</<?php echo $classes['title_tag']; ?>>
	<?php endif; ?>

	<?php if ( $columns ) : ?>
		<div class="row">
			<?php for ( $columns_count = 0; $columns_count < $columns; $columns_count ++ ) : ?>
				<?php $text = get_post_meta( get_the_ID(), $key . '_' . $count . '_column_' . $columns_count . '_text', true ); ?>
				<div class="medium-6 columns">
					<?php echo wpautop( $text ); ?>
				</div>
			<?php endfor; ?>
		</div>
	<?php endif; ?>

	<?php if ( $button_text && $button_link ) : ?>
		<div class="row-columns__footer">
			<a href="<?php echo esc_url( $button_link ); ?>"
			   class="<?php esc_attr_e( $classes['button_classes'] ); ?>">
				<?php esc_html_e( $button_text ); ?>
			</a>
		</div>
	<?php endif; ?>

	<?php if ( ! empty( $text_after ) ) : ?>
		<p class="row-hero-text-after"><?php esc_html_e( $text_after ); ?></p>
	<?php endif; ?>
</div>
</div>
