<?php
use function NickDavis\ACF\Predefined\underscores_to_hypens;
?>

<div
	class="<?php echo underscores_to_hypens( $key ); ?>-row acf-row row-pricing-table"
	<?php echo isset( $background_image_src ) ? 'style="background-image: url(' . $background_image_src[0] . ')"' : '' ?>>
	<div class="wrap">

		<?php if ( $title || $text ) : ?>
		<div class="row-pricing-table__header">
			<?php endif; ?>

			<?php if ( $title ) : ?>
				<h3 class="row-pricing-table__title"><?php esc_html_e( $title ); ?></h3>
			<?php endif; ?>

			<?php if ( $text ) : ?>
				<p><?php echo nl2br( esc_html( $text ) ); ?></p>
			<?php endif; ?>

			<?php if ( $title || $text ) : ?>
		</div>
	<?php endif; ?>

	<?php if ( $columns ) : ?>
		<div class="row<?php echo empty( $background_color_row ) ? ' expanded' : ''; ?>">
			<?php for ( $columns_count = 0; $columns_count < $columns; $columns_count ++ ) : ?>
				<?php

				$title = get_post_meta( get_the_ID(), $key . '_' . $count . '_column_' . $columns_count . '_title', true );
				$featured = get_post_meta( get_the_ID(), $key . '_' . $count . '_column_' . $columns_count . '_featured', true );
				$price = get_post_meta( get_the_ID(), $key . '_' . $count . '_column_' . $columns_count . '_price', true );
				$button_text = get_post_meta( get_the_ID(), $key . '_' . $count . '_column_' . $columns_count . '_button_text', true );
				$button_url = get_post_meta( get_the_ID(), $key . '_' . $count . '_column_' . $columns_count . '_button_url', true );
				$after_button_text = get_post_meta( get_the_ID(), $key . '_' . $count . '_column_' . $columns_count . '_after_button_text', true );
				$benefits = get_post_meta( get_the_ID(), $key . '_' . $count . '_column_' . $columns_count . '_benefits', true );
				?>
				<div
					class="row-pricing-table__column <?= $column_grid_class; ?> columns">

					<div class="row-pricing-table__column__header">
						<h2 class="row-pricing-table__column__title"><?= esc_html( $title ); ?></h2>
						<p class="row-pricing-table__column__price"><?= $price; ?></p>
						<a class="row-pricing-table__column__button button small" href="<?= esc_url( $button_url ); ?>"><?= esc_html( $button_text ); ?></a>
						<p class="row-pricing-table__column__after-button-text"><?= esc_html( $after_button_text ); ?></p>
					</div>

					<?php if ( $benefits ) : ?>
					<ul class="row-pricing-table__column__benefits">
						<?php for ( $benefits_count = 0; $benefits_count < $benefits; $benefits_count ++ ) : ?>
							<?php $benefit = get_post_meta( get_the_ID(), $key . '_' . $count . '_column_' . $columns_count . '_benefits_' . $benefits_count . '_benefit', true ); ?>
							<li class="row-pricing-table__column__benefit"><?= esc_html( $benefit ); ?></li>
						<?php endfor; ?>
					</ul>
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

	</div>
</div>
