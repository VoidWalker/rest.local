<?php

abstract class aClass
{
    public $var = 10;

    public function testFunction(){
        return 11;
    }

    public function testPrivet()
    {
        return 10;
    }
}

class B extends aClass
{
    public function testFunction(){

    }
}

$testB = new B();
$testB->testPrivet();
$testB->var;