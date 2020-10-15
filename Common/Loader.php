<?php

namespace Common;

// 自动加载工具类
class Loader
{
    static function autoload($class)
    {
//        var_dump($class);
        // 把命名空间转为目录斜杆
        require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
        Factory::createDatabase();
        Factory::createMysqliConn();
    }
}
