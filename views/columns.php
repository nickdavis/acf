<?php use function NickDavis\ACF\Predefined\underscores_to_hypens; ?>

<div
	class="<?php echo underscores_to_hypens( $key ); ?>-row row-columns acf-row<?= ! empty( $background_color_row ) ? ' row-columns--has-background-color' : ''; ?><?= ! empty( $title ) ? ' row-columns--has-title' : ''; ?><?= ! empty( $button_text ) && ! empty( $button_link ) ? ' row-columns--has-button' : ''; ?><?= ! empty( $css_class ) ? ' ' . $css_class : ''; ?>"
	style="
	<?= ! empty( $background_color_row ) && empty( $background_color_row_bottom ) ? 'background-color: ' . $background_color_row . ';' : ''; ?>
	<?= ! empty( $background_color_row ) && ! empty( $background_color_row_bottom ) ? 'background: linear-gradient(' . $background_color_row . ', ' . $background_color_row_bottom . ');' : ''; ?>
		">

	<?php if ( $title ) : ?>
	<<?php echo $classes['title_tag']; ?>
	class="<?php echo underscores_to_hypens( $key ); ?>-row-title">
	<?php esc_html_e( $title ); ?>
</<?php echo $classes['title_tag']; ?>>
<?php endif; ?>

<?php if ( $columns ) : ?>
	<div class="row<?= empty( $background_color_row ) ? ' expanded' : ''; ?>">
		<?php for ( $columns_count = 0; $columns_count < $columns; $columns_count ++ ) : ?>
			<?php
			$background_color    = get_post_meta( get_the_ID(), $key . '_' . $count . '_column_' . $columns_count . '_background_color', true );
			$background_image_id = get_post_meta( get_the_ID(), $key . '_' . $count . '_column_' . $columns_count . '_background_image', true );
			if ( ! empty( $background_image_id ) ) {
				$background_image_url = wp_get_attachment_image_url( $background_image_id, 'full' );
			}
			$text = get_post_meta( get_the_ID(), $key . '_' . $count . '_column_' . $columns_count . '_text', true );
			?>
			<div
				class="<?= $column_grid_class; ?> columns<?= ! empty( $background_color ) ? ' columns--has-background-color' : ''; ?><?= ! empty( $background_image_url ) ? ' columns--has-background-image' : ''; ?>"
				style="
				<?= ! empty( $background_color ) ? 'background-color: ' . $background_color . ';' : ''; ?>
				<?= ! empty( $background_image_url ) ? 'background-image: url(' . $background_image_url . ');' : ''; ?>
					">
				<?php if ( $columns > 1 ) : ?>
				<div class="columns-inner">
				<?php endif; ?>
					<?php echo do_shortcode( wpautop( $text ) ); ?>
				<?php if ( $columns > 1 ) : ?>
				</div>
				<?php endif; ?>
			</div>
			<?php unset(
				$background_color,
				$background_image_id,
				$background_image_url
			); ?>
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
