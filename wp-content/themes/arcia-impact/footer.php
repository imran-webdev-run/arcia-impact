<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arcia_Impact
 */

?>

	<footer id="colophon" class="site-footer layout-padding">
		<div class="footer-inner">
			<div class="footer-site-branding">

				<?php if(get_field('footer_logo', 'option')) : ?>
					<div class="site-branding">
						<img src="<?php the_field('footer_logo','option'); ?>" alt="footer-logo">
					</div>
				<?php endif; ?>

				<p><?php the_field('tagline','option'); ?></p>
			</div>

			<div class="footer-menu">
				<?php
					if( is_active_sidebar( 'footer-menu')){
						dynamic_sidebar( 'footer-menu' );
					} 
				?>
			</div>

			<div class="footer-contact">
				<?php
					if( is_active_sidebar( 'footer-contact')){
						dynamic_sidebar( 'footer-contact' );
					} 
				?>
			</div>
		</div>

		<div class="footer-copyright mt-lg-75 mt-md-60 mt-sm-300 mt-30">
			<p><?php the_field('footer_copyright','option'); ?></p>
		</div>
	
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
