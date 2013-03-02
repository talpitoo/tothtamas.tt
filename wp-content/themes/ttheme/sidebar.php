<?php
/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0
 *
 * This file is here for Backwards compatibility with old themes and will be removed in a future version
 *
 */
_deprecated_file( sprintf( __( 'Theme without %1$s' ), basename(__FILE__) ), '3.0', null, sprintf( __('Please include a %1$s template in your theme.'), basename(__FILE__) ) );
?>
	<div id="sidebar" role="complementary">
		<ul>
			<li>
				<?php get_search_form(); ?>
			</li>
		</ul>
		<?php
		if ( in_category('bio') || in_category('alterego')) {
			$related = new WP_Query('category_name=Bio'); ?>
			<ul>
				<li><h3>Related posts</h3>
					<ul>
						<?php while ($related->have_posts()) : $related->the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
							<?php
								the_post_thumbnail('thumbnail');
							?>
							</a>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="size14"><?php the_title(); ?> (<?php comments_number('0','1','%'); ?>)</a><br><span class="size12"><?php the_time('Y-m-d'); ?></span>
						</li>
					<?php endwhile; ?>
					</ul>
				</li>
			</ul>
		<?php }
		?>
		<ul>
			<li><h3>Popular posts</h3>
				<ul>
					<?php $popular = new WP_Query('orderby=comment_count&posts_per_page=5&category_name=Weblog'); ?>
						<?php while ($popular->have_posts()) : $popular->the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
							<?php
								the_post_thumbnail('thumbnail');
								
								//$originalimage = get_post_meta( get_the_ID(), 'image', true );
								//$thumbimage = str_replace(".jpg", "-thumbnail.jpg", $originalimage);
								//if ($originalimage) {
								//	echo "<img src='" . $thumbimage . "' width='50' height='50' /></a>";
								//} else {
								//	echo "<img src='http://images.tothtamas.tt/boy-thumbnail.jpg' class='front' /></a>";
								//}
							?>
							</a>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="size14"><?php the_title(); ?> (<?php comments_number('0','1','%'); ?>)</a><br><span class="size12"><?php the_time('Y-m-d'); ?></span>
						</li>
					<?php endwhile; ?>
				</ul>
			</li>
		</ul>
		<ul>
			<li><h3>Latest comments</h3>
				<ul>
					<?php
						$args = array(
							'status' => 'approve',
							'number' => '5'
						);
						$comments = get_comments($args);
						foreach($comments as $comment) :
							$post_related = get_post($comment->comment_post_ID );
							$title = $post_related->post_title;
							echo('<li><span class="column column1">');
								echo get_avatar( $comment, '50' );
								echo('</span><span class="column column2"><a href="' . $comment->comment_author_url . '" rel="external nofollow" class="size14" onClick="javascript: _gaq.push([&#039;_trackPageview&#039;, &#039;/outgoing/' . $comment->comment_author . '&#039;]);">' . $comment->comment_author . '</a> <span class="size12">on</span> <a href="' . get_comment_link( $comment, $args ) . '" rel="nofollow" class="size14">' . $title . '</a>');
								echo ('<br /><span class="size12">' . $comment->comment_date . '</span>');
							echo('</span><div class="clearAll"></div></li>');
						endforeach;
					?>
				</ul>
			</li>
		</ul>
		<!-- <ul role="navigation">
			<li><h3><?php //_e('Archives'); ?></h3>
				<ul>
				<?php //wp_get_archives(array('type' => 'monthly')); ?>
				</ul>
			</li>
		</ul> -->
	</div>

