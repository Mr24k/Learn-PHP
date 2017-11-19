<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/19
 * Time: 22:41
 */
class BaseClass {
    public function test() {
        echo "BaseClass::test() called" . PHP_EOL;
    }

    final public function moreTesting() {
        echo "BaseClass::moreTesting() called"  . PHP_EOL;
    }
}

class ChildClass extends BaseClass {
    public function moreTesting() {
        echo "ChildClass::moreTesting() called"  . PHP_EOL;
    }
}
// 报错信息 Fatal error: Cannot override final method BaseClass::moreTesting()
?>