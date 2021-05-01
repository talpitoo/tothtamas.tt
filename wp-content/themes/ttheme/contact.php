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
          <div class="col-md-6">
            <h2>
              <br>
              <a href="http://expect.agency/" onmousedown="javascript: ga('send', 'pageview', '/outgoing/expect');" title="Expect" class="">Expect</a>
            </h2>
            <a href="http://expect.agency/" onmousedown="javascript: ga('send', 'pageview', '/outgoing/expect');">
              <img src="http://images.tothtamas.tt/contact/expect-medium.png" alt="Expect" title="Expect" class="img-responsive noborder" />
            </a>
          </div>
          <div class="col-md-6">
            <h2>
              <a href="http://testedonhumans.xyz/" onmousedown="javascript: ga('send', 'pageview', '/outgoing/testedonhumans');" title="Tested on humans" class="">Tested on humans</a>
            </h2>
            <a href="http://testedonhumans.xyz/" onmousedown="javascript: ga('send', 'pageview', '/outgoing/testedonhumans');">
              <img src="http://images.tothtamas.tt/contact/testedonhumans-medium.png" alt="Tested on humans" title="Tested on humans" class="img-responsive noborder" />
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h2>
              <a href="http://lapetitevackor.tumblr.com/" onmousedown="javascript: ga('send', 'pageview', '/outgoing/lapetitevackor');" title="la petite Vackor" class="">la petite Vackor</a>
            </h2>
            <a href="http://lapetitevackor.tumblr.com/" onmousedown="javascript: ga('send', 'pageview', '/outgoing/lapetitevackor');">
              <img src="http://images.tothtamas.tt/contact/lapetitevackor-medium.png" alt="la petite Vackor" title="la petite Vackor" class="img-responsive noborder" />
            </a>
          </div>
          <div class="col-md-6">
            <h2>
              <a href="http://dreamingsheep.net/" onmousedown="javascript: ga('send', 'pageview', '/outgoing/dreamingsheep');" title="dreamingsheep" class="">dreaming<wbr>sheep</a>
            </h2>
            <a href="http://dreamingsheep.net/" onmousedown="javascript: ga('send', 'pageview', '/outgoing/dreamingsheep');">
              <img src="http://images.tothtamas.tt/contact/dreamingsheep-medium.png" alt="dreamingsheep" title="dreamingsheep" class="img-responsive noborder" />
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h2>
              <a href="https://www.facebook.com/talpitoo" onmousedown="javascript: ga('send', 'pageview', '/outgoing/facebook');" title="Facebook" class="">Facebook</a>
            </h2>
            <a href="https://www.facebook.com/talpitoo" onmousedown="javascript: ga('send', 'pageview', '/outgoing/facebook');">
              <img src="http://images.tothtamas.tt/contact/facebook-thumbnail.png" alt="Facebook" title="Facebook" class="img-responsive noborder" />
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
