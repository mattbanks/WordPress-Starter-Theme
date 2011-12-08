<?php get_header(); ?>

	<section id="main">
		
		<div class="post" id="post-<?php the_ID(); ?>">
			
			<h1>Page Not Found</h1>
			
			<div class="entry">

				<p>Error 404</p>
				<p>Sorry, we couldn't find what you were looking for. Try heading back to the <a href="<?php bloginfo('url'); ?>">home page</a>.</p>
				
			</div>
		
		</div>
		
	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>