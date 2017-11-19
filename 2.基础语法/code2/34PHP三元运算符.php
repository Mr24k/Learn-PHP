<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18
 * Time: 21:26
 */
$test = '菜鸟教程';
// 普通写法
$username = isset($test) ? $test : 'nobody';
echo $username, PHP_EOL;

// PHP 5.3+ 版本写法
$username = $test ?: 'nobody';
echo $username, PHP_EOL;
?>
//注意：PHP_EOL 是一个换行符，兼容更大平台。
