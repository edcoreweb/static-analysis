<?php

class Bar
{
    /**
     * Bad example of development code.
     *
     * @param array $items
     */
    public function foo(array $items)
    {
       foreach ($items as $item) {
           // want to see what happens here
           if ($item['key'] == 'my_key') {
               var_dump($item);
           }

           // some other stuff
           $this->baz($item);
       }
    }
}
