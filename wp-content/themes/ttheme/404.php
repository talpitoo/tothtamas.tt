<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

<div  class="container search">
  <div class="row">
    <div class="col-md-12">
      <h1>.404</h1>
    </div>
  </div>
  <div class="row">
    <div role="main" class="col-md-8">
      <div class="results post error404 not-found">
        <p>What are you looking for?</p>
        <img src="http://1.bp.blogspot.com/_uq8Nul3Gos4/S8YZivIeRCI/AAAAAAAAAOg/R2o1nSIZ_Eg/s1600/john112.jpg" class="img-responsive" />
        <p class="align-right">
          For more monsterdrawings visit <a href="http://johnkenn.blogspot.com/" onmousedown="javascript: ga('send', 'pageview', '/outgoing/Don Kenn');">Don Kenn's blog.</a>
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>