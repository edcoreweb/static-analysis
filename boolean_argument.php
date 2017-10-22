<?php

class Bar
{
    /**
     * Bad example of boolean argument statement.
     *
     * @param  bool $flag
     * @return null
     */
    public function foo($flag = true)
    {
        if ($flag) {
            return 1;
        }

        return 0;
    }
}
