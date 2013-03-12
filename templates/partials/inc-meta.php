<?php
/**
 * The template used for displaying post meta information
 *
 * @package mattbanks
 * @since mattbanks 2.5
 */
?>

<div class="meta">
	<em>Posted on:</em> <?php the_time('F jS, Y') ?>
	<em>by</em> <?php the_author() ?>
	<?php comments_popup_link( 'No Comments', '1 Comment', '% Comments', 'comments-link', '' ); ?>
</div>
