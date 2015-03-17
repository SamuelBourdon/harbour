(function($) {
	$(document).ready(function() {

		// Toggle the menu on mobile 
		var menuToggle = $('#js-topbar-toggle').unbind();
		$('#primary-menu').removeClass("menu-show");

		menuToggle.on('click', function(e) {
			e.preventDefault();
			$('.main-menu').slideToggle(function(){
				if($('.main-menu').is(':hidden')) {
					$('.main-menu').removeAttr('style');
				}
			});
		});

		// Remove links to let submenu work on mobile device
		$(".menu-item-has-children > a").attr("href", "#").each();

	});
})(jQuery);