<?php
namespace Common\Database;

use Common\IDatabase;

class Mysql implements IDatabase
{
    protected $conn;
    public function connect($host, $user, $pwd, $dbname)
    {
        $this->conn = mysql_connect($host, $user, $pwd);
        mysql_select_db($dbname, $this->conn);
    }

    public function query($sql)
    {
        $res = mysql_query($sql, $this->conn);
        return $res;
    }

    public function close()
    {
        mysql_close($this->conn);
    }
}