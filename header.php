<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package realtimeconveyancer
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'realtimeconveyancer' ); ?></a>

		<header id="masthead" style="background-color: var(--blue);">
    <div class="site-header">
	    <div class="site-branding">
        <?php the_custom_logo(); if ( is_front_page() && is_home() ) : ?>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php else : ?>
          <!-- <p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p> -->
        <?php endif; ?>
        <?php $realtimeconveyancer_description = get_bloginfo( 'description', 'display' ); ?>
        <?php if ( $realtimeconveyancer_description || is_customize_preview() ) : ?>
          <p class="site-description"><?php echo $realtimeconveyancer_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
        <?php endif; ?>
        <!-- <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
          <svg viewBox="0 0 100 80" width="30" height="30" style="pointer-events: none;">
            <rect width="100" height="10" fill="#fff"></rect>
            <rect y="30" width="100" height="10" fill="#fff"></rect>
            <rect y="60" width="100" height="10" fill="#fff"></rect>
          </svg>
        </button> -->
      </div><!-- .site-branding -->

      <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'realtimeconveyancer' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
      </div>
	</header><!-- #masthead -->
