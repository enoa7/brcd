<?php

/*  -----------------------------------
 *	Template Page Rental Products
 *  @package brcdfilm
 *  ----------------------------------- */ 

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="segment" id="rental-package">
			<div class="container">
					<?php 
						// WP_Query arguments
						$args = array (
							'post_parent' 	=> '17',
							'post_type' 	=> 'page'
						);


						// The Query
						$query = new WP_Query( $args );

						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								the_title();
							}
						} else {
							echo 'no posts found';

						}

						// Restore original Post Data
						wp_reset_postdata();

					?>
			</div>
		</div>
	</main>
</div>

<?php get_footer(); ?>