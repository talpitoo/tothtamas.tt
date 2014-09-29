<?php

// define directory constants 
define('TTBLOG_INCLUDES', TEMPLATEPATH . '/includes');
define('TTBLOG_JS', get_template_directory_uri() . '/js');
define('TEMPLATEPATH', get_template_directory_uri());



// load WP-PageNavi advanced pagination
require_once(TTBLOG_INCLUDES . '/wp-pagenavi/wp-pagenavi.php');



// add support for menus
add_theme_support( 'menus' );
// Register the nav menu in the header
register_nav_menus( array(
	'primary-menu' => __( 'Header Navigation', 'primary-menu' ),
));



// exclude Portfolio/Sliders from search
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



// register sidebar
if ( function_exists('register_sidebar') ) {
	register_sidebar(array('name' => 'Default Sidebar','before_widget' => '','after_widget' => '','before_title' => '<h3>','after_title' => '</h3>'));
}



// longer excerpts
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_length($length) {
	$excerpt_length = get_option('excerpt_length');	
	if($excerpt_length == "") { $excerpt_length = "28"; }
	return $excerpt_length;
}
add_filter('excerpt_length', 'new_excerpt_length');



// override the post-thumbnail core functions to read from custom fields
if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
}

function startsWith($haystack, $needle) {
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

function endsWith($haystack, $needle) {
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }
    return (substr($haystack, -$length) === $needle);
}

add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 5 );
add_filter( 'admin_post_thumbnail_html', 'my_post_image_html_withour_params', 20, 5 );

function my_post_image_html_withour_params( $html, $post_id) {
	return my_post_image_html($html, $post_id, '', 'thumbnail', '');
}

function my_post_image_html( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
	if (endsWith($html, "p>")) {
		// "p> is the ending of the markup"
		// do nothing to preserve featured image link popups
	} else {
		$originalimage = get_post_meta( $post_id, 'image', true );
		$posttitle = get_the_title($post_id);
		if ($originalimage) {
			if (endsWith($originalimage, '.jpg')) {
				$largeimage = str_replace(".jpg", "-large.jpg", $originalimage);
				$mediumimage = str_replace(".jpg", "-large-square.jpg", $originalimage);
				$thumbimage = str_replace(".jpg", "-thumbnail.jpg", $originalimage);
			}
			if (endsWith($originalimage, '.gif')) {
				$largeimage = str_replace(".gif", "-large.gif", $originalimage);
				$mediumimage = str_replace(".gif", "-large-square.gif", $originalimage);
				$thumbimage = str_replace(".gif", "-thumbnail.gif", $originalimage);
			}
			switch ($size) :
        case "original" :
					$html = "<img src='" . $originalimage . "?ver=29092014b' class='img-responsive' alt='" . $posttitle . "'/></a>";
					break;
				case "large" :
					$html = "<img src='" . $largeimage . "' class='img-responsive' alt='" . $posttitle . "'/></a>";
					break;
				case "medium" :
					$html = "<img src='" . $mediumimage . "' class='img-responsive' alt='" . $posttitle . "'/></a>";
					break;
				case "thumbnail" :
					$html = "<img src='" . $thumbimage . "' alt='" . $posttitle . "'/></a>";
					break;
				default :
					$html = "<img src='" . $thumbimage . "' class='img-responsive' />";
			endswitch;			
		}
		else {
			switch ($size) :			
				case "medium" :
					$html = "<img src='http://images.tothtamas.tt/boy-large-square.jpg' class='front' /></a>";
					break;
				case "thumbnail" :
					$html = "<img src='http://images.tothtamas.tt/boy-thumbnail.jpg' class='front' /></a>";
					break;
				default :
					$html = "<img src='http://images.tothtamas.tt/boy-thumbnail.jpg' class='front' /></a>";
			endswitch;		
		}
	}
    return $html;
}



// admin column post thumbnail
add_filter( 'manage_edit-post_columns', 'my_columns_filter', 10, 1 );
function my_columns_filter( $columns ) {
 	$column_thumbnail = array( 'thumbnail' => 'Featured image' );
	$columns = array_slice( $columns, 0, 1, true ) + array_slice( $columns, 1, NULL, true ) + $column_thumbnail;
	return $columns;
}

add_action( 'manage_posts_custom_column', 'my_column_action', 10, 1 );
function my_column_action( $column ) {
	global $post;
	echo get_the_post_thumbnail( $post->ID, 'thumbnail' );
}



// consistent avatar size
add_filter('get_avatar','my_wp_list_comments',5,4);
function my_wp_list_comments($avatar, $id_or_email, $size, $default) {
	return $avatar;
}



// deferred scipt loading
// http://stackoverflow.com/questions/18944027/how-do-i-defer-or-async-this-wordpress-javascript-snippet-to-load-lastly-for-fas
function add_defer_forscript($url)
{
    if (strpos($url, '#deferload')===false)
        return $url;
    else if (is_admin())
        return str_replace('#deferload', '', $url);
    else
        return str_replace('#deferload', '', $url)."' defer='defer"; 
}
add_filter('clean_url', 'add_defer_forscript', 11, 1);

?>