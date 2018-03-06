<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/6
 * Time: 14:58
 */

//1. 链接数据
$DBSERVER = "127.0.0.1";
$ROOT = "root";
$PWD = "";
$DATABASE = "zouxiunet";

$conn = new mysqli($DBSERVER, $ROOT, $PWD, $DATABASE);

mysqli_query($conn, "set names utf8");

$sql = "SELECT*FROM goodsinfo ";
$result = $conn->query($sql);
$arrResult = array();
//如果有数据就进行遍历
if ($result->num_rows >= 1) {
    //一条一条的读取
    while ($row = $result->fetch_assoc()) {
        //$row["p_id"]; // 1 ,2

        $sql1 = "SELECT*FROM goodsimgs WHERE p_id=" . $row["p_id"];
        $result1 = $conn->query($sql1);
        if ($result1->num_rows >= 1) {
            while ($row1 = $result1->fetch_assoc()) {
                array_push($row, $row1);
            }
        }

        array_push($arrResult, $row);

    }
}
print_r(json_encode($arrResult));




