<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package think
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid shadow">
		<div class="site-info container pt-5">
			<div class="row">
				<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
					<div id="footer-sidebar-1" class="col footer-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
					</div><!-- #footer-sidebar -->
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
					<div id="footer-sidebar-2" class="col footer-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
					</div><!-- #footer-sidebar -->
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
					<div id="footer-sidebar-3" class="col footer-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
					</div><!-- #footer-sidebar -->
				<?php endif; ?>

			</div>
<!-- 			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'think' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'think' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'think' ), 'think', '<a href="http://underscores.me/">Underscores.me</a>' );
				?> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
