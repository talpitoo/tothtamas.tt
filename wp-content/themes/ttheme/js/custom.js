//$(document).ready(function () {
//    var bodyclass = jQuery("body").attr("class").split(' ')[0];
//    if (bodyclass == "home") {}
//});

// async web fonts
WebFontConfig = {
    google: {
        families: ['Open+Sans:400italic,400,300&subset=latin,cyrillic']
    }
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