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