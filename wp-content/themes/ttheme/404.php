<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

<div id="mainpage" class="container search">
	<div class="row">
	
		<div id="content" role="main" class="span8">
			<div class="results post error404 not-found">
				<h1>.404</h1>
				<p>What are you looking for?</p>
				<img src="http://1.bp.blogspot.com/_uq8Nul3Gos4/S8YZivIeRCI/AAAAAAAAAOg/R2o1nSIZ_Eg/s1600/john112.jpg" width="600" />
				<p class="align-right">For more monsterdrawings visit <a href="http://johnkenn.blogspot.com/" onClick="javascript: _gaq.push(['_trackPageview', '/outgoing/Don Kenn']);">Don Kenn's blog.</a></p>
			</div>
		</div>
		
		<div class="span4">
		  <?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>