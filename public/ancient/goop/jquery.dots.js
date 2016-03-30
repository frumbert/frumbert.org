 (function($) { 
	var defaults = {
		total : 10,
		fill: "#000000"
	};
	$.dots = function(settings) {
		$.dots.settings = $.extend({}, defaults, settings);
		for (i = 0; i < $.dots.settings.total; i++) $.dots.zip($.dots.create());
		return;
	};
	$.dots.create = function(){
	 	var z = $.dots.random(3);
	 	return $('<div />').css({
	 			width: z,
	 			height: z,
	 			"background-color": $.dots.settings.fill,
	 			position: "absolute",
				"z-index": -1,
				top: $.dots.random(($(window).height()-50))
				left:  $.dots.random(($(window).width()-50))
	 		}).appendTo(document.body);
	}
	$.dots.zip = function(sp) {
		$(sp).animate({
			top: $.dots.random(($(window).height()-50)),
			left: $.dots.random(($(window).width()-50))
		}, (($.dots.random(10) + 5) * 2000), function() {
			$.dots.zip(sp)
		});
	};
	$.dots.random = function(max) {
		return Math.ceil(Math.random() * max) - 1;
	}
		
})(jQuery);

