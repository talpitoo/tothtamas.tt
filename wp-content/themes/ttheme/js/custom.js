// home carousel
$("#home-carousel").swiperight(function () {
    $(this).carousel('prev');
});
$("#home-carousel").swipeleft(function () {
    $(this).carousel('next');
});

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