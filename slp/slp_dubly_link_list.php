<?php

$dlist = new SplDoublyLinkedList();

$dlist->push(1);
$dlist->push(2);
$dlist->push(3);
$dlist->push(4);


$dlist->unshift(0);
$dlist->unshift(-1);

//var_dump($dlist);
// -1, 0, 1, 2, 3, 4

$dlist->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

foreach ( $dlist as $item) {
    var_dump($item);
}

$dlist->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);

foreach ( $dlist as $item) {
    var_dump($item);
}