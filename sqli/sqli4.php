<?php
/**
 * int型注入，加入URL编码技巧
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
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$id = stripslashes($id);

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
?>


