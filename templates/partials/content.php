<?php
/**
 * The template used for displaying content
 *
 * @package mattbanks
 * @since mattbanks 2.5
 */
?>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

	<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

	<?php get_template_part( 'templates/partials/inc', 'meta' ); ?>

	<div class="entry">
		<?php the_content(); ?>
	</div>

	<div class="postmetadata">
		<?php the_tags('Tags: ', ', ', '<br />'); ?>
		Posted in <?php the_category(', ') ?> |
		<?php comments_popup_link( 'No Comments &#187;', '1 Comment &#187;', '% Comments &#187;' ); ?>
	</div>

</article>
