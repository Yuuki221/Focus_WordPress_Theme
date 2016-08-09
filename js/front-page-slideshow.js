jQuery(function($){
	(function($){
		$.fn.slideshow = function(options){
			options = $.extend({
				'timeout' : 3000,
				'speed' : 400 // normal
			}, options);
			// loop through the selected elements,
			return this.each(function(){
				// inside the setInterveral() block, `this` references the window object instead of the slideshow 
				// container element, 
				var $elem = $(this);
				$elem.children().eq(0).appendTo($elem).show();
				// iterate through the slides
				setInterval(function(){
					$elem.children().eq(0)
					.hide().appendTo($elem)
					.fadeIn(options.speed)
				}, options.timeout);
			});
		}
	}(jQuery));

	$('.slide-container').slideshow({
		'timeout' : 2000,
		'speed' : 300
	});
});

