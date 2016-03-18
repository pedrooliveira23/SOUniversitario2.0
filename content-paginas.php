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

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<div class="container container-post">
		<header class="entry-header col s12 m12 l12">
			<?php
			if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			else :
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
			?>
		</header>
	</div>
	<div class="col s12 m12 l12">
		<div class="parallax-container">
			<div class="parallax">
				<img
					src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>">
			</div>
		</div>
	</div>

	<div class="container container-post">

		<!-- .entry-header -->
		<div class="entry-content">
			<div class="col s12 m12 l12">
				<hr />
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

		<footer class="entry-footer lighten-5 black-text">
			<hr />
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
					if($num < 4 && $recent["ID"] != get_the_ID()) {
						echo '<li class="leia-mais col s12 m3 l3"><a href="' . get_permalink($recent["ID"]) . '" class="card"> <header class="card-image">' .get_the_post_thumbnail($recent["ID"]) .'<p class="card-title page leia-mais">'.   $recent["post_title"].'</p></header></a> </li> ';
						$num++;
					}
				}
				?>
			</ul>
		</div>
	</div>
</article>
<!-- #post-## -->