<?php

/*  -----------------------------------
 *	Template Page Rental Products
 *  @package brcdfilm
 *  ----------------------------------- */ 

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
			get_mainbanner('mainBanner_xs', 'mainBanner_lg');
		?>

		<section class="entry-content">
			<div class="container">
				<h1 class="title"><?php the_title(); ?></h1>
				<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</section>
	</main>
</div>

<?php get_footer(); ?>