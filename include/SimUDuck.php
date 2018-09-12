<?php

require_once __DIR__ . '/FlyBehavior.php';
require_once __DIR__ . '/QuackBehavior.php';
require_once __DIR__ . '/DanceBehavior.php';

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

        $duck = new ModelDuck();
        $this->playWithDuck($duck);
        $duck->setFlyBehavior(FlyWithWings::create());
        $this->playWithDuck($duck);
    }

    private function playWithDuck(Duck $duck)
    {
        $duck->display();
        $duck->quack();
        $duck->fly();
        $duck->dance();

        $duck->fly();
        $duck->fly();
        echo PHP_EOL;
    }
}

abstract class Duck
{
    /** @var IFlyBehavior */
    private $flyBehavior;

    /** @var IQuackBehavior */
    private $quackBehavior;

    /** @var IDanceBehavior */
    private $danceBehavior;

    public function __construct(IFlyBehavior $flyBehavior, IQuackBehavior $quackBehavior, IDanceBehavior $danceBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
        $this->danceBehavior = $danceBehavior;
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

    /**
     * @param IFlyBehavior $flyBehavior
     */
    public function setFlyBehavior(IFlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function dance()
    {
        $this->danceBehavior->dance();
    }
}

class MallardDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(
            CountedFlyWithWings::create(),
            QuackBehavior::create(),
            WaltzBehavior::create()
        );
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
        parent::__construct(
            CountedFlyWithWings::create(),
            QuackBehavior::create(),
            MinuetBehavior::create()
        );
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
        parent::__construct(
            FlyNoWay::create(),
            MuteQuackBehavior::create(),
            NoDanceBehavior::create()
        );
    }

    public function display()
    {
        echo "I'm a decoy duck\n";
    }
}

class RubberDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(
            FlyNoWay::create(),
            SqueakBehavior::create(),
            NoDanceBehavior::create()
        );
    }

    public function display()
    {
        echo "I'm a rubber duck\n";
    }
}

class ModelDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(
            FlyNoWay::create(),
            MuteQuackBehavior::create(),
            NoDanceBehavior::create()
        );
    }

    public function display()
    {
        echo "I'm a model duck\n";
    }
}