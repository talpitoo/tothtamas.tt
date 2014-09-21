<?php get_header(); ?>

<div class="container single">
  <div class="row">
    <div class="col-md-8">
      <?php while ( have_posts() ) : the_post() ?>
        <div class="blog-post">
          <h1>
            <?php the_title(); ?>
          </h1>
          <div class="meta-info">
            <?php the_time('F, j, Y') ?> / <a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?> comments</a>
          </div>
          <div class="post-thumbnail">
            <?php the_post_thumbnail('original');
                  //the_post_thumbnail('original', array('alt' => the_title() ));
                  $imagecaption = get_post_meta( get_the_ID(), 'caption', true );
                  if ($imagecaption) echo "<p class='caption'>" . $imagecaption . "</p>";
				    ?>
          </div>
          <?php the_content(); ?>
        </div>
      <?php endwhile; 
            MRP_show_related_posts();
            comments_template();
      ?>
    </div>
  </div>
</div>
<div class="site-generator" role="contentinfo">
  <?php include(TEMPLATEPATH.'/poweredby.php'); ?>
</div>
<?php get_footer(); ?>