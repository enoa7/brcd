<?php 
	
	/* 
	 * Template Name: Package
	 */

	$post_type = get_post_type();

	get_header();
	
?>

<?php 

	// WP_Query arguments
	$args = array (
		'post_type'              => array( 'post' ),
		'post_status'            => array( 'publish' ),
		'cat'                    => $category,
	);

	// The Query
	$query = new WP_Query( $args );

	//The Loop
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="container">
			<article id="post-<?php the_ID(); ?>" <?php post_class('item-package')?>>
				<div class="entry-header">
					<h1 class="entry-title"><?php echo get_the_title() ?></h1>
				</div>
			</article>
		</div>

	</main>
</div>
	
	

	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php 
		endif; 
		// Restore original Post Data
		wp_reset_postdata();
	?>

<?php get_footer(); ?>


