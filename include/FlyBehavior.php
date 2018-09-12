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
}