$(function () {
	var i=0;
	setInterval(function () {
		if(i>3){
			i=0;
		}
		i++;
		$("#datu li:eq("+i+")").show(50).siblings().hide(50);
	},2000)
})