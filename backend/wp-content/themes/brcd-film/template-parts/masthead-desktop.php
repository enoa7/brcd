<?php  

/** ******************************************** **/
/** Megamenu Template for desktop
/** ******************************************** **/

?>

<header id="masthead" class="site-header desktop">
	<div class="container">
		<div class="site-branding col-sm-4">
				<?php 
					$brcd_logo = site_url() . '/wp-content/themes/brcd-film/inc/img/brcd_logo_optimized.svg';
					echo file_get_contents($brcd_logo);
				 ?>
		</div>
		<div class="col-sm-8 nopadding">
			<!-- language selection -->
			<div class="site-lang col-sm-9">
				<span>english</span>
				<span>|</span>
				<span>indonesia</span>
			</div>
			<!-- searchbox -->
			<div class="site-searchbox col-sm-3">
				<form class="form-inline">
				  <div class="form-group">
				    <div class="input-group">
				      <input type="text" class="form-control" id="search" placeholder="Search Box">
				    </div>
				  </div>
				</form>
			</div>
			<div class="site-nav col-sm-12">
				<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'brcd-film' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav> 
			</div>
		</div>
	</div>
</header><!-- #masthead -->


