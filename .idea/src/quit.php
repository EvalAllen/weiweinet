<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/6
 * Time: 14:33
 */

session_start();
//如果session不是空的，我就把session设置成为空的
if (!empty($_SESSION["USER"])) {
    $_SESSION["USER"]=null;
    //再服务的输出已经js代码 输出的js代码会立即执行，它就会跳转到登陆页面
    print_r("<script>window.location.href='login.html' </script>");
}
?>
</body>
</html>