<?php
include_once 'Template.php';
class ConcreateA extends Template
{
    public function __construct(){}

    public function doA()
    {
        //Implement doA() method.
        echo "concreateA do things A </br>";
    }

    public function doB()
    {
        //Implement doB() method.
        echo "concreateA do things B </br>";
    }
}