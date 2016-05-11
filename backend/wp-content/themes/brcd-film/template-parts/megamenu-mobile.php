<?php  

/** ******************************************** **/
/** Megamenu Template for mobile
/** ******************************************** **/

?>

<header id="masthead" class="site-header mobile">
	<div class="container">
		<div class="site-lang col-xs-12">
			<span>english</span>
			<span>|</span>
			<span>indonesia</span>
		</div>
		<div class="site-searchbox col-xs-12">
			<form class="form-inline">
			  <div class="form-group">
			    <div class="input-group">
			      <input type="text" class="form-control" id="search" placeholder="Search Box">
			    </div>
			  </div>
			</form>
		</div>
	</div>
		<div class="site-branding col-xs-6">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<div class="site-trigger col-xs-6 text-right">
			<i class="fa fa-bars fa-2x"></i>
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
</header><!-- #masthead -->
