<?php

use Common\Database;
use Common\Factory;
use Common\Register;
use Common\Suzu;

define('BASEDIR', __DIR__);

//自动加载类
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

//适配器模式
//$db = new Database\PDO();
//$db2 = new Database\Mysqli();

//$db = new Common\Database();
//$db = Factory::createDatabase();  //工厂模式修改类名时不需要每处修改 在工厂中创建好对象返回
//$db = Register::get('db1');      //注册器模式

//单例模式
//$db = Database::getInstance();
//$db = Database::getInstance();
//$db = Database::getInstance();









//$suzu = new Suzu();
////对象不存在该成员变量 调用set魔术方法
//$suzu->title = "magic";
//echo $suzu->title.PHP_EOL;//get
//print_r($suzu->show("hello"));//call
//echo $suzu."\n"; //toString
//echo $suzu("hello").PHP_EOL; //invoke


//$db = new Common\Database();
////链式操作
//$db->where("id=1")->order("id desc")->limit(10);


//Common\Suzu::test();
//App\Controller\Home\Index::test();

//spl的数据结构类
//$queue = new SplQueue();
//$queue->enqueue("data1\n");
//$queue->enqueue("data2\n");
//echo $queue->dequeue();
//echo $queue->dequeue();


//$stack = new SplStack();
//$stack->push('data1'."\n");
//$stack->push('data2'."\n");
//echo $stack->pop();
//echo $stack->pop();