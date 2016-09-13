<?php
include_once 'Decorator.php';
class DecoratorA extends Decorator
{
    public function decorate()
    {
        parent::decorate();
        //wear hat
        echo 'wear hat </br>';
    }
}