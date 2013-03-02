<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );
	?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
<meta name="description" content="<?php
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	//if ( $site_description && ( is_home() || is_front_page() ) )
		echo "$site_description";
	?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />

<style type="text/css" media="screen">
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700&subset=latin,cyrillic);
@import url( <?php bloginfo('template_url'); ?>/css/supersized.css );
@import url( <?php bloginfo('stylesheet_url');?> );
</style>

<!--[if IE 7]>
<style type="text/css">
@import url(<?php bloginfo('template_url'); ?>/style/ie7style.css);
</style>
<![endif]-->
<!--[if IE 8]>
<style type="text/css">
@import url(<?php bloginfo('template_url'); ?>/style/ie8style.css);
</style>
<![endif]-->
<!--[if IE 9]>
<style type="text/css">
@import url(<?php bloginfo('template_url'); ?>/style/ie9style.css);
</style>
<![endif]-->

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('custom', TTBLOG_JS . '/custom.js');
	if (is_home() || is_category() && !is_category('Weblog') && !is_category('Portfolio') && !is_category('Collections') && !is_category('Stories') && !is_category('Bio') && !is_category('Testimonials') && !is_category('Influences')) {
		wp_enqueue_script('supersized', TTBLOG_JS . '/supersized.3.1.3.js');
	}
	if (is_category('Portfolio')) {
		wp_enqueue_script('custom-portfolio', TTBLOG_JS . '/custom-portfolio.js');
	}
?>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<meta name="google-site-verification" content="UMA_UoKpWCmvqY7BNPSv6Ba2qGNUWm8_RS4f6XLz06w" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2605668-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body <?php body_class(); ?>>
<h1 id="logo">
	<a href="<?php echo home_url(); ?>" class="noborder"><?php echo get_bloginfo('name'); ?></a>
</h1>

<div id="header">
	<h2 class="bloginfo-description"><?php echo get_bloginfo('description'); ?></h2>
	<img src="http://photto.org/images/toth-tamas-tt.jpg" name="tt" alt="tothtamas.tt" style="position: absolute; left: -10000px;">
	<p class="bloginfo-description">powered by <a href="https://plus.google.com/106827193783314871767?rel=author">Tamás Tóth</a></p>
	<table border="0" cellspacing="0" cellpadding="0" height="100%">
		<tr>
		  <td height="125">
			<div class="triangle"></div>
		  </td>
		</tr>
		<tr>
		  <td class="stretch">
			<div id="menu">
				<ul id="menu-navigation" class="menu">
					<li class="first"><a href="<?php echo home_url(); ?>">Home</a></li>
					<?php if ( has_nav_menu( 'primary-menu' ) ) { /* if menu location 'primary-menu' exists then use custom menu */ ?>
						<?php //wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'menu', 'container' => 'ul' ) ); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'items_wrap' => '%3$s' ) ); ?>
					<?php } else { /* else use wp_list_pages */ ?>
						<?php wp_list_pages( array('title_li' => '')); ?>
				</ul>
				<?php } ?>
			</div>
		  </td>
		</tr>
		<tr>
		  <td height="213">
			<div class="perforation"></div>
		  </td>
		</tr>
  </table>
</div>