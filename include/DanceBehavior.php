<?php

interface IDanceBehavior
{
    public function dance();
}

class WaltzBehavior implements IDanceBehavior
{
    public function dance()
    {
        echo "I'm waltzing\n";
    }

    /**
     * @return WaltzBehavior
     */
    public static function create()
    {
        return new self();
    }
}

class MinuetBehavior implements IDanceBehavior
{
    public function dance()
    {
        echo "I'm dancing minuet\n";
    }

    /**
     * @return MinuetBehavior
     */
    public static function create()
    {
        return new self();
    }
}

class NoDanceBehavior implements IDanceBehavior
{
    public function dance()
    {
    }

    /**
     * @return NoDanceBehavior
     */
    public static function create()
    {
        return new self();
    }
}