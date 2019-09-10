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

    static function createUser($id)
    {
        $user = Register::get('user_'.$id);
        if (!$user) {
            $user = new User($id);
            Register::set('user_'.$id, $user);
        }

        return $user;

    }

}