<?php


namespace Strategy;


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

