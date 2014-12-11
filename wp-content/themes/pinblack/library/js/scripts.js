(function($){

	var $pinblack_container = $('#boxes'),
		loading	= $('#loading');
	$pinblack_container.imagesLoaded(function(){
		$pinblack_container.masonry({
			itemSelector : '.item',
			isFitWidth: 'true'
		});

		loading.css({'display':'none'});
	});
	
	/* prepend menu icon */
	$('div.menu').prepend('<div id="menu-icon">Menu</div>');
	
	/* toggle nav */
	$("#menu-icon").on("click", function(){
		$("div.menu ul").slideToggle();
		$(this).toggleClass("active");
	});
	
})(jQuery);