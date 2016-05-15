<?php 
	
	/*
	 * template for article highlight on the frontpage
	 */

?>


<div class="item">
	<div class="item-img">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="item-desc">
		<div class="container spacepad">
			<div class="item-desc-title"><h3 class="title"><?php the_title(); ?></h3></div>
			<div class="item-desc-text"><?php the_content(); ?></div>
		</div>
	</div>
</div>