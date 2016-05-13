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
			<div class="widget-area col-xs-12 col-sm-4" id="more-info">
		        <?php dynamic_sidebar( 'footer-moreinfo' ); ?>
		    </div>
		    <div class="widget-area col-xs-12 col-sm-4" id="sitemap">
		        <?php dynamic_sidebar( 'footer-sitemap' ); ?>
		    </div>
		</div>
		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'brcd-film' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'brcd-film' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'brcd-film' ), 'brcd-film', '<a href="http://kode-in.web.id/" rel="designer">kode-in</a>' ); ?>
		</div><!-- .site-info --> 
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
