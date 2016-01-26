<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>"
<?php post_class('container container-post row'); ?>>

	<header class="entry-header col s12 m12 l12">
		<?php
		if ( is_single() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
		else :
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
		?>
	</header>
	<!-- .entry-header -->

	<div class="col s12 m12 l12">
		<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
		?>
	</div>

	<div class="entry-content">
		<div
			class="col s12 m12 l12>
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
		) );

		wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
		</div>
			
			<aside id="recent_post" class="col s12 m3 l3 right">
				<?php if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>

				<?php endif; ?>
			</aside>
		</div>
		<!-- .entry-content -->

		<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
		get_template_part( 'author-bio' );
		endif;
		?>

		<footer class="entry-footer teal lighten-5 black-text">
			<?php twentyfifteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
		</footer>
		<!-- .entry-footer -->

		<div id="recent_post" class="row">
			<h3 class="cat-nome leia-mais">Leia Também</h3>
			<hr />
			<ul>
				<?php
				$recent_posts = wp_get_recent_posts();
				$num = 0;
				foreach( $recent_posts as $recent ){
					if($num < 6 && $recent["ID"] != get_the_ID()) {
						echo '<li class="leia-mais col s12 m2 l2"><a href="' . get_permalink($recent["ID"]) . '" class="card"> <header class="card-image">' .get_the_post_thumbnail($recent["ID"]) .'<p class="card-title page leia-mais">'.   $recent["post_title"].'</p></header></a> </li> ';
						$num++;
					}
				}
				?>
			</ul>
		</div>

</article>
<!-- #post-## -->
