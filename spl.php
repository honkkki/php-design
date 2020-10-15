<?php

// 栈
$stack = new SplStack();
$stack->push(1);
$stack->push(2);

var_dump($stack);
var_dump($stack->pop());
var_dump($stack);

// 队列
$queue = new SplQueue();
$queue->enqueue(1);
var_dump($queue);
var_dump($queue->dequeue());

// 固定长度的数组
$arr = new SplFixedArray(5);
$arr[0] = 1;
$arr[4] = 2;
var_dump($arr);