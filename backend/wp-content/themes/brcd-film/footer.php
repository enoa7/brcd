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
		<div class="container spacepad">
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
				<span class="copyright">
					<span>Barracuda</span>
					<span><i class="fa fa-copyright"></i></span>
					<span>Copyright 2016</span>
				</span>
				<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'brcd-film' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'brcd-film' ), 'WordPress' ); ?></a> -->
				<span class="sep"> | </span>
					<?php printf( esc_html__( 'Designed and Developed by %2$s.', 'brcd-film' ), 'brcd-film', '<a target="_blank" href="http://kode-in.web.id/" rel="designer"><i>kode-in</i></a>' ); ?>
			</div>
			<div class="backtotop">
				<button class="btn-brcd btn-brcd-primary anchorlinks"><a href="#home">Back to Top</a></button>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
