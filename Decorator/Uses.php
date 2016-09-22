<?php

include_once './Man.php';
include_once './DecoratorA.php';
include_once './DecoratorB.php';


$man = new Man();
$dA = new DecoratorA();
$dB = new DecoratorB();

$dA->setDecorator($man);
$dB->setDecorator($dA);
$dB->decorate();

echo '<br />';
$man = new Man();
$dA = new DecoratorA();
$dB = new DecoratorB();

$dB->setDecorator($man);
$dA->setDecorator($dB);
$dA->decorate();