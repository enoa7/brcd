<?php

/*  -----------------------------------
 *	Template Page Rental Products
 *  @package brcdfilm
 *  ----------------------------------- */ 

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="segment spacepad-15" id="rental-package">
			<div class="container">
				<h2 class="title">Check Out Our Packages</h2>
				<div class="segment-wrap row">
				<?php 
					get_rental_product('category_type', 'package');
				?>
				</div>
			</div>
		</div>
		<div class="segment spacepad-15" id="rental-category">
			<div class="container">
				<h2 class="title">Check Out Our Category</h2>
				<div class="segment-wrap row">
				<?php 
					get_rental_product('category_type', 'category');
				?>
				</div>
			</div>
		</div>
	</main>
</div>

<?php get_footer(); ?>