//supersized
jQuery(function ($) {
    window.onorientationchange = function () {
        window.location.reload();
    }

    var clientWidth = jQuery(window).width();
    var clientHeight = jQuery(window).height();
    var myFitPortrait = 0;
    var myFitLandscape = 0;
    if (clientWidth > clientHeight) {
        //landscape
        myFitPortrait = 1;
        myFitLandscape = 0;
    } else {
        //portrait
        myFitPortrait = 0;
        myFitLandscape = 1;
    }

    $.supersized({
        slide_interval: 6000,		// Length between transitions
        transition: 6, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        image_protect: 0,			//Disables image dragging and right click with Javascript
        image_path: myImagePath,
        slide_links: 0,
        fit_landscape: myFitLandscape,
        fit_portrait: myFitPortrait,
        slides: mySlides
    });
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