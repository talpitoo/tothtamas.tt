<?php
/**
 * The default template for displaying content
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	</article><!-- #post-<?php the_ID(); ?> -->