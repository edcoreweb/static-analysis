<?php

class Bar
{
    /**
     * Bad example of if - else statement.
     *
     * @param  string $something
     * @return null|string
     */
    public function foo($something)
    {
        if ($something == 'foo') {
            return $something;
        } else {
            return null;
        }
    }
}
