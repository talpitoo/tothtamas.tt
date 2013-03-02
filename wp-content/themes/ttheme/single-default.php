<?php get_header(); ?>

<div id="mainpage" class="single">
	<div class="page_content">
		
		<!-- start content area -->
		<div id="content">
		<?php while ( have_posts() ) : the_post() ?> 
			<!-- start post content -->
			<div class="blog_post">
			<h2><?php the_title(); ?></h2>
			<!-- post info -->
			<div class="metaInfo">
				<?php the_time('F, j, Y') ?> / <a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?> comments</a>
			</div>
			<?php //get_post_meta( $post_id, 'image', true ); ?>
			<?php //if(has_post_thumbnail()) { ?>
			<div class="post_thumbnail">
				<?php 
				//$thumb = get_post_thumbnail_id(); 
				//$image = vt_resize( $thumb,'' , 510, 220, true, 70 );
				?>
				<!-- <img src="<?php echo $image[url]; ?>" width="<?php echo $image[width]; ?>" height="<?php echo $image[height]; ?>" class="front" /></a> -->
				<?php
					the_post_thumbnail('large');
					//$originalimage = get_post_meta( get_the_ID(), 'image', true );
					//$largeimage = str_replace(".jpg", "-large.jpg", $originalimage);
					//if ($originalimage)
					//	echo "<img src='" . $largeimage . "' class='front' /></a>";
				?>
				<?php
					$imagecaption = get_post_meta( get_the_ID(), 'caption', true );
					if ($imagecaption) echo "<p class='caption'>" . $imagecaption . "</p>";
				?>
			</div>
			<?php //} ?>
			<?php the_content(); ?>
			</div><!-- end .blog_post -->
		<?php endwhile; ?>
				
		<?php comments_template(); ?>
		</div><!-- end #content -->
		
		<?php get_sidebar(); ?>
		
	</div><!-- end .page -->
	<div id="site-generator">
		<?php include(TEMPLATEPATH.'/poweredby.php'); ?>
	</div>
</div>

<?php get_footer(); ?>