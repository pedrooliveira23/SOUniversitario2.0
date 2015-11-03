<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<link type="text/css" rel="stylesheet"
	href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/materialize.min.css"
	media="screen,projection" />
<link type="text/css" rel="stylesheet"
	href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/souniversitario.css"
	media="screen,projection" />
<script
	src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.shuffle.modernizr.min.js"></script>
<script
	src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.shuffle.min.js"></script>
<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	
<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<script type="text/javascript"
		src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src=src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/materialize.min.js"></script>

	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

		<header id="masthead" class="cabecalho identidade" role="banner">
			<div class="site-branding">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><figure>
							<img
								src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png"
								alt="SOUniversitário">
						</figure></a>
				</h1>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div>
			<!-- .site-branding -->
			<nav class="identidade">
				<ul>
				<li>Início</li>
				<li>Categoria 1</li>
				<li>Categoria 2</li>
				<li>Categoria...</li>
				<li>Quem Somos</li>
				</ul>
			</nav>
		</header>

		<div id="content" class="site-content">