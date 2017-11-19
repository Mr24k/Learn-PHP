<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18
 * Time: 21:34
 */
// 整型
echo 1 <=> 1; // 0
echo PHP_EOL;
echo 1 <=> 2; // -1
echo PHP_EOL;
echo 2 <=> 1; // 1
echo PHP_EOL;

// 浮点型
echo 1.5 <=> 1.5; // 0
echo PHP_EOL;
echo 1.5 <=> 2.5; // -1
echo PHP_EOL;
echo 2.5 <=> 1.5; // 1
echo PHP_EOL;

// 字符串
echo "a" <=> "a"; // 0
echo PHP_EOL;
echo "a" <=> "b"; // -1
echo PHP_EOL;
echo "b" <=> "a"; // 1
echo PHP_EOL;
?>