<?php

namespace ORM;

use Common\Register;

class User
{
    public $id;
    public $name;

    public function __construct($id)
    {
        // 直接从注册树拿单例mysql连接
        $mysql = Register::get('mysql');
        $res = $mysql->query("select * from user where id = '{$id}'");
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name  = $data['name'];
    }

}