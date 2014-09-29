<script>
    // load css async https://github.com/filamentgroup/loadCSS
    var ss = window.document.createElement("link");
    var ref = window.document.getElementsByTagName("noscript")[0];
    ss.rel = "stylesheet";
    ss.href = "<?php bloginfo('template_url'); ?>/css/minify.css?ver=29092014b";
    ss.media = "only x";
    ref.parentNode.insertBefore(ss, ref);
    setTimeout(function () {
        ss.media = "all";
    });
</script>
	
<?php
  // wp_enqueue_script('bootstrap', TTBLOG_JS . '/bootstrap.min.js#deferload', array( 'jquery' ));
  // wp_enqueue_script('jquerymobile', TTBLOG_JS . '/jquery.mobile.custom.min.js#deferload');
  // wp_enqueue_script('custom', TTBLOG_JS . '/custom.js#deferload', array( 'jquery' ));
  wp_enqueue_script('minify', TTBLOG_JS . '/minify.js#deferload', array( 'jquery' ));
  ?>

  <?php
  wp_footer();  
?>
</body>
</html>
