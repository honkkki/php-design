<?php

namespace Common\Database;

use Common\IDatabase;

class PDO implements IDatabase
{
    protected $conn;

    public function connect($host, $user, $pwd, $dbname)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function close()
    {
        unset($this->conn);
    }
}