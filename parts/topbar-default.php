<?php
/**
 * topbar-default.php
 *
 * classic top bar with logo on the right and menu items on the left
 *
 * @package harbour
 */
?>

<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'harbour' ); ?></a>
<header class="topbar-default" role="banner">
	<div class="site-branding">
		<a href="" class="site-logo">
			<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo Image">
		</a>
	</div>
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<a href="" class="menu-toggle" id="js-mobile-menu">MENU</a>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	</nav>
</header>