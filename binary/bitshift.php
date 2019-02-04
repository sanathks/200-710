<?php
/**
 * @author Sanath Samarasinghe <sanath@serrexlabs.com>
 */

$x=8;
$y=3;

/*--------------------------------------------------------------
    256 | 128 |  64  |  32  |  16  |  8  |  4  |  2  |  1  |
----------------------------------------------------------------
     0  |  0   |  0  |  0   |  0   |  1  |  0  |  0  |  0  | 8 = 1000 = $x
----------------------------------------------------------------*/

echo "Bit Shift Left\n";
echo "x << y = ";
echo $x << $y;  // So the bit is left that's mean is multiply by 2 by any given time here 8 * 2 * 2 * 2 = 64

echo "\n";
echo "Bit Shift Right\n";
echo "x >> y = ";
echo $x >> $y;  // So the bit is left that's mean is divided by 2 by any given time here 8 / 2 / 2 / 2 = 1
