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
<?php post_class('col s7 m4 l4'); ?>>
	<div class="card">
		<header class="card-image">
			<?php
			// Post thumbnail.
			twentyfifteen_post_thumbnail ();
			?>

		</header>
		<!-- .entry-header -->
		<div class="card-content">
			<a class="moretag" href="<?php echo get_permalink($post->ID)?>"> <?php the_title( '<span class="card-title black-text">', '</span>' ); ?>
			</a>
		</div>
		<!-- .entry-content -->
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

	</div>
</article>
<!-- #post-## -->
