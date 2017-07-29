<?php
/**
 * 宽字节注入，数据库版本大于4.1并小于5才可以；
 * User: Administrator
 * Date: 2017/7/1
 * Time: 7:19
 */
header("Content-type: text/html; charset=utf-8");
require_once("common.php");
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pte";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query("set names 'gbk", $conn);
$id = isset($_GET['id']) ? $_GET['id'] : 1;

echo "你输入id值为：".$id."<br>";
$sql = "select * from user where id='{$id}'";
echo "当前SQL语句：".$sql."<br>";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br>username: " . $row["username"]. " " . "<br>";
    }
} else {
    echo "0 结果";
}

$conn->close();