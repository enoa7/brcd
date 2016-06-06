<?php

/*  -----------------------------------
 *	Template Page Rental Products
 *  @package brcdfilm
 *  ----------------------------------- */ 

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="segment spacepad-15" id="rental-package">
			<div class="container">
				<h2 class="title">Check Out Our Packages</h2>
				<div class="segment-wrap row">
				<?php 
					// WP_Query arguments
					$args = array (
						'post_parent' 	=> '17',
						'post_type' 	=> 'page',
						'order'			=>	'ASC',
						'meta_query'	=> array(
							array(
								'key'       => 'category_type',
								'value'     => 'package',
								'compare'   => '=',
							),
						),
					);


					// The Query
					$query = new WP_Query( $args );

					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							get_template_part('template-parts/content', 'item-post');
						}
					} else {
						echo 'no posts found';

					}

					// Restore original Post Data
					wp_reset_postdata();

				?>
				</div>
			</div>
		</div>
		<div class="segment spacepad-15" id="rental-category">
			<div class="container">
				<h2 class="title">Check Out Our Category</h2>
				<div class="segment-wrap row">
				<?php 
					// WP_Query arguments
					$args = array (
						'post_parent' 	=> '17',
						'post_type' 	=> 'page',
						'order'			=>	'ASC',
						'meta_query'	=> array(
							array(
								'key'       => 'category_type',
								'value'     => 'category',
								'compare'   => '=',
							),
						),
					);


					// The Query
					$query = new WP_Query( $args );

					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							get_template_part('template-parts/content', 'item-post');
						}
					} else {
						echo 'no posts found';

					}

					// Restore original Post Data
					wp_reset_postdata();

				?>
				</div>
			</div>
		</div>
	</main>
</div>

<?php get_footer(); ?>