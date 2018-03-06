requirejs(["config"], function () {

    requirejs(["jquery"], function ($) {
        $(function () {
            $.ajax({
                url: "../server/getGoodsList.php",
                type: "get",
            }).then(function (res) {
                var datas = JSON.parse(res || '[]');

                for (var i = 0; i < datas.length; i++) {
                    var strHTM = "";
                    strHTM += '<div class="item">';
                    strHTM += ' <div class="pic">';
                    strHTM += ' <img src="'+datas[i]["0"].img_paht+'" alt="">';
                    strHTM += ' </div>';
                    strHTM += ' <div class="desc">';
                    strHTM += ' <div>商品名称:'+datas[i].p_name+'</div>';
                    strHTM += '<div>价格:'+datas[i].p_price+'</div>';
                    strHTM += '<div>加入购物车</div>';
                    strHTM += ' </div>';
                    strHTM += ' </div>';


                    $(".items").append(strHTM);


                }


            })


        })
    })


})