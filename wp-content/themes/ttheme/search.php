<?php get_header(); ?>

<div  class="container search">
  <?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts("s=$s&paged=$paged&cat=1"); //1 is the Weblog category
					if ( have_posts() ) : ?>
  <div class="row">
    <div class="col-md-12">
      <h1>
        <?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span class="query">' . get_search_query() . '</span>' ); ?>
      </h1>
    </div>
  </div>
  <div class="row">
    <div  class="col-md-8">
      <div class="results">
        <?php while ( have_posts() ) : the_post();
							/* Include the Post-Format-specific template for the content.
							 * If you want to overload this in a child theme then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'searchitem', get_post_format() );
						endwhile; ?>
      </div>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
  <?php else : ?>
  <div class="row">
    <div class="col-md-12">
      <h1>Nothing Found</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <p>Note that this engine searches only the Weblog category.</p>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>

  <?php endif; ?>
</div>
<?php get_footer(); ?>