<?php

header("Content-type:JSON;charset=utf-8");  //统一输出编码为utf-8
header("Access-Control-Allow-Origin:*");//允许跨域

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/6
 * Time: 9:48
 */

//注册使用 post请求

//if ($_SERVER["REQUEST_METHOD"] == "POST") {

$u_telphone = $_REQUEST["u_telphone"];

//1.开始创建链接
$DBSERVER = "127.0.0.1";
$ROOTNAME = "root";
$ROOTPWD = "";
$DABASE = "zouxiunet";
$conn = new mysqli($DBSERVER, $ROOTNAME, $ROOTPWD, $DABASE);
//2.设置链接的字符串集
mysqli_query($conn,"set names utf8");
//3.准备sql语句
$sql = "SELECT*FROM userinfo WHERE u_telphone='".$u_telphone ."'";

$result = $conn->query($sql);
if ($result->num_rows== 1) {
    print_r(json_encode(false));
} else {
    print_r(json_encode(true));
}


//4.关闭数据的链接
$conn->close();

//}