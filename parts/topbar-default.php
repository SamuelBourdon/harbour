<?php
/**
 * topbar-default.php
 *
 * classic top bar with logo on the right and menu items on the left
 *
 * @package harbour
 */
?>

<header class="topbar" role="banner">
	<a class="skip-links" href="#content"><?php _e( 'Skip to content', 'harbour' ); ?></a>
	<div class="topbar-container">
	<div class="site-branding">
		<a href="" class="site-logo">
			<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo Image">
		</a>
	</div>
	<a href="" class="topbar-toggle" id="js-topbar-toggle">MENU</a>
		<nav id="site-navigation" class="topbar-navigation" role="navigation">
			
			<?php wp_nav_menu( array( 
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'container'      => '',
					'menu_class'     => 'main-menu menu-show' ) ); ?>
		</nav>
	</div>
</header>