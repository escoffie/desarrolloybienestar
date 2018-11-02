<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package think
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site bg-light">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'think' ); ?></a>

	<header id="masthead" class="site-header bg-white">
		<div class="container py-1">
			<div class="row">
				<div class="col">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$think_description = get_bloginfo( 'description', 'display' );
						if ( $think_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $think_description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col d-none d-md-block">
					<nav id="site-navigation">
						<?php
						if(has_nav_menu('menu-header-2')) {
							wp_nav_menu( array(
								'theme_location' => 'menu-header-2',
								'menu_id'        => 'menuHeader2',
							) );
						}
						?>
					</nav><!-- #site-navigation -->
					<?php if ( is_active_sidebar( 'header-sidebar-1' ) ) : ?>
					<div id="header-sidebar-1" class="col header-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'header-sidebar-1' ); ?>
					</div><!-- #header-sidebar -->
				<?php endif; ?>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

		<nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top shadow" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- <a class="navbar-brand d-block d-lg-none magistral text-uppercase text-dark" href="#"><?php bloginfo( 'name' ); ?></a> -->
			<?php
			wp_nav_menu( array(
				'theme_location'    => 'menu-header-1',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'mainNav',
				'menu_class'        => 'nav navbar-nav mx-auto',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			) );
			?>
		</div>
	</nav>

	<div id="content" class="site-content container shadow bg-white rounded-bottom">
