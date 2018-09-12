<?php

class QuackBehavior
{
    /**
     * @return callable
     */
    public static function create()
    {
        return function () {
            echo "Quack Quack!!!\n";
        };
    }
}

class MuteQuackBehavior
{
    /**
     * @return callable
     */
    public static function create()
    {
        return function () {};
    }
}

class SqueakBehavior
{
    /**
     * @return callable
     */
    public static function create()
    {
        return function () {
            echo "Squeak!!!\n";
        };
    }
}