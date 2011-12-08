<?php get_header(); ?>

	<section id="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

				<?php get_template_part( 'inc', 'meta' ); ?>

				<div class="entry">
					<?php the_content(); ?>
				</div>

				<div class="postmetadata">
					<?php the_tags('Tags: ', ', ', '<br />'); ?>
					Posted in <?php the_category(', ') ?> | 
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</div>

			</article>

		<?php endwhile; ?>

		<?php get_template_part( 'inc', 'nav' ); ?>

		<?php else : ?>

			<h2>Not Found</h2>

		<?php endif; ?>
	
	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
