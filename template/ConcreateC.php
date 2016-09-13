<?php
include_once 'Template.php';
class ConcreateC extends Template
{
    public function __construct(){}

    public function doA()
    {
        //Implement doA() method.
        echo "concreateC do things A </br>";
    }

    public function doB()
    {
        //Implement doB() method.
        echo "concreateC do things B </br>";
    }

    public function doC()
    {
        parent::doC();
        echo "concreateC do things C </br>";
    }
}