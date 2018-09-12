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
}

class MinuetBehavior implements IDanceBehavior
{
    public function dance()
    {
        echo "I'm dancing minuet\n";
    }
}

class NoDanceBehavior implements IDanceBehavior
{
    public function dance()
    {
    }
}