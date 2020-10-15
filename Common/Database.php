<?php

namespace Common;

class Database
{
    //单例模式连接数据库
    private static $db;
    public $info = '获取数据库实例成功';
    private function __construct()
    {
    }

    private function __clone()
    {
    }

    static function getInstance()
    {
        if (self::$db) {
            return self::$db;
        }

        self::$db = new self();
        return self::$db;
    }

    function where($where)
    {
        return $this;
    }

    function order($order)
    {
        return $this;
    }

    function limit($limit)
    {
        return $this;
    }
}