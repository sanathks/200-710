<?php
/**
 * @author Sanath Samarasinghe <sanath@serrexlabs.com>
 */


/* This will output the contents of
  www.example.com entirely in uppercase */

readfile("php://filter/read=string.toupper/resource=http://www.example.com");

/* This will do the same as above
  but will also ROT13 encode it */
readfile("php://filter/read=string.toupper|string.rot13/resource=http://www.cravex.io");

/* This will filter the string "Hello World"
  through the rot13 filter, then write to
  example.txt in the current directory */
file_put_contents("php://filter/write=string.rot13/resource=example.txt","Hello World");