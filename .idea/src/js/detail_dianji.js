$(function () {
	$(".content-header-top ul li").find("a").on("click",function () {
		$(this).addClass("current").parent("li").siblings().children().removeClass("current");
	})
})