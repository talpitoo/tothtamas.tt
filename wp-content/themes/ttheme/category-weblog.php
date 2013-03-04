<?php 
/*
Template Name: Weblog
*/
get_header(); ?>

<div id="mainpage" class="container weblog">
	<div class="row">
		<div id="content" class="span9">
      <div class="row">
        <div class="span12">
          <h1>Weblog</h1>
        </div>
      </div>
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
      <?php
        endwhile;
        endif; ?>
      <div class="blog_pagenavi">
          <?php wp_pagenavi(); ?>
      </div>
    </div>
		<div class="span3">
		  <?php get_sidebar(); ?>
		</div>
	</div>
	<div id="site-generator">
		<?php include(TEMPLATEPATH.'/poweredby.php'); ?>
	</div>
</div>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>