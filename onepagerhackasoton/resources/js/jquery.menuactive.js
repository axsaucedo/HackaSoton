/*
	hackasoton.com
	author: Thomas Dubosc, wulty.com
*/
jQuery("document").ready(function($){
	var menuI = $("#menu");
	var beforeHeight = 0;
	var menuHeight = menuI.outerHeight()+beforeHeight;
	var menuLinks = menuI.find("a");
	var blockItems = menuLinks.map(function(){
			var item = $($(this).attr("href"));
			if(item.length!=0){
				return item;
			}
		});

	$(window).scroll(function(){
		var fromTop = $(this).scrollTop()+menuHeight;
		var c = blockItems.map(function(){
				if ($(this).offset().top < fromTop)
				return this;
			});
		c = c[c.length-1];
		var id = c && c.length ? c[0].id : "";
		menuLinks.parent().removeClass("active").end().filter("[href=#"+id+"]").parent().addClass("active");
	});
});