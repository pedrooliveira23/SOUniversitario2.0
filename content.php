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

<figure id="post-<?php the_ID(); ?>" class="span3 picture-item col s12 m7"
	data-groups='["<?php get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfifteen' ) ) ?>"]'>

	<img
		src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail-size', true)[0] ?>"
		height="145" width="230" />

	<div class="picture-item__details">
		<figcaption class="picture-item__title"><?php the_title()?></figcaption>
		<p class="picture-item__tags"><?php get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfifteen' ) ) ?></p>

	</div>
</figure>
<!-- #post-## -->
