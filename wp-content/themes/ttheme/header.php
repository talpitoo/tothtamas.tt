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
<meta name="application-name" content="tothtamas.tt"/>
<meta name="msapplication-TileColor" content="#000000"/>
<meta name="msapplication-square70x70logo" content="<?php bloginfo('template_url'); ?>/images/tiny.png"/>
<meta name="msapplication-square150x150logo" content="<?php bloginfo('template_url'); ?>/images/square.png"/>
<meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_url'); ?>/images/wide.png"/>
<meta name="msapplication-square310x310logo" content="<?php bloginfo('template_url'); ?>/images/large.png"/>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-57-precomposed.png">
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
</head>

<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2605668-3', 'tothtamas.tt');
  ga('send', 'pageview');

</script>
	<!-- Static navbar -->
	<div class="navbar navbar-static-top" role="navigation">
			
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