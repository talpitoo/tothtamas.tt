<?php 
/*
Template Name: Contact
*/
get_header(); ?>

<div class="container contact">
  <div class="row">
    <div class="col-md-8">
      <div class="blog-post">
        <div class="post-thumbnail">
          <img src="http://images.tothtamas.tt/portfolio/collections/singles/toth-tamas-report.jpg" alt="report" title="report" class="img-responsive"/>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="sidebar">
        <h1 class="text-uppercase">Contact</h1>
        <p>Tóth Tamás</p>
        <p>
          <a href="mailto:<?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?>
          </a>
        </p>
        <div class="row">
          <div class="col-md-4">
            <h2>
              <a href="http://expect.agency/" onmousedown="javascript: ga('send', 'pageview', '/outgoing/expect');" title="Expect" class="">Expect</a>
            </h2>
            <a href="http://expect.agency/" onmousedown="javascript: ga('send', 'pageview', '/outgoing/expect');">
              <img src="http://images.tothtamas.tt/contact/expect-thumbnail.png" alt="Expect" title="Expect" class="img-responsive noborder" />
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h2>
              <a href="https://plus.google.com/106827193783314871767?rel=author" onmousedown="javascript: ga('send', 'pageview', '/outgoing/googleplus');" title="Tamás+" class="">Tamás+</a>
            </h2>
            <a href="https://plus.google.com/106827193783314871767?rel=author" onmousedown="javascript: ga('send', 'pageview', '/outgoing/googleplus');">
              <img src="http://images.tothtamas.tt/contact/google-plus-thumbnail.png" alt="follow me on Google+" title="follow me on Google+" class="img-responsive noborder" />
            </a>
          </div>
          <div class="col-md-4">
            <h2>
              <a href="https://twitter.com/talpitoo" onmousedown="javascript: ga('send', 'pageview', '/outgoing/twitter');">@talpitoo</a>
            </h2>
            <a href="https://twitter.com/talpitoo" onmousedown="javascript: ga('send', 'pageview', '/outgoing/twitter');">
              <img src="http://images.tothtamas.tt/contact/twitter-thumbnail.png" alt="@talpitoo" title="@talpitoo" class="img-responsive noborder" />
            </a>
          </div>
          <div class="col-md-4">
            <h2>
              <a href="http://instagram.com/talpitoo" onmousedown="javascript: ga('send', 'pageview', '/outgoing/instagram');">Instagram</a>
            </h2>
            <a href="http://instagram.com/talpitoo" onmousedown="javascript: ga('send', 'pageview', '/outgoing/instagram');">
              <img src="http://images.tothtamas.tt/contact/instagram-thumbnail.png" alt="instagram" title="instagram" class="img-responsive noborder" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>