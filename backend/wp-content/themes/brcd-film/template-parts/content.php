<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package brcdfilm
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class($cat_name)?>>

	<div class="container">
		<header class="entry-header">
			<?php
				if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}
			?>
		</header><!-- .entry-header -->
		<?php 
			$default = wp_get_attachment_image_src(get_field('img_1'), 'full');
		?>
		<div class="entry-gallery hero" id="hero-gallery">
			<div class="entry-gallery-theatre">
				<img class="img-responsive" src="<?php echo $default[0]; ?>">
			</div>
			<div class="entry-gallery-thumb">
				<?php 

					$imgArray = ['img_1', 'img_2'];

					foreach ($imgArray as $img) { 
						$size = 'gallery_thumb';
						$attachment_id = get_field($img);
						$img = wp_get_attachment_image_src($attachment_id, $size);
				?>

					<div class="item-list">
						<div class="item-list-thumb">
							<a class="thumbnail">
								<img class="img-responsive item-img" src="<?php echo $img[0] ?>" alt="">
							</a>
						</div>
					</div>

				<?php } ?>

			</div>
		</div>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'brcd-film' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'brcd-film' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
