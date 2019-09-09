$(function(){
	$(window).scroll(function(){
		if($(window).width() > 992){
			if($(this).scrollTop() > 300){
				
				$(".header_search").show();
				$(".menu").hide();
				
			}
		};
	});
	$(window).scroll(function(){
		if($(window).width() > 992){
			if($(this).scrollTop() < 300){
				$(".header_search").hide();
				$(".menu").show();

			}
		};
	});
	
})