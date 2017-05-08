<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php global $page, $paged; $version="?ver=29092014b" ; wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?>
    </title>
    <meta name="description" content="<?php $site_description = get_bloginfo( 'description', 'display' ); echo " $site_description "; ?>" />
    <meta name="author" content="@talpitoo">
    <meta name="viewport" content="width=device-width; initial-scale=1;" />
    <?php if(is_single( array( '1993') ) || is_page( array( 'rear-window', '1993') ) ): $noindex=true; endif; ?>
    <?php if($noindex): ?>
      <meta name="robots" content="noindex,nofollow">
    <?php endif; ?>

    <!-- <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?>" />
    <meta property="og:description" content="<?php $site_description = get_bloginfo( 'description', 'display' ); echo " $site_description "; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://tothtamas.tt/" />
    <meta property="og:image" content="http://photto.org/images/toth-tamas-tt.jpg" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="400">
    <meta property="og:image:height" content="267">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@talpitoo">
    <meta name="twitter:creator" content="@talpitoo">
    <meta name="twitter:title" content="<?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?>">
    <meta name="twitter:description" content="<?php $site_description = get_bloginfo( 'description', 'display' ); echo " $site_description "; ?>"> -->

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <meta name="application-name" content="tothtamas.tt" />
    <meta name="msapplication-TileColor" content="#000000" />
    <meta name="msapplication-square70x70logo" content="<?php bloginfo('template_url'); ?>/images/tiny.png" />
    <meta name="msapplication-square150x150logo" content="<?php bloginfo('template_url'); ?>/images/square.png" />
    <meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_url'); ?>/images/wide.png" />
    <meta name="msapplication-square310x310logo" content="<?php bloginfo('template_url'); ?>/images/large.png" />

    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-152-precomposed.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-120-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-76-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-60-precomposed.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-57-precomposed.png">

    <link rel="icon" sizes="196x196" href="<?php bloginfo('template_url'); ?>/images/cover196x196.png" type="image/png">
    <link rel="icon" sizes="160x160" href="<?php bloginfo('template_url'); ?>/images/cover160x160.png" type="image/png">
    <link rel="icon" sizes="96x96" href="<?php bloginfo('template_url'); ?>/images/cover96x96.png" type="image/png">
    <link rel="icon" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/cover32x32.png" type="image/png">
    <link rel="shortcut icon" sizes="16x16" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

	<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	 wp_deregister_script( 'jquery' );
	 wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js#deferload' );
	 wp_enqueue_script( 'jquery' );
	 wp_head();
	 ?>

    <!-- inline critical css -->
    <style>
		*{box-sizing:border-box}.bloginfo-description,.bloginfo-description a{border:medium none;color:#000;font-size:0;line-height:0;margin:0}.hide{display:none!important}.sr-only{border:0 none;clip:rect(0px,0px,0px,0px);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.noborder{border:medium none!important}body{font-family:"Open Sans","Segoe UI",Roboto,"Droid Sans","Helvetica Neue",Arial,sans-serifs;background:#1f1f1f;color:#fff;font-size:15px;margin:0}a{color:#c3c2c2;text-decoration:none}a:hover,a:focus{text-decoration:none;color:#c3c2c2}h1,h2,h3,h4,h5,h6{font-weight:300}.weblog h1,.search h1,.contact h1,.portfolio h1{margin-bottom:40px}blockquote{padding-left:36px;border:0;background:url(../images/blockquote.png?ver=29092014b) no-repeat 0 0;margin:0;font-style:italic}.blog-post ul,.blog-post ol{margin-left:40px}.noborder{border:none!important}.navbar{background:transparent;border:0;margin-bottom:20px;min-height:78px;position:relative;z-index:1000}.navbar-default .navbar-brand,.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{float:left;text-indent:-9999px;width:190px;height:78px;padding:0;margin:0;background:url(<?php bloginfo('template_url');?>/images/logo.png?ver=29092014b) no-repeat center center;background-color:black;background-size:100%}.navbar .nav{float:none;margin:0 221px 0 0;background:black;padding-left:0}.navbar .nav:before,.navbar .nav:after{display:table;content:" "}.navbar .nav:after{clear:both}.navbar-toggle{background-image:none;border-radius:4px;float:right;margin-bottom:8px;margin-right:15px;margin-top:8px;padding:9px 10px;left:auto}.navbar-toggle{position:relative;top:auto;left:auto;display:none}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-toggle .icon-bar{border-radius:1px;display:block;height:2px;width:22px}.navbar-default .navbar-toggle,.navbar-default .navbar-toggle:hover,.navbar-default .navbar-toggle:focus{border:0;background-color:transparent;top:15px;right:20px}.navbar-toggle:hover .icon-bar,.navbar-toggle:focus .icon-bar{background-color:#333}.navbar-collapse{border:0;box-shadow:none}.navbar-collapse.collapse{height:auto;overflow:hidden!important;background:transparent url(<?php bloginfo('template_url');?>/images/perforation-horizontal.png?ver=29092014b) no-repeat right bottom}.bloginfo-description,.bloginfo-description a{font-size:0;line-height:0;color:#000;margin:0;border:0}.triangle{background:transparent url(<?php bloginfo('template_url');?>/images/triangle-horizontal.png?ver=29092014b) no-repeat left bottom;height:78px;width:30px;float:left}.nav li a{text-transform:uppercase;font-size:19px;padding:0 15px;height:78px;line-height:78px;display:block;position:relative}.navbar-nav>li{float:left}.nav>li{display:block;position:relative}.navbar-default .navbar-nav>li>a{color:#777}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media(min-width:768px){.container;{width:750px}}@media(min-width:992px){.container;{width:970px}}@media(min-width:1200px){.container;{width:1170px}}.img-responsive{display:block;height:auto;max-width:100%}h1,.h1,h2,.h2,h3,.h3{margin-bottom:10px;margin-top:20px}h1{font-size:36px}.contact h2,.portfolio h2{font-size:18px;line-height:24px}.text-uppercase{text-transform:uppercase}.contact{padding-top:30px}.carousel,.carousel-inner,.carousel-inner>.item{position:absolute;width:100%;top:0;bottom:0;background-position:center center;background-size:115% auto;background-repeat:no-repeat;transform:translateZ(0deg)}.carousel-control,.carousel-caption{display:none}@media screen and (max-width:979px){.navbar-collapse{overflow-x:visible;padding-left:15px;padding-right:15px}.collapse{display:none}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}.navbar-brand,.navbar .nav,.navbar .nav>li{float:none}.navbar-toggle{position:absolute;display:block}.navbar-collapse.collapse{height:0!important}.navbar-collapse.collapse.in{height:auto!important}.triangle{display:none}.navbar .nav{margin:0;background:transparent;padding:0 0 30px 0}.navbar .nav li{background:black}.navbar .nav li a{height:auto;line-height:normal!important;padding:10px 35px!important}.navbar{background-color:#000}.navbar-header{float:none}}@media screen and (max-width:767px){.navbar .nav li a{padding:10px 20px!important}h1{margin-top:10px}.carousel-control{display:none}.carousel-caption{width:100%;left:0;bottom:0}.carousel-indicators{bottom:10px}label{display:block;margin:0}textarea,input[type="text"]{width:100%}[class*="col-"]{padding-left:30px;padding-right:30px}[class*="col-"] [class*="col-"]{padding-left:15px;padding-right:15px}.simplesocialbuttons{margin:50px 0 100px 0!important}.simplesocialbutton{margin-bottom:10px;float:none!important}.ssb-button-googleplus{margin-bottom:5px}}@media screen and (max-width:480px){.carousel-inner>.item{background-position:center 78px}}
    </style>

    <!-- development css -->
    <!-- <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css<?php echo $version ?>" rel="stylesheet" /> -->
	<!-- <link href="<?php bloginfo('template_url'); ?>/css/ttheme.css<?php echo $version ?>" rel="stylesheet" /> -->

	<noscript>
        <link href="<?php bloginfo('template_url'); ?>/css/minify.css<?php echo $version ?>" rel="stylesheet" />
    </noscript>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="google-site-verification" content="UMA_UoKpWCmvqY7BNPSv6Ba2qGNUWm8_RS4f6XLz06w" />
	<link rel="dns-prefetch" href="http://images.tothtamas.tt">
</head>

<body <?php body_class(); ?>>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-2605668-3', 'tothtamas.tt');
        ga('send', 'pageview');
    </script>


    <div role="navigation" class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo home_url(); ?>" class="navbar-brand noborder">
                <?php echo get_bloginfo( 'name'); ?>
            </a>
        </div>
        <div class="triangle"></div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <?php wp_nav_menu( array( 'theme_location'=>'primary-menu', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>

    <h2 class="bloginfo-description hide"><?php echo get_bloginfo('description'); ?></h2>
    <img src="http://photto.org/images/toth-tamas-tt.jpg" alt="tothtamas.tt" class="hide">
    <p class="hide">powered by <a href="https://plus.google.com/106827193783314871767?rel=author">Tamás Tóth</a>
    </p>
