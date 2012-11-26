<?php get_header(); ?>

	<section id="main" role="main">

		<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php comment_form(); ?>

		<?php endwhile; ?>

	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
