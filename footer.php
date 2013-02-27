<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<ul id="credits">
					<li><a href="<?php echo esc_url( __( 'http://blogs.lib.utexas.edu', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'University of Texas Libraries Blogs Member Site', 'twentyeleven' ); ?>"><?php printf( __( 'LIBblog', 'twentyeleven' ), 'WordPress' ); ?></a><?php echo __( ' member site' ); ?></li>
					<li><?php echo __( 'powered by ' ); ?><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>"><?php printf( __( ' %s', 'twentyeleven' ), 'WordPress' ); ?></a>
					</li>
					<li><?php echo __( 'running') ?> Ursa Theme by <a href="http://blogs.lib.utexas.edu/tis/">The Libratory</a></li>
					<li><?php echo __( 'built on ' ); ?><a href="<?php echo esc_url( __( 'http://theme.wordpress.com/themes/twentyeleven/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Twenty Eleven Theme by Wordpress.com', 'twentyeleven' ); ?>"><?php printf( __( 'TwentyEleven' ), 'WordPress' ); ?></a></li>
					<li><?php echo __( 'social icons by ' ); ?><a href="<?php echo esc_url( __( 'http://www.fontfabric.com', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Fontfabric', 'twentyeleven' ); ?>"><?php printf( __( 'Fontfabric' ), 'WordPress' ); ?></a></li>
				</ul>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!--***************************
	UT & Library Branding 
****************************-->
	<div id="utlib-branding-bar">
				<div class="branding-bar bar-ut"><img src="<?php bloginfo('stylesheet_directory')?>/images/utlib-footer-tower.jpg"></div>
				<div class="branding-bar bar-library">
					<div id="bar-liblogo"><img src="<?php bloginfo('stylesheet_directory')?>/images/utlib-footer-flyingbook.gif"></div>
						<div class="bar-metabox">
							<div class="bar-metabox blogin"><a href="wp-admin/">Log In/Admin</a></div>
							<div class="bar-metabox libblog"><a href="#">LIBblog</a></div>
						</div>
				</div>
	</div>
</body>
</html>