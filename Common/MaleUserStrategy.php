<?php


namespace Common;


class MaleUserStrategy implements UserStrategy
{
    public function showAd()
    {
        echo "male ad";
    }

    public function showCate()
    {
        echo "male";
    }

}