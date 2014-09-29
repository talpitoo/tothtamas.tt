<?php 
/*
Template Name: Home
*/
get_header(); ?>

<div id="home-carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php
        $query = array('tag' => 'featured', 'posts_per_page' => -1);
        query_posts($query);
        $i = 0;
        $itemClass = "";
        while ( have_posts() ) : the_post();
          $i++;
          if ($i==1) {
              $itemClass = "active";
            } else {
              $itemClass = "";
          }
          $image = get_post_meta($post->ID, 'image', $single = true);
          $slideTo = $i - 1;
        ?>
    <li data-target="#home-carousel" data-slide-to="<?php echo $slideTo ?>" class="<?php echo $itemClass ?>"></li>
    <?php endwhile; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php
        $query = array('tag' => 'featured', 'posts_per_page' => -1);
        query_posts($query);
        $i = 0;
        $itemClass = "item";
        while ( have_posts() ) : the_post();
          $i++;
          if ($i==1) {
              $itemClass = "item active";
            } else {
              $itemClass = "item";
          }
          $image = get_post_meta($post->ID, 'image', $single = true);
        ?>
    <div class="<?php echo $itemClass ?>" style="background-image: url(<?php echo $image . "?ver=29092014b"; ?>);">
        <div class="carousel-caption">
          <h2>
            <?php the_title(); ?>
          </h2>
          <p>
            <?php remove_filter( 'the_content', 'wpautop' ); the_content(); ?>
          </p>
        </div>
      </div>
    
      <?php endwhile; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
    <span>&lsaquo;</span>
  </a>
  <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
    <span>&rsaquo;</span>
  </a>
</div>

<?php get_footer(); ?>