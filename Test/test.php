<?php

//require __DIR__ .  '/' . 'Test1.php';
//require __DIR__ .  '/' . 'Test2.php';

// 可以多次使用该方法 解决__autoload函数重复的问题
spl_autoload_register('autoload');

function autoload($class)
{
    require __DIR__ . '/' . $class . '.php';
}

Test1::test();
Test2::test();


