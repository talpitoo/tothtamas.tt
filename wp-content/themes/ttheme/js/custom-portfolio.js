$(document).ready(function() {
	$('.portfolio ul li.comingsoon img').after('<span class="overlay">soon</span>');
	$('.portfolio ul li.comingsoon .overlay').hide();
	$('.portfolio ul li.comingsoon a').attr("href", "javascript:");
	$(".portfolio ul li.comingsoon").hover(
		function () {
			$(this).find('.overlay').fadeIn();
		}, 
		function () {
			$(this).find('.overlay').fadeOut();
		}
	);
});