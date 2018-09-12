<?php

interface IQuackBehavior
{
    public function quack();
}

class QuackBehavior implements IQuackBehavior
{
    public function quack()
    {
        echo "Quack Quack!!!\n";
    }
}

class MuteQuackBehavior implements IQuackBehavior
{
    public function quack()
    {
    }
}