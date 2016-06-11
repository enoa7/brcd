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
		<div class="container spacepad-15">
			<div class="item-desc-title"><h2 class="title"><?php the_title(); ?></h2></div>
			<div class="item-desc-text"><?php echo substr(get_the_excerpt(), 0,250) . ' ...'; ?></div>
			<div class="item-desc-btn spacepad-15">
				<a href="<?php echo get_permalink() ?>"><button type="button" class="btn-brcd btn-brcd-secondary">Read More</button></a>
			</div>
		</div>
	</div>

</div>