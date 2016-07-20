<?php
/**
 * Template for homepage
 * @package brcdfilm
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			 <div class="segment hero-content">
			 	<?php get_main_content(); ?>
			 </div>
			<div class="segment" id="whatwedo">
				<h2 class="title text-center">What We Do</h2>
				<div class="container spacemar">
					<div class="item col-xs-12 col-sm-4" id="rental">
						<div class="item-img">
							<img class="img-responsive center-block" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/07/rental.png" alt="what we do - rental">
						</div>
						<div class="item-title">Rental</div>
						<div class="item-desc">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
						</div>
					</div>
					<div class="item col-xs-12 col-sm-4" id="rental">
						<div class="item-img">
							<img class="img-responsive center-block" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/07/service.png" alt="what we do - service">
						</div>
						<div class="item-title">Service</div>
						<div class="item-desc">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
						</div>
					</div>
					<div class="item col-xs-12 col-sm-4" id="rental">
						<div class="item-img">
							<img class="img-responsive center-block" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/07/film-making.png" alt="what we do - film-making">
						</div>
						<div class="item-title">Film Making</div>
						<div class="item-desc">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
						</div>
					</div>
				</div>
			</div>

			<div class="segment" id="highlight">	
				<?php get_highlight(); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>