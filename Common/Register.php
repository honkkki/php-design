<?php


namespace Common;

// 注册树模式
class Register
{
    // 把对象存在一个数组里
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