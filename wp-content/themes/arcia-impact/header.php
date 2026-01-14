<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arcia_Impact
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'arcia-impact' ); ?></a>
	
	<header id="masthead" class="site-header layout-padding-mobile">

		<!-- logo -->
		<div class="site-branding">
			<img src="<?php the_field('site_logo', 'option'); ?>" alt="">
		</div>

		<!-- main menu -->
		<?php 
			wp_nav_menu(array(
				'theme_location'			=> 'mainMenu',
				'container'					=> 'div',
				'container_class'			=> 'main-menu text-right',
			));
		
		?>

		<!-- header button -->
		 <div class="header-btn btn">
			<a href="<?php the_field('header_button_link','option'); ?>"> <?php the_field('header_button_text','option'); ?> </a>
		 </div>

		<!-- mobile menu -->
		 <div class="hamburger-menu">

			<?php 
				wp_nav_menu(array(
					'theme_location'			=> 'mainMenu',
					'container'					=> 'div',
					'container_class'			=> 'mobile-menu',
				));
			?>
				
			<div class="header-btn btn">
				<a href="<?php the_field('header_button_link','option'); ?>"> <?php the_field('header_button_text','option'); ?> </a>
			</div>
			
		</div>

		<div class="menu-trigger">
            <span></span>
            <span></span>
            <span></span>
        </div>

	</header><!-- #masthead -->
