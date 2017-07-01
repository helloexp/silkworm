<?php
/**
 * 本地文件包含漏洞
 * User: Administrator
 * Date: 2017/7/1 0001
 * Time: 下午 6:38
 */
define("ROOT", dirname(__FILE__).'/');
$mod = $_GET['mod'];
echo ROOT.$mod.'.php';
include (ROOT.$mod.'.php');