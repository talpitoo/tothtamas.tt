<?php

// Define Directory Constants 
define('TTBLOG_INCLUDES', TEMPLATEPATH . '/includes');
define('TTBLOG_JS', get_template_directory_uri() . '/js');
define('TEMPLATEPATH', get_template_directory_uri());

// Load WP-PageNavi Advanced Pagination
require_once(TTBLOG_INCLUDES . '/wp-pagenavi/wp-pagenavi.php');

// Add support for thumbnails and menus
//add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
}

/*************************** Register the nav menu in the header */
register_nav_menus( array(
		'primary-menu' => __( 'Header Navigation', 'primary-menu' ),
) );

/*************************** Exclude Portfolio/Sliders from search */
function excludePages($query) {
if ($query->is_search) {
	$query->set('post_type', 'post');
}
if ( $query->is_feed ) {
	$query->set('category_name', 'Weblog');
}
	return $query; 
} 
add_filter('pre_get_posts','excludePages'); 

/*************************** Register sidebar */
if ( function_exists('register_sidebar') ) {
	register_sidebar(array('name' => 'Default Sidebar','before_widget' => '','after_widget' => '','before_title' => '<h3>','after_title' => '</h3>'));
}

function new_excerpt_more($more) {
	global $post;
	$show_readmore = get_option('show_readmore');
	$read_more = get_option('read_more');
	if($read_more == "") { $read_more = "Read more"; }
	if(!$show_readmore) {
		return '...';
		//return '...<div class="read_more"><a href="'. get_permalink($post->ID) . '">'.$read_more.'</a></div>';
	} else {
		return '...';
	}
}
add_filter('excerpt_more', 'new_excerpt_more');


function new_excerpt_length($length) {
	$excerpt_length = get_option('excerpt_length');	
	if($excerpt_length == "") { $excerpt_length = "28"; }
	return $excerpt_length;
}
add_filter('excerpt_length', 'new_excerpt_length');

/*************************** Override the post-thumbnail core functions to read from custom fields */
function startsWith($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}


add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 5 );

function my_post_image_html( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
	
	$originalimage = get_post_meta( get_the_ID(), 'image', true );	
	if ($originalimage) {
		if (endsWith($originalimage, '.jpg')) {
			$largeimage = str_replace(".jpg", "-large.jpg", $originalimage);
			$mediumimage = str_replace(".jpg", "-medium.jpg", $originalimage);
			$thumbimage = str_replace(".jpg", "-thumbnail.jpg", $originalimage);
		}
		if (endsWith($originalimage, '.gif')) {
			$largeimage = str_replace(".gif", "-large.gif", $originalimage);
			$mediumimage = str_replace(".gif", "-medium.gif", $originalimage);
			$thumbimage = str_replace(".gif", "-thumbnail.gif", $originalimage);
		}
		switch ($size) :			
			
			case "large" :
				$html = "<img src='" . $largeimage . "' class='front' /></a>";
				break;
			
			case "medium" :
				$html = "<img src='" . $mediumimage . "' class='front' /></a>";
				break;
			
			case "thumbnail" :
				$html = "<img src='" . $thumbimage . "' class='front' />";
				break;
				
			default :
				$html = "<img src='" . $thumbimage . "' class='front' />";
						
		endswitch;			
	}
	else {
		switch ($size) :			
			
			case "medium" :
				$html = "<img src='http://images.tothtamas.tt/boy-medium.jpg' class='front' /></a>";
				break;
			
			case "thumbnail" :
				$html = "<img src='http://images.tothtamas.tt/boy-thumbnail.jpg' class='front' /></a>";
				break;
				
			default :
				$html = "<img src='http://images.tothtamas.tt/boy-thumbnail.jpg' class='front' /></a>";
						
		endswitch;		
	}
    return $html;
}

?>