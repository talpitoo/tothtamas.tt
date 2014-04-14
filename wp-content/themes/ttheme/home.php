<?php 
/*
Template Name: Home
*/
get_header(); ?>

<!-- Supersized Control Bar -->
<div id="controls-wrapper" class="load-item">
	<a id="prevslide" class="noborder load-item"><img src="<?php bloginfo('template_url'); ?>/images/back_dull.png"/></a>
	<a id="nextslide" class="noborder load-item"><img src="<?php bloginfo('template_url'); ?>/images/forward_dull.png"/></a>
	<div id="controls">
		<a id="play-button" class="noborder"><img id="pauseplay" src="<?php bloginfo('template_url'); ?>/images/pause_dull.png"/></a>
		<div id="slidecaption"></div>
	</div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
jQuery(function($){
	$.supersized({
		slide_interval          :   6000,		// Length between transitions
		transition              :   6, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		image_protect			:	0,			//Disables image dragging and right click with Javascript
		image_path				:	"<?php bloginfo('template_url'); ?>/images/",
		slide_links				:	0,
		fit_landscape			:	1,
		slides 					:  	[			//Slideshow Images
			<?php $query = array('tag' => 'featured', 'posts_per_page' => -1); query_posts($query); while ( have_posts() ) : the_post(); ?>
			{image : '<?php $image = get_post_meta($post->ID, 'image', $single = true); echo $image; ?>',
			title: '<h2><?php the_title(); ?></h2><p><?php remove_filter( 'the_content', 'wpautop' ); the_content(); ?></p>'}
			<?php
				if (($wp_query->current_post) < ($wp_query->post_count-1)) {
				echo ',';
				}
			?>
			<?php endwhile; ?>
		]
	});
});
</script>