<?php
/**
 * @author Sanath Samarasinghe <sanath@serrexlabs.com>
 */

class Test {
    public function __call($name, $args)
    {
        call_user_func_array(['static', "test$name"], $args);
    }

    public function testS($a)
    {
        echo "$a,";
    }
}

class Test2 extends Test {
    public function testS($a)
    {
        echo "$a, $a,";
    }
}

$test = new Test2();

$test->S('A');