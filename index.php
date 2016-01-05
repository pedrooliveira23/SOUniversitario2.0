<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area container">
	<main id="main" class="site-main row" role="main"> <?php if ( have_posts() ) : ?>

	<?php if ( is_home() && ! is_front_page() ) : ?> <header>
		<h1 class="page-title screen-reader-text">
			<?php single_post_title(); ?>
		</h1>
	</header> <?php endif; ?> <?php
	// Start the loop.
	$num=1;
	while ( have_posts() ) : the_post();
	if($num==1) {
		get_template_part( 'content', 'novidadesUltima');
	} else if($num<=3 && $num > 1) {
		get_template_part( 'content', 'novidades' );
	}
	$num++;
	// End the loop.
	endwhile;
	?> 
	<h2>Outros Artigos</h2>
	<?php query_posts('cat=3&showposts=5'); ?>
	<h3 class="cat-nome">Dicas</h3>
	<?php if (have_posts()) : while (have_posts()) : the_post();
  			get_template_part( 'content', 'page' ); ?>
	<?php endwhile; endif; ?>
	<?php query_posts('cat=1&showposts=5'); ?>
	<h3 class="cat-nome">Sem Categoria</h3>
	<?php if (have_posts()) : while (have_posts()) : the_post();
  			get_template_part( 'content', 'page' ); ?>
	<?php endwhile; endif; ?>
	<?php
	endif;
	?> </main>
	<!-- .site-main -->
</div>
<!-- .content-area -->

<?php get_footer(); ?>
