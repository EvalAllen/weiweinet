<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS 过渡</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .items {
            width: 1250px;
            height: 320px;
            padding-left: 20px;
            margin: 80px auto;
        }

        .item {
            width: 230px;
            height: 300px;
            text-align: center;
            margin-right: 20px;
            background-color: #fff;
            float: left;
            position: relative;
            top: 0;
            overflow: hidden;
            transition: all .5s;
        }

        .pic {
            margin-top: 30px;
        }

        .desc {
            position: absolute;
            bottom: -100px;
            width: 100%;
            height: 100px;
            background-color: #ff6700;
            transition: all .5s;
        }

        .desc div {
            color: white;
        }

        .item:hover {
            top: -5px;
            box-shadow: 0 0 15px #aaa;
        }

        .item:hover .desc {
            bottom: 0;
        }
    </style>
    <script src="js/lib/require.js" data-main="js/main"></script>

</head>

<body>
<?php
session_start();
//不是空的 session 就能输出当前的session内容
if (!empty($_SESSION["USER"])) {
    $row = $_SESSION["USER"];
    $str = "当前的登陆者：<a href='javascript:void(0)'>" . $row["u_name"] . "</a>";
    $str .= " <a href='javascript:void(0)'>退出登陆</a>";
    print_r($str);
} else {
    print_r("您还没登陆");
}
?>


<div class="items">
    <div class="item">
        <img src="./images/1.jpg" alt="">
    </div>




</div>
</body>
</html>


<script>
window.onload=function (ev) {
    if(  document.querySelectorAll("a").length>0){
        document.querySelectorAll("a")[1].onclick = function (ev) {
            if (confirm("您确定要退出登陆吗?")) {
                window.location.assign("quit.php");
            }
        }
    }
}
</script>

