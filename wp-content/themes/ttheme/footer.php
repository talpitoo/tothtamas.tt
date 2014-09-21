
<?php
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('custom', TTBLOG_JS . '/bootstrap.js');
	wp_enqueue_script('custom', TTBLOG_JS . '/custom.js', '', $version);
	if (is_home()) {
		wp_enqueue_script('touchwipe', TTBLOG_JS . '/jquery.touchwipe.min.js');
		wp_enqueue_script('supersized', TTBLOG_JS . '/supersized.3.2.7.js', '', $version);
		wp_enqueue_script('supersizedtheme', TTBLOG_JS . '/supersized.shutter.min.js');
	}
?>

<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<?php wp_footer(); ?>
</body>
</html>
