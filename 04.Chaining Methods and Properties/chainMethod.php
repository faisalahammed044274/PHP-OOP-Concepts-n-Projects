<?php

class ChainMethods
{

    public function Method1()
    {
        echo "Hello from method 1" . PHP_EOL;
        return $this;
    }

    public function Method2()
    {
        echo "Hello from method 2" . PHP_EOL;
        return $this;
    }
    public function Method3()
    {
        echo "Hello from method 3" . PHP_EOL;
        return $this;
    }
    public function Method4()
    {
        echo "Hello from method 4 " . PHP_EOL;
        return $this;
    }
    public function Method5()
    {
        echo "Hello from method 5 " . PHP_EOL;

    }
}

$cm = new ChainMethods();
$cm->Method1()->Method2()->Method3()->Method4()->Method5();
