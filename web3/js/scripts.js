$(document).ready(function() {

// Slide  	
	if (jQuery().slides) {
	
	    $("#slides").slides({
	      preload: true,
	      preloadImage: 'img/loading.gif',
	      generateNextPrev: true,
	      pagination: false,
	      generatePagination: false,
	      play: 2500,
	      slideSpeed:'slow'
	    });
    
    };

// Smooth scrolling - css-tricks.com
	function filterPath(string){return string.replace(/^\//,'').replace(/(index|default).[a-zA-Z]{3,4}$/,'').replace(/\/$/,'');}var locationPath=filterPath(location.pathname);var scrollElem=scrollableElement('html','body');$('a[href*=#nav]').each(function(){var thisPath=filterPath(this.pathname)||locationPath;if(locationPath==thisPath&&(location.hostname==this.hostname||!this.hostname)&&this.hash.replace(/#/,'')){var $target=$(this.hash),target=this.hash;if(target){var targetOffset=$target.offset().top;$(this).click(function(event){event.preventDefault();$(scrollElem).animate({scrollTop:targetOffset},'slow',function(){location.hash=target;});});}}});function scrollableElement(els){for(var i=0,argLength=arguments.length;i<argLength;i++){var el=arguments[i],$scrollElement=$(el);if($scrollElement.scrollTop()>0){return el;}else{$scrollElement.scrollTop(1);var isScrollable=$scrollElement.scrollTop()>0;$scrollElement.scrollTop(0);if(isScrollable){return el;}}}return[];}	
	
// OPACITY
	$(".zoom").css({"opacity":0});
	$(".zoom").hover(
		function(){$(this).stop().animate({ "opacity": 0.9 }, 'slow');},
		function(){$(this).stop().animate({ "opacity": 0 }, 'fast');});
	
// CONTACT form validation 	
	if (jQuery().validate) {
	    	$("#contact_form").validate();	 
	};   

    
// END
});