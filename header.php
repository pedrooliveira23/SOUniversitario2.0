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
<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	
<![endif]-->
<?php wp_head(); ?>

<script>
	jQuery(window).scroll(function () {
		if ($(this).scrollTop() < 200) {
			document.getElementsByClassName("site-branding")[0].style.visibility = 'visible';
			document.getElementsByClassName("site-branding")[0].style.opacity = '1';
			document.getElementsByClassName("navegacao")[0].style.position="relative";
			document.getElementsByClassName("navegacao")[0].style.top="0";
		} else {
			document.getElementsByClassName("site-branding")[0].style.visibility = 'hidden';
			document.getElementsByClassName("site-branding")[0].style.opacity = '0';
			document.getElementsByClassName("navegacao")[0].style.position="fixed";
			document.getElementsByClassName("navegacao")[0].style.top="0px";
			document.getElementsByClassName("navegacao")[0].style.zIndex="10";
		}
	});
	</script>

</head>

<body <?php body_class(); ?>>
	<script type="text/javascript"
		src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

	<script type="text/javascript">
	jQuery( document ).ready(function(){
		jQuery(".button-collapse").sideNav();
		})
	</script>
	<script type="text/javascript"
		src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/materialize.min.js"></script>

	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?>
		</a>

		<header id="masthead" class="cabecalho teal hide-on-med-and-down"
			role="banner">
			<div class="site-branding">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><figure>
							<img
								src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png"
								alt="SOUniversitário" style="width: 480px;">
						</figure> </a>
				</h1>
				<button class="secondary-toggle">
					<?php _e( 'Menu and widgets', 'twentyfifteen' ); ?>
				</button>
			</div>
			<!-- .site-branding -->
			<nav class="navegacao teal darken-1" style="z-index: 10;">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> Início </a>
					</li>
					<?php wp_list_categories('orderby=id&title_li='); ?>
					<li class="pesquisa"><?php the_widget( 'WP_Widget_Search', $instance, $args ); ?></li>
				</ul>
			</nav>
		</header>

		<header>
			<nav class="teal">
				<div class="nav-wrapper">
					<a class="brand-logo hide-on-large-only"
						href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><figure>
							<img
								src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png"
								alt="SOUniversitário" style="width: 150px">
						</figure> </a> <a href="#" data-activates="mobile-demo"
						class="button-collapse"><i class="material-icons">menu</i> </a>
					<ul class="side-nav" id="mobile-demo">
						<ul>
							<li><?php the_widget( 'WP_Widget_Search', $instance, $args ); ?>
							</li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> Início </a>
							</li>
							<?php wp_list_categories('orderby=id&title_li='); ?>
						</ul>
					</ul>
				</div>
			</nav>
		</header>

		<div id="content" class="site-content">