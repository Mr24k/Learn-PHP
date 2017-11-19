<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18
 * Time: 15:51
 */
class Car
{
    var $color;

    function Car($color = "green")
    {
        $this->color = $color;
    }

    function what_color()
    {
        return $this->color;
    }
}

?>
#以上实例中PHP关键字this就是指向当前对象实例的指针，不指向任何其他对象或类。
