<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package santaenergy-main
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"><!-- Bootstrap CSS File -->
	<link href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- Main Stylesheet File -->
	<link href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css">
	<?php wp_head(); ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">    
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'santaenergy-main' ); ?></a>
		<?php if ( is_main_site() ) { ?>
		<div class="full-menu" style="display: none;">
			<div class="desktop-menu-open">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="menu-open-logo">
								<a class="navbar-brand fs-25 fw-600 color-fff color-red-hvr" href="<?php echo get_bloginfo( 'url' )?>">
									<svg width="109" height="62" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 109 62" style="enable-background:new 0 0 109 62;" xml:space="preserve">
										<g id="Global_x2F_Logo_x2F_Santa-Energy">
											<path id="Icon" class="st0" d="M93.6,4.9c0.3,0.3-0.1,0.5-0.2,0.8l-3.7,8.5v0.1c-1.2-1.2-2.5-2.2-3.9-3c-3.2-1.8-7.4-2.1-11.1-1.4
												c-5.7,0.9-10.5,4.2-15.6,6.6c-5.8,3.3-13,5.8-20,3.7c-2.1-0.6-4.2-1.4-6.1-2.5v-0.3l3.9-8.8H37c4,3.7,10.7,3.8,15.5,1.8
												c6.5-2.4,12-7,18.6-9.1c4.7-1.5,10.4-2,15.2-0.5C89,1.7,91.5,2.9,93.6,4.9"></path>
											<path id="Santa" class="st0" d="M88.8,17.7c-1.1,2.7-2.3,5.2-3.4,7.8l3.2,0.1v0.3l-2.4,5.4h-3.4L80.3,37c0,0.3-0.2,0.8,0.1,1.1
												c1,0.8,2.1,0,2.9-0.4c-0.7,2-1.7,3.9-2.6,5.8c-2.4,1.1-5.8,1.4-8.5,0.6c-0.9-0.3-1.7-1.2-1.8-2.1c-0.3-1.4,0.2-2.7,0.6-3.9
												l5.2-11.5l0.6-1.2C81,23.7,85,21,88.8,17.7L88.8,17.7z M26.5,19.1c1.5,0.6,2.6,2,2.7,3.6c0.1,1.2-0.3,2.4-0.6,3.5l-0.3,0.1h-8.9
												c-0.1-0.5,0.1-1.1-0.3-1.5c-0.7-0.5-1.8-0.5-2.6-0.1c-0.4,0.2-0.9,0.6-1.1,1c-0.1,0.3-0.1,0.7,0,0.9l0.6,0.5
												c3.1,1.4,7.2,1.1,9.1,4.6c0.9,3-0.9,5.9-2.8,8.1c-3.4,3.7-8,4.9-12.8,5.2c-2.4,0.1-4.6-0.4-6.6-1.2c-1.7-0.7-3-2.4-3-4.2
												c0-1.2,0.3-2.3,0.7-3.3l0.2-0.1h9.1c0.2,0.3,0,0.9,0.1,1.3c0,0.4,0.4,0.8,0.8,0.9c1.3,0.6,2.8,0.2,3.8-0.8c0.3-0.3,0.4-0.8,0.3-1.2
												c-0.3-1-1.5-1.1-2.3-1.4c-2.5-0.5-5-1-6.9-2.9c-1.5-2.1-0.5-5,0.7-6.9c2.9-4.6,7.9-6.6,13.1-7C22,18,24.4,18.3,26.5,19.1z M72.2,27
												c0.9,1.6,0.3,3.6-0.3,5.2l-5.3,11.6l-0.3,0.1h-8.5v-0.2l4.6-10.2c0.1-0.5,0.4-1.1,0.1-1.7c-0.2-0.3-0.5-0.4-0.8-0.4
												c-1.5,0.1-2.5,1.4-3.1,2.7L54.1,44c-2.9,0.2-5.7,0.1-8.7,0.1c0-0.7,0.5-1.3,0.7-1.9l7.4-16.3l0.3-0.1h7.9l0.1,0.1l-1,2.4h0.1
												c2.7-2.3,6.2-3.8,9.9-2.6C71.2,25.9,71.8,26.3,72.2,27z M92.9,37.6c-0.5,0.4-0.9,1-0.7,1.6c0.2,0.5,0.6,0.6,1.1,0.6
												c1.7-0.3,2.9-2,3.4-3.4C95.4,36.7,94,36.8,92.9,37.6z M107.7,26.1c0.8,0.6,1.2,1.5,1,2.5c-0.3,2.1-1.4,3.9-2.2,5.8l-3.2,7.2
												c-0.2,0.7,0,1.5,0.6,2v0.1h-8.3c-0.5-0.1-0.6-0.6-0.7-1.1c-2.9,1.6-6.8,2.5-10.2,1.4c-1-0.3-1.9-1.2-2.1-2.2
												c-0.6-2.6,1-4.7,2.7-6.3c2.2-1.9,5-2.4,7.8-2.9c1.8-0.2,3.5-0.2,5.1-0.8c0.6-0.3,1.4-0.9,1.3-1.7c0-0.3-0.4-0.4-0.6-0.5
												c-0.9-0.1-1.7,0.1-2.3,0.8l-0.7,0.9c-2.9,0.1-5.6,0-8.5,0v-0.1c2.3-5.2,8-6.5,13.3-6.6C103.1,24.8,105.8,24.7,107.7,26.1z
												 M37.6,36.7c-1.5,0.4-3.1,0.4-4.2,1.5c-0.3,0.4-0.6,0.8-0.5,1.4c0.1,0.3,0.5,0.5,0.8,0.5C35.6,40,37,38.3,37.6,36.7z M47.3,25.7
												c1.1,0.5,2.3,1.4,2.3,2.7c0,1-0.3,1.8-0.6,2.7l-4.8,10.8c-0.2,0.5,0,0.9,0.2,1.4l0.6,0.6L44.5,44h-8.1c-0.3-0.3-0.5-0.7-0.5-1.1
												c-2.6,1.5-5.8,2.2-9,1.7c-1.4-0.4-3.2-1.3-3.4-2.9c-0.2-2.5,1.3-4.6,3.3-6.2c2-1.5,4.4-2,6.9-2.5c1.8-0.3,3.8-0.2,5.5-0.8
												c0.5-0.2,1-0.6,1.2-1.1c0.1-0.2,0.1-0.6,0-0.8C40,30,39.5,29.8,39,30c-1,0.2-1.7,0.9-2.2,1.7c-2.8,0.1-5.5,0.1-8.4,0.1
												c0.9-3,4.1-5,6.9-5.8c3.4-0.9,7.4-1.1,11-0.5L47.3,25.7z"></path>
											<path id="energy" class="st1" d="M1.1,50h7.6v2.4H3.6v2.2h4.9V57H3.6v2.4H9v2.4H1.1V50z M19.6,50H23l4.8,8.1l0,0V50h2.5v11.7H27
												l-4.9-8.3l0,0v8.3h-2.5V50z M41.2,50h7.6v2.4h-5.1v2.2h4.9V57h-4.9v2.4h5.4v2.4h-7.9V50z M62.2,54.8h1.5c0.9,0,2.1,0,2.1-1.3
												c0-1.2-1-1.4-1.9-1.4h-1.6L62.2,54.8L62.2,54.8z M59.7,50H64c2.3,0,4.2,0.8,4.2,3.5c0,1.6-0.8,2.9-2.4,3.2l2.8,4.9h-3l-2.3-4.7
												h-1.2v4.7h-2.5V50H59.7z M88.7,60.9C87.2,61.7,85.6,62,84,62c-3.5,0-6-2.4-6-6.1c0-3.7,2.5-6.1,6-6.1c1.8,0,3.3,0.4,4.5,1.5l-1.7,2
												c-0.7-0.7-1.5-1.1-2.7-1.1c-2.1,0-3.5,1.6-3.5,3.8c0,2.2,1.4,3.8,3.5,3.8c1.1,0,1.9-0.3,2.3-0.6v-1.9h-2v-2.4h4.4v6
												C88.8,60.9,88.7,60.9,88.7,60.9z M102.3,56.7L98.1,50h3.1l2.4,4.4l2.5-4.4h2.9l-4.2,6.7v5h-2.5V56.7z"></path>
										</g>
									</svg>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="close-menu-icon main-opener">
								<img src="<?php echo get_template_directory_uri(); ?>/img/santa_home_close_yellow.svg">
							</div>
						</div>
						<div class="col-md-12">
							<?php dynamic_sidebar('header-menu');?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<header class="header">
			<div class="top-header">
				<div class="menu-container">
					<nav class="navbar navbar-expand-lg navbar-colored">
						<div class="container">
							<a class="navbar-brand fs-25 fw-600 color-fff color-red-hvr" href="<?php echo get_bloginfo( 'url' )?>">
								<svg width="109" height="62" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 109 62" style="enable-background:new 0 0 109 62;" xml:space="preserve">
									<g id="Global_x2F_Logo_x2F_Santa-Energy">
										<path id="Icon" class="st0" d="M93.6,4.9c0.3,0.3-0.1,0.5-0.2,0.8l-3.7,8.5v0.1c-1.2-1.2-2.5-2.2-3.9-3c-3.2-1.8-7.4-2.1-11.1-1.4
											c-5.7,0.9-10.5,4.2-15.6,6.6c-5.8,3.3-13,5.8-20,3.7c-2.1-0.6-4.2-1.4-6.1-2.5v-0.3l3.9-8.8H37c4,3.7,10.7,3.8,15.5,1.8
											c6.5-2.4,12-7,18.6-9.1c4.7-1.5,10.4-2,15.2-0.5C89,1.7,91.5,2.9,93.6,4.9"></path>
										<path id="Santa" class="st0" d="M88.8,17.7c-1.1,2.7-2.3,5.2-3.4,7.8l3.2,0.1v0.3l-2.4,5.4h-3.4L80.3,37c0,0.3-0.2,0.8,0.1,1.1
											c1,0.8,2.1,0,2.9-0.4c-0.7,2-1.7,3.9-2.6,5.8c-2.4,1.1-5.8,1.4-8.5,0.6c-0.9-0.3-1.7-1.2-1.8-2.1c-0.3-1.4,0.2-2.7,0.6-3.9
											l5.2-11.5l0.6-1.2C81,23.7,85,21,88.8,17.7L88.8,17.7z M26.5,19.1c1.5,0.6,2.6,2,2.7,3.6c0.1,1.2-0.3,2.4-0.6,3.5l-0.3,0.1h-8.9
											c-0.1-0.5,0.1-1.1-0.3-1.5c-0.7-0.5-1.8-0.5-2.6-0.1c-0.4,0.2-0.9,0.6-1.1,1c-0.1,0.3-0.1,0.7,0,0.9l0.6,0.5
											c3.1,1.4,7.2,1.1,9.1,4.6c0.9,3-0.9,5.9-2.8,8.1c-3.4,3.7-8,4.9-12.8,5.2c-2.4,0.1-4.6-0.4-6.6-1.2c-1.7-0.7-3-2.4-3-4.2
											c0-1.2,0.3-2.3,0.7-3.3l0.2-0.1h9.1c0.2,0.3,0,0.9,0.1,1.3c0,0.4,0.4,0.8,0.8,0.9c1.3,0.6,2.8,0.2,3.8-0.8c0.3-0.3,0.4-0.8,0.3-1.2
											c-0.3-1-1.5-1.1-2.3-1.4c-2.5-0.5-5-1-6.9-2.9c-1.5-2.1-0.5-5,0.7-6.9c2.9-4.6,7.9-6.6,13.1-7C22,18,24.4,18.3,26.5,19.1z M72.2,27
											c0.9,1.6,0.3,3.6-0.3,5.2l-5.3,11.6l-0.3,0.1h-8.5v-0.2l4.6-10.2c0.1-0.5,0.4-1.1,0.1-1.7c-0.2-0.3-0.5-0.4-0.8-0.4
											c-1.5,0.1-2.5,1.4-3.1,2.7L54.1,44c-2.9,0.2-5.7,0.1-8.7,0.1c0-0.7,0.5-1.3,0.7-1.9l7.4-16.3l0.3-0.1h7.9l0.1,0.1l-1,2.4h0.1
											c2.7-2.3,6.2-3.8,9.9-2.6C71.2,25.9,71.8,26.3,72.2,27z M92.9,37.6c-0.5,0.4-0.9,1-0.7,1.6c0.2,0.5,0.6,0.6,1.1,0.6
											c1.7-0.3,2.9-2,3.4-3.4C95.4,36.7,94,36.8,92.9,37.6z M107.7,26.1c0.8,0.6,1.2,1.5,1,2.5c-0.3,2.1-1.4,3.9-2.2,5.8l-3.2,7.2
											c-0.2,0.7,0,1.5,0.6,2v0.1h-8.3c-0.5-0.1-0.6-0.6-0.7-1.1c-2.9,1.6-6.8,2.5-10.2,1.4c-1-0.3-1.9-1.2-2.1-2.2
											c-0.6-2.6,1-4.7,2.7-6.3c2.2-1.9,5-2.4,7.8-2.9c1.8-0.2,3.5-0.2,5.1-0.8c0.6-0.3,1.4-0.9,1.3-1.7c0-0.3-0.4-0.4-0.6-0.5
											c-0.9-0.1-1.7,0.1-2.3,0.8l-0.7,0.9c-2.9,0.1-5.6,0-8.5,0v-0.1c2.3-5.2,8-6.5,13.3-6.6C103.1,24.8,105.8,24.7,107.7,26.1z
											 M37.6,36.7c-1.5,0.4-3.1,0.4-4.2,1.5c-0.3,0.4-0.6,0.8-0.5,1.4c0.1,0.3,0.5,0.5,0.8,0.5C35.6,40,37,38.3,37.6,36.7z M47.3,25.7
											c1.1,0.5,2.3,1.4,2.3,2.7c0,1-0.3,1.8-0.6,2.7l-4.8,10.8c-0.2,0.5,0,0.9,0.2,1.4l0.6,0.6L44.5,44h-8.1c-0.3-0.3-0.5-0.7-0.5-1.1
											c-2.6,1.5-5.8,2.2-9,1.7c-1.4-0.4-3.2-1.3-3.4-2.9c-0.2-2.5,1.3-4.6,3.3-6.2c2-1.5,4.4-2,6.9-2.5c1.8-0.3,3.8-0.2,5.5-0.8
											c0.5-0.2,1-0.6,1.2-1.1c0.1-0.2,0.1-0.6,0-0.8C40,30,39.5,29.8,39,30c-1,0.2-1.7,0.9-2.2,1.7c-2.8,0.1-5.5,0.1-8.4,0.1
											c0.9-3,4.1-5,6.9-5.8c3.4-0.9,7.4-1.1,11-0.5L47.3,25.7z"></path>
										<path id="energy" class="st1" d="M1.1,50h7.6v2.4H3.6v2.2h4.9V57H3.6v2.4H9v2.4H1.1V50z M19.6,50H23l4.8,8.1l0,0V50h2.5v11.7H27
											l-4.9-8.3l0,0v8.3h-2.5V50z M41.2,50h7.6v2.4h-5.1v2.2h4.9V57h-4.9v2.4h5.4v2.4h-7.9V50z M62.2,54.8h1.5c0.9,0,2.1,0,2.1-1.3
											c0-1.2-1-1.4-1.9-1.4h-1.6L62.2,54.8L62.2,54.8z M59.7,50H64c2.3,0,4.2,0.8,4.2,3.5c0,1.6-0.8,2.9-2.4,3.2l2.8,4.9h-3l-2.3-4.7
											h-1.2v4.7h-2.5V50H59.7z M88.7,60.9C87.2,61.7,85.6,62,84,62c-3.5,0-6-2.4-6-6.1c0-3.7,2.5-6.1,6-6.1c1.8,0,3.3,0.4,4.5,1.5l-1.7,2
											c-0.7-0.7-1.5-1.1-2.7-1.1c-2.1,0-3.5,1.6-3.5,3.8c0,2.2,1.4,3.8,3.5,3.8c1.1,0,1.9-0.3,2.3-0.6v-1.9h-2v-2.4h4.4v6
											C88.8,60.9,88.7,60.9,88.7,60.9z M102.3,56.7L98.1,50h3.1l2.4,4.4l2.5-4.4h2.9l-4.2,6.7v5h-2.5V56.7z"></path>
									</g>
								</svg>
							</a>
							<div aria-controls="main-navbar" aria-expanded="true" aria-label="Toggle navigation" class="bars z-index-1 bars-rotate" data-target="#main-navbar" data-toggle="collapse">
								<span class="first d-block bg-fff mb-6px transition-5"></span> <span class="second d-block bg-fff mb-6px transition-5"></span> <span class="third d-block bg-fff mb-6px transition-5"></span>
							</div>
							<a href="#" class="menu-icon-normal main-opener"><span></span></a>
						</div>
					</nav>
				</div>
				<div class="main-dropdown">
					<div class="container">
						<div class="main-nav">
							<?php dynamic_sidebar('header-menu');?>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="top-menu-section">
									<?php dynamic_sidebar('header-top');?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<?php }else{ ?>
				<header class="header-optional">
			<div class="header-container">
				<a class="navbar-brand" href="<?php echo get_bloginfo( 'url' )?>">
					<svg width="109" height="62" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 109 62" style="enable-background:new 0 0 109 62;" xml:space="preserve">
						<g id="Global_x2F_Logo_x2F_Santa-Energy">
							<path id="Icon" class="st0" d="M93.6,4.9c0.3,0.3-0.1,0.5-0.2,0.8l-3.7,8.5v0.1c-1.2-1.2-2.5-2.2-3.9-3c-3.2-1.8-7.4-2.1-11.1-1.4
								c-5.7,0.9-10.5,4.2-15.6,6.6c-5.8,3.3-13,5.8-20,3.7c-2.1-0.6-4.2-1.4-6.1-2.5v-0.3l3.9-8.8H37c4,3.7,10.7,3.8,15.5,1.8
								c6.5-2.4,12-7,18.6-9.1c4.7-1.5,10.4-2,15.2-0.5C89,1.7,91.5,2.9,93.6,4.9"></path>
							<path id="Santa" class="st0" d="M88.8,17.7c-1.1,2.7-2.3,5.2-3.4,7.8l3.2,0.1v0.3l-2.4,5.4h-3.4L80.3,37c0,0.3-0.2,0.8,0.1,1.1
								c1,0.8,2.1,0,2.9-0.4c-0.7,2-1.7,3.9-2.6,5.8c-2.4,1.1-5.8,1.4-8.5,0.6c-0.9-0.3-1.7-1.2-1.8-2.1c-0.3-1.4,0.2-2.7,0.6-3.9
								l5.2-11.5l0.6-1.2C81,23.7,85,21,88.8,17.7L88.8,17.7z M26.5,19.1c1.5,0.6,2.6,2,2.7,3.6c0.1,1.2-0.3,2.4-0.6,3.5l-0.3,0.1h-8.9
								c-0.1-0.5,0.1-1.1-0.3-1.5c-0.7-0.5-1.8-0.5-2.6-0.1c-0.4,0.2-0.9,0.6-1.1,1c-0.1,0.3-0.1,0.7,0,0.9l0.6,0.5
								c3.1,1.4,7.2,1.1,9.1,4.6c0.9,3-0.9,5.9-2.8,8.1c-3.4,3.7-8,4.9-12.8,5.2c-2.4,0.1-4.6-0.4-6.6-1.2c-1.7-0.7-3-2.4-3-4.2
								c0-1.2,0.3-2.3,0.7-3.3l0.2-0.1h9.1c0.2,0.3,0,0.9,0.1,1.3c0,0.4,0.4,0.8,0.8,0.9c1.3,0.6,2.8,0.2,3.8-0.8c0.3-0.3,0.4-0.8,0.3-1.2
								c-0.3-1-1.5-1.1-2.3-1.4c-2.5-0.5-5-1-6.9-2.9c-1.5-2.1-0.5-5,0.7-6.9c2.9-4.6,7.9-6.6,13.1-7C22,18,24.4,18.3,26.5,19.1z M72.2,27
								c0.9,1.6,0.3,3.6-0.3,5.2l-5.3,11.6l-0.3,0.1h-8.5v-0.2l4.6-10.2c0.1-0.5,0.4-1.1,0.1-1.7c-0.2-0.3-0.5-0.4-0.8-0.4
								c-1.5,0.1-2.5,1.4-3.1,2.7L54.1,44c-2.9,0.2-5.7,0.1-8.7,0.1c0-0.7,0.5-1.3,0.7-1.9l7.4-16.3l0.3-0.1h7.9l0.1,0.1l-1,2.4h0.1
								c2.7-2.3,6.2-3.8,9.9-2.6C71.2,25.9,71.8,26.3,72.2,27z M92.9,37.6c-0.5,0.4-0.9,1-0.7,1.6c0.2,0.5,0.6,0.6,1.1,0.6
								c1.7-0.3,2.9-2,3.4-3.4C95.4,36.7,94,36.8,92.9,37.6z M107.7,26.1c0.8,0.6,1.2,1.5,1,2.5c-0.3,2.1-1.4,3.9-2.2,5.8l-3.2,7.2
								c-0.2,0.7,0,1.5,0.6,2v0.1h-8.3c-0.5-0.1-0.6-0.6-0.7-1.1c-2.9,1.6-6.8,2.5-10.2,1.4c-1-0.3-1.9-1.2-2.1-2.2
								c-0.6-2.6,1-4.7,2.7-6.3c2.2-1.9,5-2.4,7.8-2.9c1.8-0.2,3.5-0.2,5.1-0.8c0.6-0.3,1.4-0.9,1.3-1.7c0-0.3-0.4-0.4-0.6-0.5
								c-0.9-0.1-1.7,0.1-2.3,0.8l-0.7,0.9c-2.9,0.1-5.6,0-8.5,0v-0.1c2.3-5.2,8-6.5,13.3-6.6C103.1,24.8,105.8,24.7,107.7,26.1z
								 M37.6,36.7c-1.5,0.4-3.1,0.4-4.2,1.5c-0.3,0.4-0.6,0.8-0.5,1.4c0.1,0.3,0.5,0.5,0.8,0.5C35.6,40,37,38.3,37.6,36.7z M47.3,25.7
								c1.1,0.5,2.3,1.4,2.3,2.7c0,1-0.3,1.8-0.6,2.7l-4.8,10.8c-0.2,0.5,0,0.9,0.2,1.4l0.6,0.6L44.5,44h-8.1c-0.3-0.3-0.5-0.7-0.5-1.1
								c-2.6,1.5-5.8,2.2-9,1.7c-1.4-0.4-3.2-1.3-3.4-2.9c-0.2-2.5,1.3-4.6,3.3-6.2c2-1.5,4.4-2,6.9-2.5c1.8-0.3,3.8-0.2,5.5-0.8
								c0.5-0.2,1-0.6,1.2-1.1c0.1-0.2,0.1-0.6,0-0.8C40,30,39.5,29.8,39,30c-1,0.2-1.7,0.9-2.2,1.7c-2.8,0.1-5.5,0.1-8.4,0.1
								c0.9-3,4.1-5,6.9-5.8c3.4-0.9,7.4-1.1,11-0.5L47.3,25.7z"></path>
							<path id="energy" class="st1" d="M1.1,50h7.6v2.4H3.6v2.2h4.9V57H3.6v2.4H9v2.4H1.1V50z M19.6,50H23l4.8,8.1l0,0V50h2.5v11.7H27
								l-4.9-8.3l0,0v8.3h-2.5V50z M41.2,50h7.6v2.4h-5.1v2.2h4.9V57h-4.9v2.4h5.4v2.4h-7.9V50z M62.2,54.8h1.5c0.9,0,2.1,0,2.1-1.3
								c0-1.2-1-1.4-1.9-1.4h-1.6L62.2,54.8L62.2,54.8z M59.7,50H64c2.3,0,4.2,0.8,4.2,3.5c0,1.6-0.8,2.9-2.4,3.2l2.8,4.9h-3l-2.3-4.7
								h-1.2v4.7h-2.5V50H59.7z M88.7,60.9C87.2,61.7,85.6,62,84,62c-3.5,0-6-2.4-6-6.1c0-3.7,2.5-6.1,6-6.1c1.8,0,3.3,0.4,4.5,1.5l-1.7,2
								c-0.7-0.7-1.5-1.1-2.7-1.1c-2.1,0-3.5,1.6-3.5,3.8c0,2.2,1.4,3.8,3.5,3.8c1.1,0,1.9-0.3,2.3-0.6v-1.9h-2v-2.4h4.4v6
								C88.8,60.9,88.7,60.9,88.7,60.9z M102.3,56.7L98.1,50h3.1l2.4,4.4l2.5-4.4h2.9l-4.2,6.7v5h-2.5V56.7z"></path>
						</g>
					</svg>
				</a>
				<a href="#" class="menu-icon-normal main-opener"><span></span></a>
				<div class="header-drop">
					<div class="header-frame">
						<?php echo wp_nav_menu(array(
                            'menu'  => 'Top Menu New', 
                            'container_class' => 'additional-bar', 
                            'menu_class'	=> 'main-menu',
							'menu_id'	=> '',
                            'walker' => new CSS_Menu_Maker_Walker()
                        ));?>
						<div class="top-bar">
							<?php dynamic_sidebar('header-top');?>
						</div>
					</div>
				</div>
			</div>
		</header>
		<?php }?>
		<main id="main">
