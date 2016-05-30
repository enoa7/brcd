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
		<div class="entry-gallery hero clearfix" id="hero-gallery">
			<div class="entry-gallery-theatre col-xs-12 col-sm-9 nopadding">
				<img class="img-responsive" src="<?php echo $default[0]; ?>" alt="">
			</div> 
			<div class="entry-gallery-thumb col-xs-12 col-sm-3">
				<?php 

					$imgArray = ['img_1', 'img_2'];

					foreach ($imgArray as $img) { 
						$size = 'gallery_thumb';
						$attachment_id = get_field($img);
						$img = wp_get_attachment_image_src($attachment_id, $size);
						$img_title = get_the_title($attachment_id);
						
				?>

					<div class="item-list">
						<div class="item-list-thumb">
							<a class="thumbnail">
								<img class="img-responsive item-img" src="<?php echo $img[0] ?>" alt="<?php echo $img_title ?>">
							</a>
						</div>
					</div>

				<?php } ?>

			</div>
		</div>
		<div class="entry-content col-xs-12 col-sm-9 nopadding">
			<div class="entry-content-desc">
				<h2>Description</h2>
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
			</div>
			<div class="entry-content-video">
				<h2>Video</h2>
				<div class="video-item row">
					<?php 
						$video = get_field('video');
						echo $video;
					?>
				</div>
			</div>
			<div class="entry-content-button spacepad">
				<button type="button" class="fullwidth btn-brcd btn-brcd-primary">Enquire Now</button>
			</div>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
