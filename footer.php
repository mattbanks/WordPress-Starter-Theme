		<footer>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>
			<p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
		</footer>

	</div> <!-- /#container -->

  <?php wp_footer(); ?>

  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
	
</body>
</html>