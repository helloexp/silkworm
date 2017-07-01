<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/1
 * Time: 6:35
 */
header("Content-type: text/html; charset=utf-8");
$a = 'djj';
$b = print_r($a, true);
echo $b."<br>";
$c = "\60";
echo "c的值为：".$c."<br>";
echo '<span title="<img src=1 onerror=alert(9)>">xss</span>';