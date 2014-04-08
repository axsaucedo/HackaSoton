/*
	hackasoton.com
	author: Thomas Dubosc, wulty.com
*/
jQuery("document").ready(function($){
    var menuI = $("#menu");
	var headerHeight = $("#header").outerHeight();
    $(window).scroll(function () {
        if ($(this).scrollTop() > headerHeight) {
            menuI.addClass("fixed");
        } else {
            menuI.removeClass("fixed");
        }
    });
});