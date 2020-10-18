<?php

define('BASEDIR', __DIR__);
//自动加载类
require BASEDIR.'/Common/Loader.php';
spl_autoload_register('\Common\Loader::autoload');


$config = new \Common\Config(BASEDIR . '/Config');
var_dump($config);
// 访问数组的方式访问对象 offsetGet()
var_dump($config['database']);


$res = require BASEDIR . '/Config/test.php';
var_dump($res);

var_dump(array_rand([1,2,3]));

