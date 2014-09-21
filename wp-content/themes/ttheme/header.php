<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php global $page, $paged; $version="?ver21092014" ; wp_title( '|', true, 'right' ); ?>
    </title>
    <meta name="description" content="<?php $site_description = get_bloginfo( 'description', 'display' ); echo " $site_description "; ?>" />
    <meta name="author" content="@talpitoo">
    <meta name="viewport" content="width=device-width; initial-scale=1.0;" />

    <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" />
    <meta property="og:description" content="<?php $site_description = get_bloginfo( 'description', 'display' ); echo " $site_description "; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://tothtamas.tt/" />
    <meta property="og:image" content="http://expect.agency/img/cover1600x1300.png?ver=21092014" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1600">
    <meta property="og:image:height" content="1300">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@talpitoo">
    <meta name="twitter:creator" content="@talpitoo">
    <meta name="twitter:title" content="<?php wp_title( '|', true, 'right' ); ?>">
    <meta name="twitter:description" content="<?php $site_description = get_bloginfo( 'description', 'display' ); echo " $site_description "; ?>">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <meta name="application-name" content="tothtamas.tt" />
    <meta name="msapplication-TileColor" content="#000000" />
    <meta name="msapplication-square70x70logo" content="<?php bloginfo('template_url'); ?>/images/tiny.png" />
    <meta name="msapplication-square150x150logo" content="<?php bloginfo('template_url'); ?>/images/square.png" />
    <meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_url'); ?>/images/wide.png" />
    <meta name="msapplication-square310x310logo" content="<?php bloginfo('template_url'); ?>/images/large.png" />

    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152-precomposed.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-touch-icon-60-precomposed.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-57-precomposed.png">

    <link rel="icon" sizes="196x196" href="img/cover196x196.png" type="image/png">
    <link rel="icon" sizes="160x160" href="img/cover160x160.png" type="image/png">
    <link rel="icon" sizes="96x96" href="img/cover96x96.png" type="image/png">
    <link rel="icon" sizes="32x32" href="img/cover32x32.png" type="image/png">
    <link rel="shortcut icon" sizes="16x16" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

    <!-- inline critical css -->
    <style>
    </style>
    <!-- development css -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap-customized.css<?php echo $version ?>" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/css/supersized.css<?php echo $version ?>" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_url'); ?><?php echo $version ?>" rel="stylesheet" />
    <!-- production css, merge&minify the above css -->
    <!--<link rel="stylesheet" href="css/minify.css?ver=21092014">-->
    <noscript>
        <link rel="stylesheet" href="css/minify.css?ver=21092014">
    </noscript>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="google-site-verification" content="UMA_UoKpWCmvqY7BNPSv6Ba2qGNUWm8_RS4f6XLz06w" />
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