<?php
/**
 * @author Sanath Samarasinghe <sanath@serrexlabs.com>
 */

$a = 1 + 5 ** (2 ** 2); // ** got right precedence

//var_dump($a);
$b = 3;
$a = 1 + ++$b;

//var_dump($a);

$a = 2 - 3 + 4; // Grouped as  (2 - 3) + 4
//var_dump($a);

$a = 2 + 3 * 2; // Grouped as  2 + (3 * 2)
//var_dump($a);

$x = 4;
// this line might result in unexpected output:
echo "x minus one equals " . 1 - $x . ", or so I hope\n";
