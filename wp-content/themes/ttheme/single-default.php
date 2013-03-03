<?php get_header(); ?>

<div id="mainpage" class="container single">
  <div class="row">
    <div id="content" class="span8">
      <?php while ( have_posts() ) : the_post() ?>
        <!-- start post content -->
        <div class="blog_post">
          <h1>
            <?php the_title(); ?>
          </h1>
          <!-- post info -->
          <div class="metaInfo">
            <?php the_time('F, j, Y') ?> / <a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?> comments</a>
          </div>
          
          <div class="post_thumbnail">
            <?php the_post_thumbnail('large'); ?>
            <?php
              $imagecaption = get_post_meta( get_the_ID(), 'caption', true );
					    if ($imagecaption) echo "<p class='caption'>" . $imagecaption . "</p>";
				    ?>
          </div>
          <?php the_content(); ?>
        </div>
        <!-- end post content -->
      <?php endwhile; ?>
      <?php comments_template(); ?>
    </div>
    <div class="span4">
      <?php get_sidebar(); ?>
    </div>
</div>
  <div id="site-generator">
		<?php include(TEMPLATEPATH.'/poweredby.php'); ?>
	</div>
</div>

<?php get_footer(); ?>