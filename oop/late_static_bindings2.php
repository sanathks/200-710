<?php

/***************************************************************************************************************
 * Late static bindings' resolution will stop at a fully resolved static call with no fallback.
 * On the other hand, static calls using keywords like parent:: or self:: will forward the calling information.
 ***************************************************************************************************************/

class A {
    public static function foo() {
        static::who();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}

class B extends A {
    public static function test() {
        A::foo();
        parent::foo();
        self::foo();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}

class C extends B {
    public static function who() {
        echo __CLASS__."\n";
    }
}

C::test();