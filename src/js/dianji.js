$(function () {
	
	$(".imgester-nav ul li").children("a").on("click",function () {
		$(this).addClass("fang").parents("li").siblings().children("a").removeClass("fang");
		
//		console.log($(this).siblings());
	})
	
	$(".left-layout .tabs-nav").find("li").on("mouseenter",function () {
		$(this).addClass("tabs-selected").siblings().removeClass("tabs-selected");
	})
	
	$(".tu-wrap #dianji").find("li:eq(2)").on("mouseenter",function () {
		$(this).parent().find(".none-mss").show(500).on("mouseenter",function () {
			$(this).show();
		}).on("mouseleave",function () {
			$(this).hide(500);
		})
		
		$(this).on("mouseleave",function () {
			$(this).parent().find(".none-mss").hide();
		})
	})
	
	$(".tu-wrap #dianji").find("li:eq(1)").on("mouseenter",function () {
		$(this).parent().find(".none-mss").show(500).on("mouseenter",function () {
			$(this).show();
		}).on("mouseleave",function () {
			$(this).hide(500);
		})
		
		$(this).on("mouseleave",function () {
			$(this).parent().find(".none-mss").hide();
		})
	})
	

})