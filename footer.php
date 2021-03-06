<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sinensis
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<hr>
		<p id="copyright-footer"><?php echo get_theme_mod('sinensis_footer_text'); ?></p>
<!--		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sinensis' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'sinensis' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'sinensis' ), 'sinensis', '<a href="https://automattic.com/">Raphaël Marquis-Pelletier</a>' );
			?>
		</div> -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div> <!-- div:page -->
</body>
</html>
