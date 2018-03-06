<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/6
 * Time: 9:48
 */

//注册使用 post请求

//if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $u_name = $_REQUEST["u_name"];
    $u_pwd = $_REQUEST["u_pwd"];

    //1.开始创建链接
    $DBSERVER = "127.0.0.1";
    $ROOTNAME = "root";
    $ROOTPWD = "";
    $DABASE = "zouxiunet";
    $conn = new mysqli($DBSERVER, $ROOTNAME, $ROOTPWD, $DABASE);
    //2.设置链接的字符串集
    mysqli_query($conn,"set names utf8");
    //3.准备sql语句
    $sql = "INSERT INTO userinfo(`u_name`,`u_pwd`)
  VALUES ('".$u_name."','".$u_pwd."')";

    $result = $conn->query($sql);
    $arr = array();
    if ($result == 1) {
        $arr = array("status" => 1, "msg" => "注册成功");
    } else {
        $arr = array("status" => 0, "msg" => "注册失败");
    }
    print_r(json_encode($arr));

    //4.关闭数据的链接
    $conn->close();

//}