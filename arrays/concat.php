<?php

/**
 * This is basically replacing the index, so the result is  ['Banana', "Apple", "Fig", "Cactus","Ele"]
 *  Also it gives some precedence to the first array.
 */
$a = [1 => "Apple", 3 => "Cactus", 5 => "Ele"] + ['Banana', 'Dragon', 'Fig'];

var_dump($a);