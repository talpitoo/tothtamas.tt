<?php get_header(); ?>

<div id="mainpage" class="search">
	<div class="page_content">
		<div id="content">
			<div class="results">
				<?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts("s=$s&paged=$paged&cat=1"); //1 is the Weblog category
					
					if ( have_posts() ) : ?>

					<div class="page-header">
						<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span class="query">' . get_search_query() . '</span>' ); ?></h2>
					</div>

					<?php /* Start the Loop */ ?>
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
							<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h2>
						</div><!-- .entry-header -->

						<div class="entry-content">
							<p><?php _e( 'Note that this engine searches only the Weblog category.', 'twentyeleven' ); ?></p>
						</div><!-- .entry-content -->
					</div><!-- #post-0 -->

				<?php endif; ?>
			</div>
		</div><!-- #content -->
		<?php get_sidebar(); ?>
	</div><!-- end .page -->
</div>

<?php get_footer(); ?>