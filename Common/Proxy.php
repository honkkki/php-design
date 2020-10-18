<?php


namespace Common;


class Proxy
{
    public function getUserName()
    {
        $db = Factory::createDatabase('slave');
        $db->query('select ...');
    }

    public function setUserName()
    {
        $db = Factory::createDatabase('master');
        $db->query('update ...');
    }
}


