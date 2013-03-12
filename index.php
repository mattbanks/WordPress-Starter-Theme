<?php get_header(); ?>

	<section id="main" role="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/partials/content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php get_template_part( 'templates/partials/inc', 'nav' ); ?>

		<?php else : ?>

			<article>
				<h1>Not Found</h1>
			</article>

		<?php endif; ?>

	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
