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

		<div class="menu-trigger d-lg-none">
		   <svg xmlns="http://www.w3.org/2000/svg" width="448" height="384" viewBox="0 0 448 384" fill="currentColor">
			   <path d="M0 32C0 14.3 14.3 0 32 0H416C433.7 0 448 14.3 448 32C448 49.7 433.7 64 416 64H32C14.3 64 0 49.7 0 32ZM0 192C0 174.3 14.3 160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.3 224 0 209.7 0 192ZM448 352C448 369.7 433.7 384 416 384H32C14.3 384 0 369.7 0 352C0 334.3 14.3 320 32 320H416C433.7 320 448 334.3 448 352Z" fill="currentColor"/>
		   </svg>
		</div>
		<!-- main menu -->
		<div class="main-menu-wrapper d-none d-lg-block">
			<?php 
				wp_nav_menu(array(
					'theme_location'			=> 'mainMenu',
					'container'					=> 'div',
					'container_class'			=> 'main-menu text-right',
				));
			?>
		</div>

		<!-- header button -->
		 <div class="header-right header-btn d-none d-lg-block">
			<a href="<?php the_field('header_button_link','option'); ?>"> <?php the_field('header_button_text','option'); ?> </a>
		 </div>

		 
			
		</header><!-- #masthead -->
		

		<!-- mobile menu -->
		 <div class="hamburger-menu d-lg-none">

			<div class="hamburger-menu-inner">
				<div class="close-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="384" height="385" viewBox="0 0 384 385" fill="currenColor">
						<path d="M54.675 9.475C42.175 -3.025 21.875 -3.025 9.375 9.475C-3.125 21.975 -3.125 42.275 9.375 54.775L146.775 192.075L9.475 329.475C-3.025 341.975 -3.025 362.275 9.475 374.775C21.975 387.275 42.275 387.275 54.775 374.775L192.075 237.375L329.475 374.675C341.975 387.175 362.275 387.175 374.775 374.675C387.275 362.175 387.275 341.875 374.775 329.375L237.375 192.075L374.675 54.675C387.175 42.175 387.175 21.875 374.675 9.375C362.175 -3.125 341.875 -3.125 329.375 9.375L192.075 146.775L54.675 9.475Z" fill="currentColor"/>
					</svg>
				</div>

				<?php 
					wp_nav_menu(array(
						'theme_location'			=> 'mainMenu',
						'container'					=> 'div',
						'container_class'			=> 'mobile-menu',
					));
				?>
					
				<div class="header-btn hamburger-footer">
					<a href="<?php the_field('header_button_link','option'); ?>"> <?php the_field('header_button_text','option'); ?> </a>
				</div>
			</div>
			
		</div>