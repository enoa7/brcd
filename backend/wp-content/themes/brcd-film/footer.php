<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brcdfilm
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="widget-area col-xs-12 col-sm-6" id="more-info">
		        <?php dynamic_sidebar( 'footer-moreinfo' ); ?>
		    </div>
		    <div class="widget-area col-xs-12 col-sm-6" id="sitemap">
		        <?php dynamic_sidebar( 'footer-sitemap' ); ?>
		    </div>
		    <div class="widget-area col-xs-12 col-sm-6" id="social-media">
		    	<p class="title">GET IN TOUCH</p>
		    	<div class="widget-wrapper clearfix">
		    		 <?php dynamic_sidebar( 'footer-socialmedia' ); ?>
		    	</div>
		    </div>
			<div class="site-info col-xs-12 spacepad">
				<div class="copyright col-xs-12 nopadding">
					<span>Barracuda</span>
					<span><i class="fa fa-copyright"></i></span>
					<span>Copyright 2016</span>
				</div>
				<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'brcd-film' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'brcd-film' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span> -->
				<div class="kode-in col-xs-12 nopadding">
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'brcd-film' ), 'brcd-film', '<a href="http://kode-in.web.id/" rel="designer">kode-in</a>' ); ?>
				</div>

			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
