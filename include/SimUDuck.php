<?php

class SimUDuck
{
    public function run()
    {
        $duck = new MallardDuck();
        $this->playWithDuck($duck);

        $duck = new RedheadDuck();
        $this->playWithDuck($duck);
    }

    private function playWithDuck(Duck $duck)
    {
        $duck->display();
        $duck->quack();
        $duck->fly();
        $duck->dance();
        echo PHP_EOL;
    }
}

abstract class Duck
{
    abstract public function display();

    public function quack()
    {
        echo "I'm quacking\n";
    }

    public function fly()
    {
        echo "I'm flying with wings\n";
    }

    public function dance()
    {
        echo "I'm dancing\n";
    }
}

class MallardDuck extends Duck
{
    public function display()
    {
        echo "I'm a mallard duck\n";
    }
}

class RedheadDuck extends Duck
{
    public function display()
    {
        echo "I'm a redhead duck\n";
    }
}