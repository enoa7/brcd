
<?php 
	$video = get_field('hero_video');
 ?>

 <div class="hero-content">
	<video id="hero-video" loop autoplay>
	  <source src="<?php echo esc_url( get_stylesheet_directory_uri( '/' ) ); ?>/inc/video/<?php echo $video ?>.mp4" type="video/mp4">
	  <source src="<?php echo esc_url( get_stylesheet_directory_uri( '/' ) ); ?>/inc/video/<?php echo $video ?>.mp4" type="video/ogg">
	  Oh noes! Your browser does not support the video tag.
	</video>
 </div>
