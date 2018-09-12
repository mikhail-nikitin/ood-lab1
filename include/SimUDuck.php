<?php

class Duck
{
    public function display()
    {
        echo "A base duck\n";
    }

    public function quack()
    {
        echo "I'm quacking\n";
    }

    public function fly()
    {
        echo "I'm flying\n";
    }

    public function dance()
    {
        echo "I'm dancing\n";
    }
}

class SimUDuck
{
    public function run()
    {
        $duck = new Duck();
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