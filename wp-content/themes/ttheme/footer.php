
<?php
	wp_deregister_script( 'jquery' );
	
	if (is_home()) { 
		//wp_enqueue_script('touchwipe', TTBLOG_JS . '/jquery.touchwipe.min.js');
		//wp_enqueue_script('supersized', TTBLOG_JS . '/supersized.3.2.7.js', '', $version);
		//wp_enqueue_script('supersizedtheme', TTBLOG_JS . '/supersized.shutter.min.js');
		// wp_enqueue_script('minify-home', TTBLOG_JS . '/minify-home.js');
		?>
		<script type="text/javascript">
			var myImagePath = "<?php bloginfo('template_url'); ?>/images/";
			var mySlides = [
				<?php $query = array('tag' => 'featured', 'posts_per_page' => -1); query_posts($query); while ( have_posts() ) : the_post(); ?>
				{image : '<?php $image = get_post_meta($post->ID, 'image', $single = true); echo $image; ?>', title: '<h2><?php the_title(); ?></h2><p><?php remove_filter( 'the_content', 'wpautop' ); the_content(); ?></p>'}
				<?php
							if (($wp_query->current_post) < ($wp_query->post_count-1)) {
							echo ',';
							}
						?>
				<?php endwhile; ?>
				];
		</script>
		<script async src="<?php bloginfo('template_url'); ?>/js/minify-home.js?ver=28092014"></script>

	<?php } else { 
		//wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' );
		//wp_enqueue_script( 'jquery' );
		//wp_enqueue_script('bootstrap', TTBLOG_JS . '/bootstrap.min.js');
		//wp_enqueue_script('custom', TTBLOG_JS . '/custom.js');
		//wp_enqueue_script('minify', TTBLOG_JS . '/minify.js');
		?>
		<script async src="<?php bloginfo('template_url'); ?>/js/minify.js?ver=28092014"></script>
	<?php } ?>

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
