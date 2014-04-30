<?php 
/*
Template Name: Bio
*/
get_header(); ?>

<div id="mainpage" class="container single weblog bio">
	<div class="row">
		
		
		<div id="content" role="main" class="span8">
		 
			<!-- start post content -->
			<div class="blog_post">
				<h1>Bio</h1>
				<div class="post_thumbnail">
					<img src="http://images.tothtamas.tt/portfolio/collections/alterego/mila-lica-toth-tamas-critical-mass-belgrade-large.jpg" alt="field work" title="critical mass Belgrade" class="front">
					<p class='caption'>&copy; Milalica</p>
				</div>
				<p>Tamás is a passionate, all season-biker. Goes nowhere without a bike and his camera. Was born in Subotica in 1982, upside down.</p>
				<br />
			</div><!-- end .blog_post -->
			
			
			<?php
        	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        	$query = array(
            	'post_type' => 'post',
            	'paged' => $paged,
				'posts_per_page' => -1,
				'category_name' => 'alterego',
        	);
			query_posts($query);
			if (have_posts()) : while (have_posts()) : the_post(); ?>
        
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="row">
					<div class="span4 post_thumbnail">
						<a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium'); ?>
            </a>
					</div>
    			<div class="span8">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="metaInfo"><?php the_time('F, j, Y'); ?> / <a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?> comments</a></div>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="pull-right btn">Read more</a>
				  </div>
			  </div>
		</div>
		
        <?php endwhile; endif; ?>

            <div class="blog_pagenavi">
                <?php wp_pagenavi(); ?>
            </div>
		

		</div>

    <div class="span4">
      <?php get_sidebar(); ?>
    </div>
		
		
	</div>
	<div id="site-generator" role="contentinfo">
		<?php include(TEMPLATEPATH.'/poweredby.php'); ?>
	</div>
</div>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>