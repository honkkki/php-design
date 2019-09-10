<?php


namespace Common;

//注册器
class Register
{

    protected static $array;

    static function set($alias, $ob)
    {
        self::$array[$alias] = $ob;
    }

    static function get($alias)
    {
        return self::$array[$alias];
    }
    static function _unset($alias)
    {
        unset(self::$array[$alias]);
    }

}