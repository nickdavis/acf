<?php use function NickDavis\ACF\Predefined\underscores_to_hypens; ?>

<div
	class="<?php echo underscores_to_hypens( $key ); ?>-row acf-row row-posts posts-count-<?php echo $posts; ?> <?php esc_attr_e( $classes ); ?>"
	<?php echo isset( $background_image_src ) ? 'style="background-image: url(' . $background_image_src[0] . ')"' : '' ?>>
	<div class="wrap">

		<div class="row-posts-header">
			<?php if ( $title ) : ?>
				<h3><?php esc_html_e( $title ); ?></h3>
			<?php endif; ?>

			<?php if ( $text ) : ?>
				<p><?php echo nl2br( esc_html( $text ) ); ?></p>
			<?php endif; ?>
		</div>

		<?php if ( $posts_query->have_posts() ) : ?>
			<div class="row-posts-posts">
				<?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
					<div class="row-posts-post">
						<?php if ( ! empty ( $show_images ) ) : ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'content-block-x3' ); ?>
							</a>
						<?php endif ?>
						<h6>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h6>
						<?php if ( ! empty ( $show_excerpts ) ) {
							the_excerpt();
						} ?>
						<?php if ( ! empty ( $read_more ) ) : ?>
							<a href="<?php the_permalink(); ?>"
							   class="read-more">
								<?php esc_html_e( $read_more ); ?>
							</a>
						<?php endif; ?>
					</div>

				<?php endwhile; ?>
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
