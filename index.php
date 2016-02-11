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
	?> <?php query_posts('cat=8&showposts=4'); ?>
	
	<h3 class="cat-nome ">
		<i class="material-icons menu-icon">language</i>Notícias
	</h3>
	<div class="ancora scrollspy" id="8"></div>
	<hr />
	<?php if (have_posts()) : while (have_posts()) : the_post();
	get_template_part( 'content', 'page' ); ?> <?php endwhile; endif; ?> <a
		href="category/noticias/"
		class="hide-on-med-and-down maisPosts btn-floating btn waves-effect waves-light teal darken-1"><i
		class="material-icons">add</i> </a> <a style="margin: 0px 45%;"
		href="category/noticias/"
		class="hide-on-large-only btn-floating btn waves-effect waves-light teal darken-1"><i
		class="material-icons">add</i> </a> <?php query_posts('cat=9&showposts=4'); ?>
	<h3 class="cat-nome ">
		<i class="material-icons menu-icon">question_answer</i>Papo Curioso
	</h3>
	<div class="ancora scrollspy" id="9"></div>
	<hr />
	<?php if (have_posts()) : while (have_posts()) : the_post();
	get_template_part( 'content', 'page' ); ?> <?php endwhile; endif; ?> <a
		href="category/papo-curioso/"
		class="hide-on-med-and-down maisPosts btn-floating btn waves-effect waves-light teal darken-1"><i
		class="material-icons">add</i> </a> <a style="margin: 0px 45%;"
		href="category/noticias/"
		class="hide-on-large-only btn-floating btn waves-effect waves-light teal darken-1"><i
		class="material-icons">add</i> </a> <?php query_posts('cat=10&showposts=4'); ?>
	<h3 class="cat-nome ">
		<i class="material-icons menu-icon">theaters</i>Diversão
	</h3>
	<div class="ancora scrollspy" id="10"></div>
	<hr />
	<?php if (have_posts()) : while (have_posts()) : the_post();
	get_template_part( 'content', 'page' ); ?> <?php endwhile; endif; ?> <a
		href="category/diversao/"
		class="hide-on-med-and-down maisPosts btn-floating btn waves-effect waves-light teal darken-1"><i
		class="material-icons">add</i> </a> <a style="margin: 0px 45%;"
		href="category/noticias/"
		class="hide-on-large-only btn-floating btn waves-effect waves-light teal darken-1"><i
		class="material-icons">add</i> </a> <?php query_posts('cat=11&showposts=4'); ?>
	<h3 id="11" class="cat-nome ">
		<i class="material-icons menu-icon">class</i>Universidade
	</h3>
	<div class="ancora scrollspy" id="11"></div>
	<hr />
	<?php if (have_posts()) : while (have_posts()) : the_post();
	get_template_part( 'content', 'page' ); ?> <?php endwhile; endif; ?> <a
		href="category/universidade/"
		class="hide-on-med-and-down maisPosts btn-floating btn waves-effect waves-light teal darken-1"><i
		class="material-icons">add</i> </a> <a style="margin: 0px 45%;"
		href="category/noticias/"
		class="hide-on-large-only btn-floating btn waves-effect waves-light teal darken-1"><i
		class="material-icons">add</i> </a> <?php query_posts('cat=12&showposts=4'); ?>
	<h3 class="cat-nome ">
		<i class="material-icons menu-icon">explore</i>Guias
	</h3>
	<div class="ancora scrollspy" id="12"></div>
	<hr />
	<?php if (have_posts()) : while (have_posts()) : the_post();
	get_template_part( 'content', 'page' ); ?> <a href="category/guias/"
		class="hide-on-med-and-down maisPosts btn-floating btn waves-effect waves-light teal darken-1"><i
		class="material-icons">add</i> </a> <a style="margin: 0px 45%;"
		href="category/noticias/"
		class="hide-on-large-only btn-floating btn waves-effect waves-light teal darken-1"><i
		class="material-icons">add</i> </a> <?php endwhile; endif; ?> <?php
		endif;
		?> </main>
	<!-- .site-main -->
</div>
<!-- .content-area -->

<?php get_footer(); ?>
