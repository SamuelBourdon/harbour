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
		<div class="visually-hidden">
			<?php
			// Set $hn_markup to true to use H1 and H2 markup on front-page / homepage 
			$hn_markup = true;

			if ( hn_markup && ( is_front_page() || is_home() ) ) { ?>

				<h1><?php bloginfo( 'name' ); ?></h1>
				<h2><?php bloginfo( 'description'); ?></h2>
			<?php
			} else { ?>
				<h3><?php bloginfo( 'name' ); ?></h3>
				<h4><?php bloginfo( 'description'); ?></h4>
			<?php } ?>

		</div>
		<div class="topbar-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="topbar-logo">
				<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo Image">
			</a>
		</div>
		<span class="topbar-toggle" id="js-topbar-toggle"><i class="icon-three-bars"></i>MENU</span>
		<nav id="site-navigation" class="topbar-navigation" role="navigation">
			
			<?php wp_nav_menu( array( 
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'container'      => '',
					'menu_class'     => 'main-menu menu-show' ) ); ?>
		</nav>
	</div>
</header>