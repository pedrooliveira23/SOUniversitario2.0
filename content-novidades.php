<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<article id="post-<?php the_ID(); ?>"
<?php post_class('col s12 m4 l4'); ?>>
	<div class="card grid-novidade">
		<header class="card-image">
			<?php
			// Post thumbnail.
			twentyfifteen_post_thumbnail ();
			?>
			<a class="moretag" href="<?php echo get_permalink($post->ID)?>"> <?php the_title( '<span class="card-title">', '</span>' ); ?>
			</a>
		</header>
		<!-- .entry-header -->
		<!-- .entry-content -->
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

	</div>
</article>

<!-- #post-## -->
