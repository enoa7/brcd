<?php  

/** ******************************************** **/
/** Megamenu Template for mobile
/** ******************************************** **/

?>

<header id="masthead" class="site-header mobile">
	<div class="container" id="home">
		<!-- <div class="site-lang col-xs-12">
			<span>english</span>
			<span>|</span>
			<span>indonesia</span>
		</div> -->
		<div class="site-searchbox col-xs-12">
			<form class="form-inline">
			  <div class="form-group">
			    <div class="input-group">
			      <input type="text" class="form-control" id="search" placeholder="Search Box">
			    </div>
			  </div>
			</form>
		</div>
	
		<div class="site-branding">
			<?php 
				$brcd_logo = site_url() . '/wp-content/themes/brcd-film/inc/img/brcd_logo_optimized.svg';
				echo file_get_contents($brcd_logo);
			 ?>
		</div><!-- .site-branding -->
		<div class="site-trigger clearfix" id="megamenu-bars"></div>
	</div>
	<nav id="site-navigation" class="main-navigation anchorlinks" role="navigation">
		<div class="menu-megamenu-container">
			<ul id="primary-menu" class="menu">
				<li class="menu-item">
					<a href="<?php site_url(); ?>">Home</a>
				</li>
				<li class="menu-item">
					<a href="#whatwedo">What We Do</a>
				</li>
				<li class="menu-item">
					<a href="#aboutus">About Us</a>
				</li>
				<li class="menu-item">
					<a href="#contactus">Contact Us</a>
				</li>
			</ul>
		</div>
		<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->
