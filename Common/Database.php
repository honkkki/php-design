<?php


namespace Common;

//适配器接口
interface IDatabase
{
    function connect($host, $user, $pwd, $dbname);
    function query($sql);
    function close();
}

class Database
{
    //单例模式连接数据库
    protected static $db;
    private function __construct()
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