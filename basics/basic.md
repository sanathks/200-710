#BASIC

#
* Functions aren't cases sensitive 

###Language Constructs
```php
// The result of the expression (false || true) is assigned to $e
// Acts like: ($e = (false || true))
$e = false || true;

// The constant false is assigned to $f before the "or" operation occurs
// Acts like: (($f = false) or true)
$f = false or true;

var_dump($e, $f);

//OUTPUT
bool(true)
bool(false)
```
###Reference 
* Assign by reference
```php
<?php
$a =& $b;
?>
//$a and $b are completely equal here. $a is not pointing to $b or vice versa. $a and $b are pointing to the same place.
```
```php
<?php
//If you assign, pass, or return an undefined variable by reference, it will get created.
  
function foo(&$var) { }

foo($a); // $a is "created" and assigned to null

$b = array();
foo($b['b']);
var_dump(array_key_exists('b', $b)); // bool(true)

$c = new StdClass;
foo($c->d);
var_dump(property_exists($c, 'd')); // bool(true)
?>
```

