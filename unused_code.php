<?php

class Bar
{
    private static $FOO = 2;
    private $i = 5;
    private $j = 6;

    public function addOne()
    {
        return $this->j++;
    }

    private function foo($z)
    {
        $x = 20;
        // to implement
    }
}
