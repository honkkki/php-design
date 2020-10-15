<?php

define('BASEDIR', __DIR__);
//自动加载类
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\Common\Loader::autoload');



$user = new \ORM\User(1);
var_dump($user->name);





