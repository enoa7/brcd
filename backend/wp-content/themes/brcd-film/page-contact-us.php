<?php
/**
 * Template for Contact Us Page
 * @package brcdfilm
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="brcd-gmap">
				<!-- google map goes here -->
			</section>

			<section class="user-content">
				<div class="container">
				<?php 

					//dont forget to use loop when using the_content();
					if(have_posts()) {
						while(have_posts()) {
							the_post();
							the_content();
						}
					}

				?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
