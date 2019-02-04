<?php

/**************************************************************************************************
 * When operators have equal precedence their associativity decides how the operators are grouped.
 **************************************************************************************************/
$res = 1-2-3; // grouped as (1 - 2) - 3 and evaluates to -4
$a = $b = $c; // grouped as $a = ($b = $c)


/**************************************************************************************************
 * Operators of equal precedence that are non-associative cannot be used next to each other,
 * for example 1 < 2 > 1 . The expression 1 <= 1 == 1 on the other hand is legal,
 * because the == operator has lesser precedence than the <= operator.
 **************************************************************************************************/
//$res = 1 < 2 > 1; // is illegal in PHP
$res =  1 <= 1 == 1;// is legal