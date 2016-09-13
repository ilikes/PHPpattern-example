<?php
include_once 'Decorator.php'; 'DecoratorBase.php';

class Man extends DecoratorBase
{
    public function decorate()
    {
        //Implement decorate() method.
        echo 'a man </br>';
    }
}