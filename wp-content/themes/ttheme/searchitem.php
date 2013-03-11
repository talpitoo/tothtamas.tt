<?php
/**
 * The default template for displaying content (default for weblog)
 */
?>
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