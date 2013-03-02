<?php
	/**
	 * Tests if any of a post's assigned categories are descendants of target categories
	 *
	 * @param int|array $cats The target categories. Integer ID or array of integer IDs
	 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
	 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
	 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
	 * @uses get_term_children() Passes $cats
	 * @uses in_category() Passes $_post (can be empty)
	 * @version 2.7
	 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
	 */
	 
	/*
	if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
		function post_is_in_descendant_category( $cats, $_post = null ) {
			foreach ( (array) $cats as $cat ) {
				// get_term_children() accepts integer ID only
				$descendants = get_term_children( (int) $cat, 'category' );
				if ( $descendants && in_category( $descendants, $_post ) )
					return true;
			}
			return false;
		}
	}
	
	$post = $wp_query->post;
	
	if (post_is_in_descendant_category( get_term_by( 'name', 'Bio', 'category' ) ) || in_category('bio') || in_category('alterego')) {
		include(TEMPLATEPATH.'/single-bio.php');
	}
	elseif (post_is_in_descendant_category( get_term_by( 'name', 'Portfolio', 'category' ) )) {
		include(TEMPLATEPATH.'/single-portfolio.php');
	}
	else {
	*/
		include(TEMPLATEPATH.'/single-default.php');
	/*}*/
?>