<?php


namespace Common;


interface Observer
{
    // 观察者的更新逻辑
    function update($event_info = null);
}