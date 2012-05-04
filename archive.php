<?php get_header(); ?>

	<section id="main" role="main">

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1>Archive for <?php the_time('F jS, Y'); ?></h1>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1>Archive for <?php the_time('F, Y'); ?></h1>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1 class="pagetitle">Author Archive</h1>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1 class="pagetitle">Blog Archives</h1>
			
			<?php } ?>

			<?php get_template_part( 'inc', 'nav' ); ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<article <?php post_class() ?>>
				
						<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					
						<?php get_template_part( 'inc', 'meta' ); ?>

						<div class="entry">
							<?php the_content(); ?>
						</div>

				</article>

			<?php endwhile; ?>

			<?php get_template_part( 'inc', 'nav' ); ?>
			
	<?php else : ?>

		<h1>Nothing found</h1>

	<?php endif; ?>
	
	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
