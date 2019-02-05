<?php

/*$a = "Hello";
$b =&$a;

xdebug_debug_zval('a');
xdebug_debug_zval('b');
$b = "new hello";
xdebug_debug_zval('a');
xdebug_debug_zval('b');*/

/*$arr = ["hello", "world"];

//arr: (refcount=2, is_ref=0)=array (0 => (refcount=1, is_ref=0)='hello', 1 => (refcount=1, is_ref=0)='world')
xdebug_debug_zval('arr');*/

/**
 * arr: (refcount=1, is_ref=0)=array (0 => (refcount=3, is_ref=1)=2, 1 => (refcount=0, is_ref=0)=2)
 * a: (refcount=3, is_ref=1)=2
 * arr2: (refcount=1, is_ref=0)=array (0 => (refcount=3, is_ref=1)=2, 1 => (refcount=0, is_ref=0)=2)
 */
/*$arr = [1, 2];
$a = &$arr[0];
$arr2 = $arr;
$arr2[0]++;


xdebug_debug_zval('arr');
xdebug_debug_zval('a');
xdebug_debug_zval('arr2');*/

/**
 * a: (refcount=2, is_ref=0)=class TestZval { public $var = (refcount=0, is_ref=0)=30 }
 * b: (refcount=2, is_ref=0)=class TestZval { public $var = (refcount=0, is_ref=0)=30 }
 */
/*class TestZval  {
    public $var = 10;
}

$a = new TestZval();
$b = $a;
$b->var = 30;
xdebug_debug_zval('a');
xdebug_debug_zval('b');*/


$a = "new string";
$c = $b = $a;
xdebug_debug_zval( 'a' );
$b = 42;
xdebug_debug_zval( 'a' );
unset( $c );
xdebug_debug_zval( 'a' );