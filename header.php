<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Atcone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta content="" name="description">
	<meta content="" name="keywords">
	<!-- Favicons -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="img-fluid"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="img-fluid"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$atcone_description = get_bloginfo('description', 'display');
				if ($atcone_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $atcone_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="navbar" class="navbar">
			<?php
								$menu_name = 'Primary Menu';
								// primary-menu
								$menu_items = wp_get_nav_menu_items($menu_name);
								
								$menu_list = '	<ul>';
								foreach ((array) $menu_items as $key => $menu_item) {
									$title = $menu_item->title;
									$url = $menu_item->url;
									$menu_list .= '<li><a class="nav-link scrollto';
									if (str_ends_with($url, $_SERVER['REQUEST_URI']) && !str_ends_with(home_url('/'), $_SERVER['REQUEST_URI'])) $menu_list .= " active";
									$menu_list .= '" href="' . $url . '">' . $title . '</a>
									</li>';
								}
								$menu_list .= '</ul>';
								echo $menu_list;
								?>
        <i class="bi bi-list mobile-nav-toggle"></i>

			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->