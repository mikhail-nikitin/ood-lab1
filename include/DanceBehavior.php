<?php

class WaltzBehavior
{
    /**
     * @return callable
     */
    public static function create()
    {
        return function () {
            echo "I'm waltzing\n";
        };
    }
}

class MinuetBehavior
{
    /**
     * @return callable
     */
    public static function create()
    {
        return function () {
            echo "I'm dancing minuet\n";
        };
    }
}

class NoDanceBehavior
{
    /**
     * @return callable
     */
    public static function create()
    {
        return function () {};
    }
}