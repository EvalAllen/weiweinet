$().ready(function(){
    //可任意选择你想延迟加载的目标元素，例如直接使用样式名lazy作为选择条件
    $("img").lazyload({
         placeholder : "img/grey.gif", //占位图
         effect: "fadeIn", // 加载效果
         threshold: 200, // 提前加载
         event: 'click',  // trigger
         container: $("#container"),  //指定容器
         failurelimit : 5 // 发生混乱时的hack手段
    })
})