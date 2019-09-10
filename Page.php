<?php

use Common\FemaleUserStrategy;
use Common\MaleUserStrategy;
use Common\UserStrategy;

define('BASEDIR', __DIR__);
//自动加载类
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

//策略模式 用接口的方式实现不同内容的展示
class Page
{
    //用一个接口类实现依赖倒置 用变量保存实例
    public $strategy;
    function index()
    {
        $this->strategy->showAd();
        echo PHP_EOL;
        $this->strategy->showCate();
        echo PHP_EOL;
    }

    function setStrategy(UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}

$page = new Page();
if (isset($_GET['female'])) {
    $strategy = new FeMaleUserStrategy();
} else {
    $strategy = new MaleUserStrategy();
}
$page->setStrategy($strategy);
$page->index();