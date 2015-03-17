<?php
/**
 * footer-default.php
 *
 * basic footer with  small logo on the right, footer-menu on left
 * and copyright infos
 *
 * @package harbour
 */
?>

<footer id="colophon" class="footer" role="contentinfo">
	<div class="footer-container">
		<div class="footer-logo">
			<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="">
		</div>
		<nav id="footer-navigation" class="footer-navigation" role="navigation">
			
			<?php wp_nav_menu( array( 
					'theme_location' => 'primary',
					'menu_id'        => 'footer-menu',
					'container'      => '',
					'menu_class'     => 'footer-menu' ) ); ?>
		</nav>
	</div>
		<ul class="footer-credits">
			<li>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'harbour' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'harbour' ), 'WordPress' ); ?></a>
			</li>
			<li>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'harbour' ), 'Harbour', '<a href="https://github.com/SamuelBourdon/harbour" rel="designer">Samuel Bourdon</a>' ); ?>
			</li>
			<li>
				&copy; <?php echo date('Y'); ?>, Your Name, <?php printf( __( 'All rights reserved', 'harbour' ) ); ?>
			</li>
		</ul>
</footer><!-- #colophon -->