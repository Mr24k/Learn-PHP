<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/19
 * Time: 22:37
 */
class Foo {
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

print Foo::$my_static ;
echo PHP_EOL;
$foo = new Foo();

print $foo->staticValue() . PHP_EOL;
?>