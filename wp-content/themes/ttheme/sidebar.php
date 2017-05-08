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

<div class="sidebar" role="complementary">
  <div class="section">
    <h3>Popular</h3>
    <?php
      $popular = new WP_Query('orderby=comment_count&posts_per_page=5&category_name=Weblog');
      while ($popular->have_posts()) : $popular->the_post(); ?>
    <div class="media">
      <?php
        $post_id = get_the_ID();
        if($post_id==1993): $noindex=true; endif;
      ?>
      <a href="<?php the_permalink(); ?>" <?php if($noindex): echo "rel='nofollow'"; endif; ?> class="noborder pull-left">
        <?php the_post_thumbnail('thumbnail'); ?>
      </a>
      <div class="media-body">
        <a href="<?php the_permalink() ?>" <?php if($noindex): echo "rel='nofollow'"; endif; ?> title="<?php the_title_attribute(); ?>"><?php the_title(); ?> (<?php comments_number('0','1','%'); ?>)
        </a>
        <br />
        <?php the_time('Y-m-d'); ?>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
  <div class="section">
    <h3>Comments</h3>
    <?php
		  $args = array(
			  'status' => 'approve',
			  'number' => '5'
		  );
		  $comments = get_comments($args);
		  foreach($comments as $comment) :
			  $post_related = get_post($comment->comment_post_ID );
			  $title = $post_related->post_title;
			  echo('<div class="media"><span class="pull-left">');
				  echo get_avatar( $comment, '90' );
				  echo('</span><div class="media-body"><a href="' . $comment->comment_author_url . '" rel="external nofollow" onmousedown="javascript: ga(&#039;send&#039;, &#039;pageview&#039;, &#039;/outgoing/' . $comment->comment_author . '&#039;);">' . $comment->comment_author . '</a> on <a href="' . get_comment_link( $comment, $args ) . '" rel="nofollow">' . $title . '</a>');
				  echo ('<br />' . $comment->comment_date . '</div></div>');
		  endforeach;
	  ?>
  </div>
  <div class="section">
    <h2 class="sr-only">Sidebar</h2>
    <?php get_search_form(); ?>
  </div>
</div>
