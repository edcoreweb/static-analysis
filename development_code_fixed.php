<?php

class Bar
{
    /**
     * Good example of development code.
     *
     * @param array $items
     */
    public function foo(array $items)
    {
       foreach ($items as $item) {
           // some other stuff
           $this->baz($item);
       }
    }
}
