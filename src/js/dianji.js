$(function () {
	
	$(".imgester-nav ul li").children("a").on("click",function () {
		$(this).addClass("fang").parents("li").siblings().children("a").removeClass("fang");
		
//		console.log($(this).siblings());
	})
})