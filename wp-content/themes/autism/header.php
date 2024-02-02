<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Four_Seasons
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no">

    <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <!-- Place favicon.ico in the root directory -->
    <link href="" type="img/x-icon" rel="shortcut icon">

    <!-- Font files are included here. -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic">

    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?> class="preload">

<div class="wrapper">
	<div class="bar">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell small-12">
					<p class="bar-phone">
						<!-- <i class="fas fa-phone"></i> Call Us : <strong><a href="tel:+1514000000">+1 514 000 0000</a></strong> -->
					</p><!-- /.bar-phone -->
					
					<div class="bar-socials">
						<ul>
							
							<li>
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							
							<li>
								<a href="#">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
							
							<li>
								<a href="#">
									<i class="fab fa-youtube"></i>
								</a>
							</li>
							
						</ul>
					</div><!-- /.bar-socials -->
				</div><!-- /.columns small-12 -->
			</div>
		</div>
	</div><!-- /.bar -->

	<header class="header">
	
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell small-12">
					<a href="index.html" class="header-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/site-logo.png" alt="Charity | Foundation">
						<!-- <span class="site-description">Autism</span> -->
					</a>

					<div class="header-inner">
						<a href="#" class="button-burger">
							<span></span>
						</a>
					
						<nav class="nav">
							<ul>
								<li>
									<a href="index.html">Home</a>
								</li>

								<li>
									<a href="page.html">About Us</a>
									<!-- <ul>
										<li>
											<a href="page-elements.html">HTML Elements</a>
										</li>

										<li>
											<a href="page-404.html">404 Error Page</a>
										</li>
									</ul> -->
								</li>

								<li>
									<a href="resources.html">Resources</a>
									<!-- <ul>
										<li><a href="causes-detail.html">Single Cause</a></li>
									</ul> -->
								</li>
								
								<li>
									<a href="media.html">Media</a>

								</li>
								
								<li>
									<a href="event.html">Events</a>
									<!-- <ul>
										<li>
											<a href="blog-detail.html">Single Post</a>
										</li>
									</ul> -->
								</li>
								
								<li>
									<a href="staff.html">Diversty</a>
								</li>

								<li>
									<a href="page-contact.html">Contact Us</a>
								</li>
							</ul>
						</nav><!-- /.nav -->
					
						<div class="header-actions">
							<a href="page-donate.html" class="button">Donate</a>
						</div><!-- /.header-actions -->
					</div><!-- /.header-inner -->
				</div>
			</div>
		</div>
	</header><!-- /.header -->

