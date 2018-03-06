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
mysqli_query($conn, "set names utf8");
//3.准备sql语句
$sql = "SELECT*FROM userinfo WHERE u_name='" . $u_name . "' AND u_pwd='" . $u_pwd . "'";

$result = $conn->query($sql);


//如果大于等于1就进来
$arr = array("status" => 0, "msg" => "用户名密码错误","data" => null);
if ($result->num_rows >= 1) {

    while ($row = $result->fetch_assoc()) {
        $arr["status"] = 1;
        $arr["msg"] = "登陆成功";
        $arr["data"] = $row;
        //只登陆成功后，才能创建session
        session_start();//开启session
        $_SESSION["USER"]=$row;



    }

}
print_r(json_encode($arr));


//4.关闭数据的链接
$conn->close();

//}




