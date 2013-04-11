<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
				<aside id="lib-social" class="widget">
					<h3 class="widget-title"><?php _e( 'Follow UT Libraries', 'twentyeleven' ); ?></h3>
					<ul class="liblinks-list libsocial">
						<li><a href="http://plus.google.com/117391561174028073964/" data-icon="g"><span class="social-text">Google+</span></a></li>
						<li><a href="http://www.twitter.com/utlibraries" data-icon="t"><span class="social-text">Twitter</span></a></li>
						<li><a href="http://www.facebook.com/utlibraries" data-icon="f"><span class="social-text">Facebook</span></a></li>
						<li><a href="http://www.flickr.com/utlibraries" data-icon="r"><span class="social-text">Flickr</span></a></li>
						<li><a href="http://www.youtube.com/utlibraries" data-icon="y"><span class="social-text">YouTube</span></a></li>
						<li><a href="http://www.friendfeed.com/utlibraries" data-icon="d"><span class="social-text">Friendfeed</span></a></li>
						<li><a href="http://pinterest.com/utlibraries/" data-icon="p"><span class="social-text">Pinterest</span></a></li></ul>
				</aside>				
		</div><!-- #secondary .widget-area -->
<?php endif; ?>