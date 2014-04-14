<?php 
/*
Template Name: Contact
*/
get_header(); ?>


<div id="mainpage" class="container contact">
  <div class="row">
    <div id="content" class="span12">
      <div class="row">
        <div class="span9 post_thumbnail">
          <img src="http://images.tothtamas.tt/portfolio/collections/singles/toth-tamas-report-large.jpg" alt="report" title="report" />
        </div>
        <div class="span3">
          <h1>Contact</h1>
          <p>Tóth Tamás</p>
          <p>
            <a href="mailto:<?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?>
            </a>
          </p>
          <p>&nbsp;</p>
          <h2>
            <a href="https://plus.google.com/106827193783314871767?rel=author" class="noborder" onmousedown="javascript: ga('send', 'pageview', '/outgoing/googleplus');">Tamás+</a>
          </h2>
          <a href="https://plus.google.com/106827193783314871767?rel=author" class="noborder" onmousedown="javascript: ga('send', 'pageview', '/outgoing/googleplus');">
            <img src="http://images.tothtamas.tt/contact/google-plus-thumbnail.png" alt="follow me on Google+" title="follow me on Google+" width="65" height="65" class="noborder" />
          </a>
          <h2 class="lowercase">
            <a href="https://twitter.com/talpitoo" class="noborder" onmousedown="javascript: ga('send', 'pageview', '/outgoing/twitter');">@talpitoo</a>
          </h2>
          <a href="https://twitter.com/talpitoo" class="noborder" onmousedown="javascript: ga('send', 'pageview', '/outgoing/twitter');">
            <img src="http://images.tothtamas.tt/contact/twitter-thumbnail.png" alt="@talpitoo" title="@talpitoo" width="65" height="65" class="noborder" />
          </a>
		  <h2>
            <a href="http://instagram.com/talpitoo" class="noborder" onmousedown="javascript: ga('send', 'pageview', '/outgoing/instagram');">Instagram</a>
          </h2>
          <a href="http://instagram.com/talpitoo" class="noborder" onmousedown="javascript: ga('send', 'pageview', '/outgoing/instagram');">
            <img src="http://images.tothtamas.tt/contact/instagram-thumbnail.png" alt="instagram" title="instagram" width="65" height="65" class="noborder" />
          </a>
        </div>
      </div>

      <div class="row">
        <div class="span3">
          <h2>
            <a href="../weblog/weddings/" class="noborder">Weddings</a>
          </h2>
          <a href="../weblog/weddings/" class="noborder">
            <img src="http://images.tothtamas.tt/weblog/weddings/toth-tamas-weddings-jelena-large-square.jpg" alt="weddings" title="weddings"  />
          </a>
        </div>

        <div class="span3">
          <h2>
            <a href="../weblog/corporate/" class="noborder">Corporate</a>
          </h2>
          <a href="../weblog/corporate/" class="noborder">
            <img src="http://images.tothtamas.tt/weblog/corporate/toth-tamas-corporate-bankers-large-square.jpg" alt="corporate" title="corporate"  />
          </a>
        </div>

        <div class="span3">
          <h2>Your story</h2>
          <img src="http://images.tothtamas.tt/portfolio/stories/madeira/toth-tamas-golf-large-square.jpg" alt="your story" title="your story"  class="bottom20"/>
        </div>

        <div class="span3">
          <h2>&nbsp;</h2>
          <p>
            If you like these photos and would like to have your story shot in a similar style, feel free to <a href="mailto:<?php bloginfo('admin_email'); ?>">contact me</a> about any kind of project.
          </p>
        </div>
      </div>


    </div>
  </div>
</div>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>