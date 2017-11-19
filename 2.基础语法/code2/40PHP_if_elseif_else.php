<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18
 * Time: 22:19
 */
$t=date("H");
if ($t<"10")
{
    echo "Have a good morning!";
}
elseif ($t<"20")
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}
?>