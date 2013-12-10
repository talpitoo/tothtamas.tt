
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('custom', TTBLOG_JS . '/bootstrap-collapse.js');
	//wp_enqueue_script('custom', TTBLOG_JS . '/custom.js', '', $version);
	if (is_home()) {
		wp_enqueue_script('supersized', TTBLOG_JS . '/supersized.3.2.7.min.js', '', $version);
		wp_enqueue_script('supersizedtheme', TTBLOG_JS . '/supersized.shutter.min.js');
	}
?>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

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
