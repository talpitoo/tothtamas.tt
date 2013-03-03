<?php 
/*
Template Name: Testimonials
*/
get_header(); ?>


<div id="mainpage" class="weblog">
	<div class="page_content">
    	<div id="content">
		<h2 class="size48">Comments</h2>
        <?php
        	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        	$query = array(
            	'post_type' => 'post',
            	'paged' => $paged,
				'category_name' => 'testimonials',
				'post__not_in' => array(81) //Your impressions dummy post for comments
        	);
			query_posts($query);
			if (have_posts()) : while (have_posts()) : the_post(); ?>
        
		<div class="column">
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="metaInfo"><a href="<?php $authorurl = get_post_meta( get_the_ID(), 'url', true ); if ($authorurl) echo $authorurl; ?>" onClick="javascript: _gaq.push(['_trackPageview', '/outgoing/<?php the_title(); ?>']);" rel="external nofollow"><?php the_title(); ?></a><span class="pull-right"><?php the_time('F, j, Y'); ?></span></div>
				<?php
					the_content();
				?>
			</div>
		</div>
		<div class="clearfix"></div>
		
        <?php endwhile; endif; ?>
		
		<?php
        	$queryimpressions = array(
            	'post_type' => 'post',
				'category_name' => 'testimonials',
				'p' => 81 //Your impressions dummy post for comments
        	);
			query_posts($queryimpressions);
			if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php comments_template(); ?>
		<?php endwhile; endif; ?>
			
			
            <div class="blog_pagenavi">
                <?php wp_pagenavi(); ?>
            </div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<div id="site-generator">
		<?php include(TEMPLATEPATH.'/poweredby.php'); ?>
	</div>
</div>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>