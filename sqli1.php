<?php
header("Content-type: text/html; charset=utf-8");
require_once ("common.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pte";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$sql = "SELECT * FROM user WHERE id={$id}";
echo $sql."<br>";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br>用户名: " . $row["username"]. " " . "<br>";
    }
} else {
    echo "0 结果";
}


$conn->close();

/*
$conn = mysqli_connect('localhost', 'root', '', 'pte');
if (!$conn){
die("数据库连接错误！".mysqli_connect_error());
}
else{
echo "数据库连接成功！";
}

//这里id没有做整形转换
$id = isset($_GET['id']) ? $_GET['id'] : 1;
//sql语句没有单引号保护,造成注入
$sql = "SELECT * FROM news WHERE id={$id}";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
*/
?>


