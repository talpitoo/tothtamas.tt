<?php 
/*
Template Name: Contact
*/
get_header(); ?>


<div id="mainpage" class="contact">
	<div class="page_content">
    	<div id="content">
			<div class="column two-thirds">
				<img src="http://images.tothtamas.tt/portfolio/collections/singles/toth-tamas-report-large-square.jpg" alt="report" title="report" width="400" height="400" />
			</div>
			<div class="column one-third">
				<h2>Contact</h2>
				<p class="size14">Tóth Tamás</p>
				<p class="size14"><a href="mailto:<?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?></a></p>
				<p class="size14">+381 64 2419645</p>
			</div>
			<div class="column one-third">
				<h3><a href="../weblog/weddings/" class="noborder">Weddings</a></h3>
				<a href="../weblog/weddings/" class="noborder"><img src="http://images.tothtamas.tt/weblog/weddings/toth-tamas-weddings-jelena-medium.jpg" alt="weddings" title="weddings" width="180" height="180" /></a>
			</div>
			<div class="clearAll"></div>
			<div class="column one-third">
				<h3><a href="https://plus.google.com/106827193783314871767?rel=author" class="noborder" onClick="javascript: _gaq.push(['_trackPageview', '/outgoing/googleplus']);">Tamás+</a></h3>
				<a href="https://plus.google.com/106827193783314871767?rel=author" class="noborder" onClick="javascript: _gaq.push(['_trackPageview', '/outgoing/googleplus']);"><img src="http://images.tothtamas.tt/contact/google-plus-medium.png" alt="follow me on Google+" title="follow me on Google+" width="180" height="180" class="noborder" /></a>
			</div>
			<div class="column one-third">
			</div>
			<div class="column one-third">
				<h3><a href="../weblog/corporate/" class="noborder">Corporate</a></h3>
				<a href="../weblog/corporate/" class="noborder"><img src="http://images.tothtamas.tt/weblog/corporate/toth-tamas-corporate-bankers-medium.jpg" alt="corporate" title="corporate" width="180" height="180" /></a>
			</div>
			<div class="clearAll"></div>
			<div class="column two-thirds">
			</div>
			<div class="column one-third">
				<h3>Your story</h3>
				<img src="http://images.tothtamas.tt/portfolio/stories/madeira/toth-tamas-golf-medium.jpg" alt="your story" title="your story" width="180" height="180" class="bottom20"/>
				<p>If you like these photos and would like to have your story shot in a similar style, feel free to contact me about any kind of project.</p>
				<h2><a href="mailto:<?php bloginfo('admin_email'); ?>">Book me &rsaquo;</a></h2>
			</div>
			<div class="clearAll"></div>
        </div>
	</div>
	<div id="site-generator">
		<?php include(TEMPLATEPATH.'/poweredby.php'); ?>
	</div>
</div>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>