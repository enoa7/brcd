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
			<div class="segment" id="aboutus">
				<div class="container">
					<h2 class="title text-center">About Us</h2>
					<div class="tagline">
						<div>we are the best film gallery you'll ever meet</div>
					</div>
					<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam posuere fringilla eros, sed sagittis sapien vehicula sed. Cras finibus dapibus augue posuere lacinia. Nunc ultricies consequat volutpat. Sed efficitur felis lectus, eu suscipit mauris vehicula vitae. Aenean quis lectus ornare, elementum nisl at, sollicitudin erat. Praesent aliquet diam quis ipsum dignissim, at mattis metus porta. Morbi porta a sapien a dapibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer ac dolor vel mi eleifend molestie sed ac neque. In sit amet dictum quam. Aliquam eu hendrerit ex.</p>
					<p>Etiam tincidunt lorem turpis, quis finibus odio ultrices eget. Vestibulum eros diam, finibus ut orci ac, tempus venenatis nunc. Vestibulum ultrices, libero vel vulputate vehicula, nisi dui fermentum lacus, in lacinia eros metus ut sapien. Mauris egestas ornare mattis. Mauris ac sapien eu metus volutpat ornare. Pellentesque vel tortor neque. Aliquam venenatis id dui et venenatis.</p>
				</div>
			</div>
			<div class="segment" id="contactus">
				<div class="container">
					<h2 class="title text-center">Contact Us</h2>
					<section class="brcd-form">
						<?php echo do_shortcode('[wpforms id="91"]'); ?>
					</section>
				</div>
			</div>
			<!-- <div class="segment" id="highlight">	
				// <?php get_highlight(); ?>
			</div> -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>