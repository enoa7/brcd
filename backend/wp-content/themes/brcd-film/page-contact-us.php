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
				<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3965.3617256100515!2d106.80999731405252!3d-6.34718499540681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-6.3469824!2d106.8122075!4m5!1s0x2e69ee83896f3e01%3A0x93878020573b472e!2sJalan+Rindang+No.10%2C+Cipedak%2C+Jagakarsa%2C+Kota+Jakarta+Selatan%2C+Daerah+Khusus+Ibukota+Jakarta%2C+Indonesia!3m2!1d-6.347185!2d106.812186!5e0!3m2!1sen!2s!4v1465619260469" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</section>

			<section class="user-content">
				<div class="container">
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				<section class="brcd-form">
					<?php 
					//dont forget to use loop when using the_content();
					if(have_posts()) {
						while(have_posts()) {
							the_post();
							the_content();
						}
					}
				?>
				</section>
				
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
