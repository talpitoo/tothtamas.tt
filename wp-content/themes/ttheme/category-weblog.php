<?php 
/*
Template Name: Weblog
*/
get_header(); ?>

<div  class="container weblog">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-uppercase">Weblog</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 infinity-scroll-content" role="main">
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $query = array(
          'post_type' => 'post',
          'paged' => $paged,
          'category_name' => 'weblog',
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
      <?php
        endwhile;
        endif; ?>
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