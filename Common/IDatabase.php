<?php


namespace Common;

// 适配器接口
interface IDatabase
{
    function connect($host, $user, $pwd, $dbname);
    function query($sql);
    function close();
}