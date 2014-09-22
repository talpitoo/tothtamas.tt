<?php 
/*
Template Name: Contact
*/
get_header(); ?>

<div class="container contact">
  <div class="row">
    <div class="col-md-12" role="main">
      <div class="row">
        <div class="col-md-8">
          <img src="http://images.tothtamas.tt/portfolio/collections/singles/toth-tamas-report.jpg" alt="report" title="report" class="img-responsive"/>
        </div>
        <div class="col-md-4">
          <h1 class="text-uppercase">Contact</h1>
          <p>Tóth Tamás</p>
          <p>
            <a href="mailto:"
              <?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?>
            </a>
          </p>
          <br />
          <div class="row">
            <div class="col-md-3">
              <h2>
                <a href="https://plus.google.com/106827193783314871767?rel=author" onmousedown="javascript: ga('send', 'pageview', '/outgoing/googleplus');">Tamás+</a>
              </h2>
              <a href="https://plus.google.com/106827193783314871767?rel=author" onmousedown="javascript: ga('send', 'pageview', '/outgoing/googleplus');">
                <img src="http://images.tothtamas.tt/contact/google-plus-thumbnail.png" alt="follow me on Google+" title="follow me on Google+" width="65" height="65" class="noborder" />
              </a>
            </div>
            <div class="col-md-3">
              <h2>
                <a href="https://twitter.com/talpitoo" onmousedown="javascript: ga('send', 'pageview', '/outgoing/twitter');">@talpitoo</a>
              </h2>
              <a href="https://twitter.com/talpitoo" onmousedown="javascript: ga('send', 'pageview', '/outgoing/twitter');">
                <img src="http://images.tothtamas.tt/contact/twitter-thumbnail.png" alt="@talpitoo" title="@talpitoo" width="65" height="65" class="noborder" />
              </a>
            </div>
            <div class="col-md-3">
              <h2>
                <a href="http://instagram.com/talpitoo" onmousedown="javascript: ga('send', 'pageview', '/outgoing/instagram');">Instagram</a>
              </h2>
              <a href="http://instagram.com/talpitoo" onmousedown="javascript: ga('send', 'pageview', '/outgoing/instagram');">
                <img src="http://images.tothtamas.tt/contact/instagram-thumbnail.png" alt="instagram" title="instagram" width="65" height="65" class="noborder" />
              </a>
            </div>
            <div class="col-md-3">
              <h2>
                <a href="http://expect.agency/" onmousedown="javascript: ga('send', 'pageview', '/outgoing/expect');">Expect</a>
              </h2>
              <a href="http://expect.agency/" onmousedown="javascript: ga('send', 'pageview', '/outgoing/expect');">
                <img src="http://images.tothtamas.tt/contact/expect-thumbnail.png" alt="Expect" title="Expect" width="65" height="65" class="noborder" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4">
              <h2>
                <a href="../weblog/weddings/">Weddings</a>
              </h2>
              <a href="../weblog/weddings/" >
                <img src="http://images.tothtamas.tt/weblog/weddings/toth-tamas-weddings-jelena-large-square.jpg" alt="weddings" title="weddings"  class="img-responsive"/>
              </a>
            </div>
            <div class="col-md-4">
              <h2>
                <a href="../weblog/corporate/">Corporate</a>
              </h2>
              <a href="../weblog/corporate/">
                <img src="http://images.tothtamas.tt/weblog/corporate/toth-tamas-corporate-bankers-large-square.jpg" alt="corporate" title="corporate"  class="img-responsive"/>
              </a>
            </div>
            <div class="col-md-4">
              <h2>Your story</h2>
              <img src="http://images.tothtamas.tt/portfolio/stories/madeira/toth-tamas-golf-large-square.jpg" alt="your story" title="your story"  class="img-responsive"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>