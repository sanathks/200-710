<?php
/**
 * @author Sanath Samarasinghe <sanath@serrexlabs.com>
 */

$first = "second";
$second = 'first';
echo $$$first; // Grouped as $($($first)) 1 => $($(second)) = $($second); 2 => $(first) = $first = second