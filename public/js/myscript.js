$(function(){

	// js scroll header
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
	
// js calendar
	// click minus and plus in calendar
	var num = 0;
	$('.minus').click(function(){
		var current = $('.number').attr("value");
		if(current > 0){
			$('.number').attr("value",num-1);
			num--;
		}
	})

	$('.plus').click(function(){
		$('.number').attr("value",num+1);
		num++;
	})
	arrDay = {"Mon":"Thứ hai","Tue":"Thứ ba","Wed":"Thứ tu","Thu":"Thứ năm","Fri":"Thứ sáu","Sat":"Thứ bảy","Sun":"CN"};
	$(".box-calendar").click(function(){
		$(".select_time span:first-child").text(selectDate[1]+"."+selectDate[2]+"."+selectDate[3]);
		$(".select_time span:last-child").text(arrDay[selectDate[0]]);
	})
	// show/hiden calendar
	$(".booking-calendar").click(function(){
		$(".box-calendar").toggle();
		event.stopPropagation();
	})
	$(window).click(function(event){
		$(".box-calendar").hide();

	})
});

// js calendar
window.addEventListener('load', function () {
	vanillaCalendar.init({
		disablePastDays: true
	});
})

