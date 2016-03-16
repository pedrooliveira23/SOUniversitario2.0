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
<?php post_class('col s12 m8 l8'); ?>>
	<div class="card">
		<header class="card-image">
			<?php
			// Post thumbnail.
			twentyfifteen_post_thumbnail ();
			?>
			<a class="moretag hide-on-small-only" href="<?php echo get_permalink($post->ID)?>"> <?php the_title( '<span class="card-title">', '</span>' ); ?>
			</a>
			<a class="moretag hide-on-med-and-up" href="<?php echo get_permalink($post->ID)?>"><span class="card-title"> <?php the_titlesmall('', '...', true, '40') ?></span>
			</a>
		</header>
		<!-- .entry-header -->
		<!-- .entry-content -->
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

	</div>
</article>


<!-- #post-## -->
