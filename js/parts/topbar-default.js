(function($) {
	$(document).ready(function() {
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
	});
})(jQuery);