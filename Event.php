<?php

use Common\EventGenerator;
use Common\Observer;

define('BASEDIR', __DIR__);

//自动加载类
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

// 事件发生主体
class Event extends EventGenerator
{
    function trigger()
    {
        echo "事件发生".PHP_EOL;
        // 事件发生通知观察者
        $this->notify();
    }

}

// 原来事件发生后的操作逻辑抽象为单独的类
// 然后把观察者传给事件通知类
class Observer1 implements Observer
{
    function update($event_info = null)
    {
        echo "我是观察者1".PHP_EOL;
    }
}


class Observer2 implements Observer
{
    function update($event_info = null)
    {
        echo "我是观察者2".PHP_EOL;
    }
}


//代码解耦 监听事件的设计原理 观察者模式
$event = new Event();
// 先添加事件的观察者
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
// 再触发事件 通知给观察者
$event->trigger();
