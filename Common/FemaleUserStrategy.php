<?php


namespace Common;


class FemaleUserStrategy implements UserStrategy
{
    public function showAd()
    {
        echo "female ad";
    }

    public function showCate()
    {
        echo "female";
    }

}