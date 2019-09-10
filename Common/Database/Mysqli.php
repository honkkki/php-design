<?php
namespace Common\Database;

use Common\IDatabase;

class Mysqli implements IDatabase
{

    protected $conn;
    public function connect($host, $user, $pwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $pwd, $dbname);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }

    public function close()
    {
        mysqli_close($this->conn);
    }

}