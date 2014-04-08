/*
	hackasoton.com
	author: Thomas Dubosc, wulty.com
*/
jQuery("document").ready(function($){
	var $root = $('html, body');
	var menuHeight = 40;
	$('a').click(function() {
		$root.animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top-menuHeight
		}, {queue: false, duration:500});
		return false;
	});
});