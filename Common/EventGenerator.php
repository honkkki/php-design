<?php


namespace Common;

//事件抽象类
abstract class EventGenerator
{
    private $observers = [];

    function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

}