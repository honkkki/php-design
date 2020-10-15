<?php

use Common\Database;
use Common\Factory;
use Common\Register;
use Common\Magic;
use Common\User;

define('BASEDIR', __DIR__);
// 类自动加载
require BASEDIR.'/Common/Loader.php';
spl_autoload_register('\Common\Loader::autoload');

Tools\Image::test();
App\Controller\Home\Index::test();

// 单例
$db = Database::getInstance();
// 链式操作
$db->where("id = 1")->order("id desc")->limit(10);

// 工厂
//$db = Factory::createDatabase();

// 注册树模式
var_dump($db = Register::get('db'));

// 适配器模式
$mysqli = Database\Mysqli::mysqliInstance();
$mysqli->connect('127.0.0.1', 'root', '111111', 'test');
$res = $mysqli->query('select * from user');
$data = $res->fetch_all(MYSQLI_ASSOC);
$mysqli->close();
var_dump($data);




// 数据对象映射模式
//$user = new User(3);
//$user = Factory::createUser(3);
////var_dump($user->id, $user->name, $user->phone);
//var_dump($user);
//$user->name = 'filco';
//
//// 注册器模式的好处 减少创建对象的次数
//$user2 = Factory::createUser(3);     //与上面的$user对象是同一个对象实例
//var_dump($user2);
//
//$user3 = new User(3);            //与上面两个对象#id都不同，浪费了一次对象创建的资源
//var_dump($user3);


//适配器模式
//$db = new Database\PDO();
//$db2 = new Database\Mysqli();

//$db = new Common\Database();
//$db = Factory::createDatabase();  //工厂模式修改类名时不需要每处修改 在工厂中创建好对象返回


//$magic = new Magic();
//var_dump($magic('param1', 'param2'));     // __invoke


