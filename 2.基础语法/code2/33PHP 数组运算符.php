<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18
 * Time: 21:11
 */
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$c = array("e" => "black", "f" => "gray");
$z = $x + $y+$c; // $x 和 $y 数组合并
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);
?>