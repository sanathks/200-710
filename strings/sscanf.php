<?php

$str = "If you divide 4 by 2 you'll get 2";
$format = sscanf($str,"If you divide %d by %d you'll get %c   ");
print_r($format);

