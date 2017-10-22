<?php

class Bar
{
    /**
     * @var int
     */
    private $counter = 6;

    /**
     * Increment $counter
     *
     * @return int
     */
    public function addOne()
    {
        return $this->counter++;
    }
}
