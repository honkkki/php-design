<?php


namespace Strategy;


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