<?php 
	
	/* 
	 * Template Name: Package
	 */

	$post_type = get_post_type();

	get_header();
	
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="container">
		<h1><?php echo get_the_title() ?></h1>
		<?php 

			// WP_Query arguments
			$args = array (
				'post_type'              => array( 'post' ),
				'post_status'            => array( 'publish' ),
				'cat'                    => '9',
			);

			// The Query
			$query = new WP_Query( $args );

			//The Loop
			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>



			<article id="post-<?php the_ID(); ?>" <?php post_class('section-item item-package')?>>
				<div class="section-header clearfix ">
					<div class="section-title"><div class="entry-title"><?php echo get_the_title() ?></div></div>
					<div class="section-trigger pull-right">
						<div class="trigger trigger-show-hide">
							<!-- <i class="fa fa-plus"></i> -->
							<div class="bar-plus bar-plus-one"></div>
							<div class="bar-plus bar-plus-two"></div>
						</div>
					</div>
				</div>
				<div class="section-content entry-content">
					<?php the_content(); ?>
					<div class="section-enquire">
						<button class="btn-brcd-primary" data-toggle="modal" data-target="#modal-id" href="<?php echo site_url() . '/wp-content/themes/brcd-film/inc/form/enquire-modal.php' ?>" data-enquire="<?php echo get_the_title(); ?>">Enquire Now</button>
						
					</div>
				</div>
				
			</article>
		
	
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php 
			endif; 
			// Restore original Post Data
			wp_reset_postdata();
		?>
		</div>

	</main>
</div>

<?php get_footer(); ?>


