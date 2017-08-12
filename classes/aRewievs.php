<?php

abstract class aRewievs
{
    public static $count_Rewievs;
    protected function count_Rewievs()
    {
        echo "Количество добавленных отзывов: ".static::$count_Rewievs;
    }

    public abstract function giveCountRewievs();

}