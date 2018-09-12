<?php

require_once __DIR__ . '/FlyBehavior.php';
require_once __DIR__ . '/QuackBehavior.php';

class SimUDuck
{
    public function run()
    {
        $duck = new MallardDuck();
        $this->playWithDuck($duck);

        $duck = new RedheadDuck();
        $this->playWithDuck($duck);

        $duck = new RubberDuck();
        $this->playWithDuck($duck);

        $duck = new DecoyDuck();
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
    /** @var IFlyBehavior */
    private $flyBehavior;

    /** @var IQuackBehavior */
    private $quackBehavior;

    public function __construct(IFlyBehavior $flyBehavior, IQuackBehavior $quackBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    abstract public function display();

    public function quack()
    {
        $this->quackBehavior->quack();
    }

    public function fly()
    {
        $this->flyBehavior->fly();
    }

    public function dance()
    {
        echo "I'm dancing\n";
    }
}

class MallardDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new FlyWithWings(), new QuackBehavior());
    }

    public function display()
    {
        echo "I'm a mallard duck\n";
    }
}

class RedheadDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new FlyWithWings(), new QuackBehavior());
    }

    public function display()
    {
        echo "I'm a redhead duck\n";
    }
}

class DecoyDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new FlyNoWay(), new MuteQuackBehavior());
    }

    public function display()
    {
        echo "I'm a decoy duck\n";
    }

    public function dance()
    {
    }
}

class RubberDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new FlyNoWay(), new SqueakBehavior());
    }

    public function display()
    {
        echo "I'm a rubber duck\n";
    }

    public function dance()
    {
    }
}