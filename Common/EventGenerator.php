<?php


namespace Common;

// 事件通知抽象类
abstract class EventGenerator
{
    private $observers = [];

    function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    function notify($param = null)
    {
        foreach ($this->observers as $observer) {
            $observer->update($param);
        }
    }

}