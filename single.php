<?php get_header(); ?>

	<section id="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<h1><?php the_title(); ?></h1>
			
				<?php get_template_part( 'inc', 'meta' ); ?>

				<div class="entry">
				
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
					<?php the_tags( 'Tags: ', ', ', ''); ?>

				</div>
				
				<?php get_template_part( 'inc', 'socialbuttons' ); ?>
			
			</article>

		<?php comments_template(); ?>

		<?php endwhile; endif; ?>
	
	</section> <!-- /#main -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>