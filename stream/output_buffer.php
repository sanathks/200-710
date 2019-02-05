<?php
/**
 * @author Sanath Samarasinghe <sanath@serrexlabs.com>
 */


/**
 * Normally, both Nginx and Apache buffer content up to either 4KB or 8KB depending on the operating system being used.
 * Normally, on 64bit operating systems, the limit is 8KB and on 32bit operating systems it is 4KB.
 */
//Default php buffer size in 4kb also note that the php cli is always buffer is off

$multiplier = 8;
$size = 1024 * $multiplier;
for($i = 1; $i <= $size; $i++) {
    echo ".";
}
sleep(5);
echo "\n";
echo "Hello World";