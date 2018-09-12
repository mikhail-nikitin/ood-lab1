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

    /**
     * @return QuackBehavior
     */
    public static function create()
    {
        return new self();
    }
}

class MuteQuackBehavior implements IQuackBehavior
{
    public function quack()
    {
    }

    /**
     * @return MuteQuackBehavior
     */
    public static function create()
    {
        return new self();
    }
}

class SqueakBehavior implements IQuackBehavior
{
    public function quack()
    {
        echo "Squeak!!!\n";
    }

    /**
     * @return SqueakBehavior
     */
    public static function create()
    {
        return new self();
    }
}