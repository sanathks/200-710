<?php

class Test {
    public $var = 1;
}

function add(Test $test) {
    $test->var++;
}

$t = new Test();
add($t);

echo  $t->var;