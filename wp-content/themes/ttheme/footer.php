<?php
	
	
  
  wp_enqueue_script('bootstrap', TTBLOG_JS . '/bootstrap.min.js', array( 'jquery' ));
  wp_enqueue_script('jquerymobile', TTBLOG_JS . '/jquery.mobile.custom.min.js');
  wp_enqueue_script('custom', TTBLOG_JS . '/custom.js', array( 'jquery' ));
  
  wp_footer();
  
  //wp_enqueue_script('minify', TTBLOG_JS . '/minify.js');
?>
<!-- <script async src="<?php bloginfo('template_url'); ?>/js/minify.js?ver=28092014"></script> -->
</body>
</html>
