<?php

define('BASEDIR', __DIR__);
//自动加载类
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\Common\Loader::autoload');

// 策略模式 用接口的方式实现不同内容的展示
// Strategy依赖于FemaleUserStrategy或者MaleUserStrategy类
// 在外部根据情况绑定实例相对于在类内部的new 解决了两个类的耦合

class Strategy
{
    // 用变量保存实例
    protected $strategy;

    // 页面展示内容 根据性别推荐不同商品
    function index()
    {
        $this->strategy->showAd();
        echo PHP_EOL;
        $this->strategy->showCate();
        echo PHP_EOL;
    }

    function setStrategy(\Strategy\UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}


$page = new Strategy();
$sex = 'male';

if ($sex == 'female') {
    $strategy = new \Strategy\FemaleUserStrategy();
} else {
    $strategy = new \Strategy\MaleUserStrategy();
}

$page->setStrategy($strategy);
$page->index();