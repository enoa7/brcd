<?php  

/** ******************************************** **/
/** Megamenu Template for desktop
/** ******************************************** **/

?>

<header id="masthead" class="site-header">
	<div class="container">
		<div class="site-lang col-sm-9">
			<span>english</span>
			<span>|</span>
			<span>indonesia</span>
		</div>
		<div class="site-searchbox col-sm-3">
			<form class="form-inline">
			  <div class="form-group">
			    <div class="input-group">
			      <input type="text" class="form-control" id="search" placeholder="Search Box">
			    </div>
			  </div>
			</form>
		</div>
		<div class="site-branding col-sm-3">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation col-sm-9" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'brcd-film' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	</div>
</header><!-- #masthead -->


