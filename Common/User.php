<?php


namespace Common;


class User
{
    public $id;
    public $name;
    public $phone;

    function __construct($id)
    {
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'test', '3310');
        $sql = "select * from userinfo where id = '{$id}'";
        $res = mysqli_query($conn, $sql);
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->phone = $data['phone'];
    }

    function __destruct()
    {
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'test', '3310');
        $sql = "update userinfo set name = '{$this->name}' where id = '{$this->id}'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    function insert()
    {
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'test', '3310');
        $sql = "insert into userinfo (name, phone) values ('irene', 10086)";
        mysqli_query($conn, $sql);

    }
}