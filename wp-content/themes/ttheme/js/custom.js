function header() {
	var bodyclass = jQuery("body").attr("class").split(' ')[0];
	if (bodyclass == "home") {
		jQuery('#header').hover(function() {
			jQuery('#menu ul').show();
			jQuery(this).stop().animate({ paddingLeft: '114px'}, {queue: false, duration: 400, complete: function() {}
			})
		}, function() {
			jQuery(this).stop().animate({ paddingLeft: '0'}, function() {
				jQuery('#menu ul').hide();
			})
		});
	}
}
function navigation() {
	/*
	jQuery('#controls-wrapper').hover(function() {
		jQuery(this).stop().animate({ right: '0'}, function() {})
	}, function() {
		jQuery(this).stop().animate({ right: '-250px'}, {queue: false, duration: 400, complete: function() {} })
	});
	*/
}
$(document).ready(function() {
	header();
	//navigation();
	//jQuery('#header').css( "padding-left", "0" );
	//jQuery('#header').stop().animate({ paddingLeft: '114px'}, {queue: false, duration: 400, complete: function() {jQuery('#menu').show();}})
	
	$(window).unload(function(){
		//_gaq.push(['_trackPageview', '/outgoing/bye']);
	});
});