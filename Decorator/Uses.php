<?php

include_once './Man.php';
include_once './DecoratorA.php';
include_once './DecoratorB.php';
class Uses
{
    public function __construct(){}

    public function uses(){
        $man = new Man();
        $dA = new DecoratorA();
        $dB = new DecoratorB();

        $dA->setDecorator($man);
        $dB->setDecorator($dA);
        $dB->decorate();
    }
}

$use = new Uses();
$use->uses();