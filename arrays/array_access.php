<?php

class Foo implements ArrayAccess {


    public function offsetExists($offset)
    {
        return true;
    }


    public function offsetGet($offset)
    {
       return 'a';
    }


    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }


    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }
}

$foo = new Foo();
//var_dump(array_key_exists('foo', $foo));
foreach ($foo as $item) {
    var_dump($item);
}
