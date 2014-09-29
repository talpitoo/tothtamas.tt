// async web fonts
WebFontConfig = {
    google: { families: ['Open+Sans:400,300,400italic:latin,cyrillic'] }
};
(function () {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();



// home carousel
if ($.mobile) {
    $("#home-carousel").swiperight(function () {
        $(this).carousel('prev');
    });
    $("#home-carousel").swipeleft(function () {
        $(this).carousel('next');
    });
};



// deferred infinite scroll
// Because the `wp_localize_script` method makes everything a string
if (typeof infinite_scroll === 'undefined') {
    // variable is undefined
} else {
    infinite_scroll = jQuery.parseJSON(infinite_scroll);
    jQuery(infinite_scroll.contentSelector).infinitescroll(infinite_scroll, function (newElements, data, url) { eval(infinite_scroll.callback); });
}
