$(function(){

	// js scroll header
	$(window).scroll(function(){
		if($(window).width() > 992){
			if($(this).scrollTop() > 300){
				$(".header_search").show();
				$(".menu").hide();
				
			};
			if($(this).scrollTop() < 300){
				$(".header_search").hide();
				$(".menu").show();
			};
		};
	// scroll content
	// title area 
	if($(this).scrollTop() > 1){
		$(".title_content:nth-child(1)").addClass("move_title_area");
	}else if($(this).scrollTop() < 10){
		$(".title_content:nth-child(1)").removeClass("move_title_area");
		
	}
});

// click minus and plus booking
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
	});	
// js calendar
	var date = new Date();
	var currentDate = [date.getDay(),date.getDate()+1,date.getMonth(),date.getFullYear()];
	arrDay = {"Mon":"Thứ hai","Tue":"Thứ ba","Wed":"Thứ tu","Thu":"Thứ năm","Fri":"Thứ sáu","Sat":"Thứ bảy","Sun":"CN"};
	arrCurrentDay = {"1":"Thứ hai","2":"Thứ ba","3":"Thứ tu","4":"Thứ năm","5":"Thứ sáu","6":"Thứ bảy","0":"CN"};
	$(".select_time span:first-child").text(currentDate[1]+"."+currentDate[2]+"."+currentDate[3]);
	$(".select_time span:last-child").text(arrCurrentDay[currentDate[0]]);
	
	$(".box-calendar").click(function(){
		$(".select_time span:first-child").text(selectDate[1]+"."+selectDate[2]+"."+selectDate[3]);
		$(".select_time span:last-child").text(arrDay[selectDate[0]]);
	});
	// show/hiden calendar
	$(".booking-calendar,.box_time_header .input-group").click(function(){
		$(".box-calendar").toggle();
		event.stopPropagation();
	});

	$(".box-calendar").click(function(){
		event.stopPropagation();		
	});

	$(window).click(function(event){
		$(".box-calendar").hide();
	});

	
});

// js calendar
window.addEventListener('load', function () {
	vanillaCalendar.init({
		disablePastDays: true
	});
})

