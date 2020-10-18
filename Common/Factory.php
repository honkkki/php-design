<?php

namespace Common;

class Factory
{
    static function createDatabase($type = null)
    {
        //$db = new Database();
        //return $db;
        //工厂模式+单例模式
        $db = Database::getInstance();
        Register::set('db', $db);
        return $db;
    }

    static function createUser($id)
    {
        $user = Register::get('user_'.$id);
        if (!$user) {
            $user = new User($id);
            Register::set('user_'.$id, $user);
        }

        return $user;
    }

    static function createMysqliConn()
    {
        // 连接mysql数据库
        $mysqli = Database\Mysqli::mysqliInstance();
        $mysqli->connect('127.0.0.1', 'root', '111111', 'test');
        Register::set('mysql', $mysqli);
    }

}