$(document).ready(function() {
	
	$('.portfolio .comingsoon img').before('<span class="overlay">soon</span>');
	$('.portfolio .comingsoon .overlay').hide();
	$('.portfolio .comingsoon a').attr("href", "javascript:");
	$(".portfolio .comingsoon").hover(
		function () {
			$(this).find('.overlay').fadeIn();
		}, 
		function () {
			$(this).find('.overlay').fadeOut();
		}
	);
	
});