<?php

namespace Common;

class Factory
{
    static function createDatabase()
    {
        //$db = new Database();
        //return $db;
        //工厂模式+单例模式
        $db = Database::getInstance();
        Register::set('db1', $db);
        return $db;
    }

}