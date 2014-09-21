<?php get_header(); ?>

<div  class="container search">
  <div class="row">
    <div  class="col-md-8">

      <div class="results">
        <?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts("s=$s&paged=$paged&cat=1"); //1 is the Weblog category
					
					if ( have_posts() ) : ?>

          <h1 class="page-title">
            <?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span class="query">' . get_search_query() . '</span>' ); ?>
          </h1>

        
        <?php while ( have_posts() ) : the_post(); ?>

        <?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to overload this in a child theme then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'searchitem', get_post_format() );
						?>

        <?php endwhile; ?>

        <?php else : ?>

        <div id="post-0" class="post no-results not-found">
          <div class="entry-header">
            <h1 class="entry-title">
              <?php _e( 'Nothing Found', 'twentyeleven' ); ?>
            </h1>
          </div>
          <!-- .entry-header -->

          <div class="entry-content">
            <p>
              <?php _e( 'Note that this engine searches only the Weblog category.', 'twentyeleven' ); ?>
            </p>
          </div>
          <!-- .entry-content -->
        </div>
        <!-- #post-0 -->

        <?php endif; ?>
      </div>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>