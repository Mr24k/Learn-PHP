<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18
 * Time: 14:55
 */
function myTest()
{
    static $x=0;
    echo $x;
    echo "\n";
    $x++;
}

myTest();
myTest();
myTest();

?>