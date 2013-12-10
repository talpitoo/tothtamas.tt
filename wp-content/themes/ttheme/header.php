<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
	<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	$version = "?v2.1";

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );
	?>
</title>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
<meta name="description" content="<?php
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	//if ( $site_description && ( is_home() || is_front_page() ) )
		echo "$site_description";
	?>" />

<style type="text/css" media="screen">
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600&subset=latin,cyrillic);
@import url( <?php bloginfo('template_url'); ?>/css/bootstrap.css );
@import url( <?php bloginfo('template_url'); ?>/css/supersized.css<?php echo $version ?> );
@import url( <?php bloginfo('stylesheet_url');?><?php echo $version ?> );
</style>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<meta name="google-site-verification" content="UMA_UoKpWCmvqY7BNPSv6Ba2qGNUWm8_RS4f6XLz06w" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2605668-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body <?php body_class(); ?>>
	<!-- Static navbar -->
	<div class="navbar navbar-static-top">
			
			<a href="<?php echo home_url(); ?>" class="navbar-brand noborder"><?php echo get_bloginfo('name'); ?></a>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="triangle"></div>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li><a href="<?php echo home_url(); ?>">Home</a></li>
					<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
				</ul>
			</div><!--/.nav-collapse -->
		
	</div>
	<h2 class="bloginfo-description hide"><?php echo get_bloginfo('description'); ?></h2>
	<img src="http://photto.org/images/toth-tamas-tt.jpg" alt="tothtamas.tt" class="hide">
	<p class="hide">powered by <a href="https://plus.google.com/106827193783314871767?rel=author">Tamás Tóth</a></p>