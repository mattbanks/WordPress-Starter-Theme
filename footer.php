		<footer>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>
			<p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
		</footer>

	</div> <!-- /#container -->

  <?php wp_footer(); ?>
	
</body>
</html>