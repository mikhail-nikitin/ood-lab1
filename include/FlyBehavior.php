<?php

interface IFlyBehavior
{
    public function fly();
}

class FlyWithWings implements IFlyBehavior
{
    public function fly()
    {
        echo "I'm flying with wings!\n";
    }

    /**
     * @return FlyWithWings
     */
    public static function create()
    {
        return new self();
    }
}

class CountedFlyWithWings extends FlyWithWings
{
    /** @var int */
    private $flightCount;

    public function __construct()
    {
        $this->flightCount = 0;
    }

    public function fly()
    {
        echo "Flight #{$this->getFlightNumber()}: ";
        parent::fly();
        ++$this->flightCount;
    }

    /**
     * @return int
     */
    public function getFlightNumber()
    {
        return $this->flightCount + 1;
    }

    /**
     * @return CountedFlyWithWings
     */
    public static function create()
    {
        return new self();
    }
}

class FlyNoWay implements IFlyBehavior
{
    public function fly()
    {
    }

    /**
     * @return FlyNoWay
     */
    public static function create()
    {
        return new self();
    }
}