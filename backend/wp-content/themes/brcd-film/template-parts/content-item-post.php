<?php 
	
	/* 
	 * Template Parts: content-item-post
	 */

	$post_type = get_post_type();
?>

<div class="item item-<?php echo $post_type ?> spacepad-15 col-xs-12 col-sm-4">
	<a href="<?php the_permalink(); ?>">
		<div class="item-thumb">
			<?php (has_post_thumbnail()) ? the_post_thumbnail('video_thumb') : ''; ?>
		</div>
		<div class="item-desc">
			<div class="item-title">
				<?php the_title(); ?>
			</div>
		</div>
	</a>
</div>