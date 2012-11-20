<?php get_header(); ?>

	<section id="main" role="main">

		<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template( '', true );
		?>

		<?php endwhile; ?>

	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
