<?php
/**
 * Template for homepage
 * @package brcdfilm
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php 
	$video = get_field('hero_video');
	// $whatwedo = get_field('what_we_do');
 ?>

 <div class="segment hero-content">

 	<?php if(!is_mobile()) { ?>
	<video id="hero-video" loop>
	  <!-- <source src="http://www.artcopycode.com/videos/acc.mp4" type="video/mp4"> -->
	  <source src="<?php echo esc_url( get_stylesheet_directory_uri( '/' ) ); ?>/inc/video/<?php echo $video ?>.mp4" type="video/mp4">
	  Oh noes! Your browser does not support the video tag.
	</video>
	<?php } else {
		get_mainbanner('mainBanner_xs', 'mainBanner_lg');
	} ?>
 </div>

<div class="segment" id="whatwedo">
	<h2 class="title text-center">What We Do</h2>
	<div class="container spacemar">
		<div class="item col-xs-12 col-sm-4" id="rental">
			<div class="item-img">
				<img class="img-responsive center-block" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/05/rental.png" alt="what we do - rental">
			</div>
			<div class="item-title">Rental</div>
			<div class="item-desc">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
			</div>
		</div>
		<div class="item col-xs-12 col-sm-4" id="rental">
			<div class="item-img">
				<img class="img-responsive center-block" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/05/service.png" alt="what we do - service">
			</div>
			<div class="item-title">Service</div>
			<div class="item-desc">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
			</div>
		</div>
		<div class="item col-xs-12 col-sm-4" id="rental">
			<div class="item-img">
				<img class="img-responsive center-block" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/05/film-making.png" alt="what we do - film-making">
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

<?php
//get_sidebar();
get_footer();
