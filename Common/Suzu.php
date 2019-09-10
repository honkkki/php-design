<?php
namespace Common;

class Suzu
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

    function __call($name, $arguments)
    {
        return $arguments;
    }

    function __toString()
    {
        return __CLASS__;
    }

    function __invoke($param)
    {
        var_dump($param);
        return 111;
    }

    static function test()
    {
        echo __METHOD__;
        echo PHP_EOL;
    }

}
