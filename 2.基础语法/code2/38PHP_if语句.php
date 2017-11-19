<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18
 * Time: 22:15
 */
$t = date("H");
echo $t;
echo PHP_EOL;
if ($t < "20") {
    echo "Have a good day!";
}
?>