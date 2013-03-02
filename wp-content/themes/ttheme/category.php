<?php 
/*
Template Name: Category
*/
get_header(); ?>

<!-- <div id="mainpage" class="weblog">
	<div class="page_content">
    	<div id="content">
			Enable javascript to see the slideshow.
		</div>
	</div>
</div>
-->

<!-- Supersized Control Bar -->
<div id="controls-wrapper"> 
	<div id="controls"> 
		<div id="slidecaption"></div> 
		<div id="navigation"> 
			<img id="prevslide" src="<?php bloginfo('template_url'); ?>/images/back_dull.png"/><img id="pauseplay" src="<?php bloginfo('template_url'); ?>/images/pause_dull.png"/><img id="nextslide" src="<?php bloginfo('template_url'); ?>/images/forward_dull.png"/> 
		</div> 
	</div> 
</div>

<script type="text/javascript">
jQuery(function($){
	$.supersized({
	startwidth: 640,  
	startheight: 480,
	vertical_center: 1,
	navigation: 1,
	thumbnail_navigation: 0,
	slideshow               :   1,		//Slideshow on/off
	autoplay				:	1,		//Slideshow starts playing automatically
	start_slide             :   1,		//Start slide (0 is random)
	random					: 	0,		//Randomize slide order (Ignores start slide)
	slide_interval          :   6000,	//Length between transitions
	transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
	transition_speed		:	1000,	//Speed of transition
	pause_hover             :   0,		//Pause slideshow on hover
	keyboard_nav            :   1,		//Keyboard navigation on/off
	performance				:	0,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
	image_protect			:	0,		//Disables image dragging and right click with Javascript
	slide_counter: 0,
	slide_captions: 1,
	fit_portrait         	:	1,
	image_path				:	"<?php bloginfo('template_url'); ?>/images/",
	slides 				:  	[		//Slideshow Images
	<?php $cat_ID = get_query_var('cat'); $query = array('cat' => $cat_ID, 'posts_per_page' => -1); query_posts($query); while ( have_posts() ) : the_post(); ?>
	{image : '<?php $image = get_post_meta($post->ID, 'image', $single = true); echo $image; ?>',
	title: '<h1><?php the_title(); ?></h1><p><?php remove_filter( 'the_content', 'wpautop' ); the_content(); ?></p>'}
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

<?php wp_reset_query(); ?>
<?php get_footer(); ?>