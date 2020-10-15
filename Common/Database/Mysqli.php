<?php
namespace Common\Database;

use Common\IDatabase;

class Mysqli implements IDatabase
{
    private static $instance;
    private $conn;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function connect($host, $user, $pwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $pwd, $dbname);
        $this->conn = $conn;
    }

    public static function mysqliInstance()
    {
        if (self::$instance) {
            return self::$instance;
        }

        self::$instance = new self();
        return self::$instance;
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