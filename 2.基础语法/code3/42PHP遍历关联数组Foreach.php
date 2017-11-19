<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/19
 * Time: 16:42
 */
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>