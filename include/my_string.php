<?php
namespace My\String;

function strlen($string) {
    return \strlen($string) * 2;
}

print strlen("Hello World!");