<?php
include_once 'Decorator.php';
class DecoratorB extends Decorator
{
    public function decorate()
    {
        parent::decorate();
        //wear clothes
        echo 'wear clothes </br>';
    }
}