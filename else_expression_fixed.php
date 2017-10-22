<?php

class Bar
{
    /**
     * Good example of if - else statement.
     *
     * @param  string $something
     * @return null|string
     */
    public function foo($something)
    {
        // always try to stay on one if level
        // try to implement the exit conditions first,
        // so the code is easier to read as you go down

        if ($something !== 'foo') {
            return null;
        }

        return $something;
    }
}
