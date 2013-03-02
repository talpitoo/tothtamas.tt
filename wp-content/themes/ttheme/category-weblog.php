<?php 
/*
Template Name: Weblog
*/
get_header(); ?>


<div id="mainpage" class="weblog">
	<div class="page_content">
    	<div id="content">
		<h2 class="size48">Weblog</h2>
        <?php
        	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        	$query = array(
            	'post_type' => 'post',
            	'paged' => $paged,
				'category_name' => 'weblog',
        	);
			query_posts($query);
			if (have_posts()) : while (have_posts()) : the_post(); ?>
        
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="column one-third">
				<?php //if(has_post_thumbnail()) { ?>
					<div class="post_thumbnail">
						<?php
						//$thumbnail = get_post_thumbnail_id(); 
						//$img = vt_resize( $thumbnail,'' , 510, 280, true, 70 );
						?>
						<a href="<?php the_permalink(); ?>">
						<!-- <?php echo '<img src="'.$img[url].'" width="'.$img[width].'" height="'.$img[height].'" alt="'.$lbtitle.'" /></a>'; ?> -->
						<?php
							the_post_thumbnail('medium');
							//$originalimage = get_post_meta( get_the_ID(), 'image', true );
							//$mediumimage = str_replace(".jpg", "-medium.jpg", $originalimage);
							//if ($originalimage) {
							//	echo "<img src='" . $mediumimage . "' class='front' /></a>";
							//} else {
							//	echo "<img src='http://images.tothtamas.tt/boy-medium.jpg' class='front' /></a>";
							//}
						?>
						</a>
					</div>
				<?php //} ?> 
			</div>
			<div class="column two-thirds">
				<div>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="metaInfo"><?php the_time('F, j, Y'); ?> / <a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?> comments</a></div>
					<?php the_excerpt(); ?>
					<div class="read_more"><a href="<?php the_permalink(); ?>">Read more</a></div>
				</div>
			</div>
			<div class="clearAll"></div>
		</div>
		
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