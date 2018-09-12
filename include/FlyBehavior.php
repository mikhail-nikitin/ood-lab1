<?php

class FlyWithWings
{
    /**
     * @return callable
     */
    public static function create()
    {
        return function () {
            echo "I'm flying with wings!\n";
        };
    }
}

class CountedFlyWithWings
{
    /**
     * @return callable
     */
    public static function create()
    {
        $flightCount = 0;

        return function () use (&$flightCount) {
            $flightNumber = $flightCount + 1;
            echo "Flight #{$flightNumber}: I'm flying with wings!\n";
            ++$flightCount;
        };
    }
}

class FlyNoWay
{
    /**
     * @return callable
     */
    public static function create()
    {
        return function () {};
    }
}