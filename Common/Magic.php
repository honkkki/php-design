<?php
namespace Common;

class Magic
{
    protected $array = [];

    function __set($name, $value)
    {
        $this->array[$name] = $value;
    }

    function __get($name)
    {
        return $this->array[$name];
    }

    //实例调用一个类中不存在的方法时调用该魔术方法
    function __call($name, $arguments)
    {
        return $arguments;
    }

    //对象实例转字符串
    function __toString()
    {
        return __CLASS__;
    }

    //对象实例可以当做方法使用
    function __invoke($param1, $param2)
    {
        var_dump($param1, $param2);
        return true;
    }

    static function test()
    {
        echo __METHOD__;
        echo PHP_EOL;
    }

}
