<?php 
/*
Template Name: Bio
*/
get_header(); ?>

<div  class="container single weblog bio">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-uppercase">Bio</h1>
    </div>
  </div>
  <div class="row">
    <div  role="main" class="col-md-8">
      <div class="blog-post">
        <div class="post-thumbnail">
          <img src="http://images.tothtamas.tt/portfolio/collections/alterego/mila-lica-toth-tamas-critical-mass-belgrade.jpg" alt="critical mass Belgrade" title="critical mass Belgrade" class="img-responsive" />
          <p class='caption'>&copy; Milalica</p>
        </div>
        <p>Tamás is a passionate, all season-biker. Goes nowhere without a bike and his camera. Was born in Subotica in 1982, upside down.</p>
      </div>
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
      <div <?php post_class(); ?>>
        <div class="row">
          <div class="col-md-4 post-thumbnail">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium'); ?>
            </a>
          </div>
          <div class="col-md-8">
            <h2>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
              </a>
            </h2>
            <div class="meta-info">
              <?php the_time('F, j, Y'); ?> / <a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?> comments
              </a>
            </div>
            <?php the_excerpt(); ?>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
      <div class="blog_pagenavi">
        <?php wp_pagenavi(); ?>
      </div>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<div class="site-generator" role="contentinfo">
  <?php include(TEMPLATEPATH.'/poweredby.php'); ?>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>