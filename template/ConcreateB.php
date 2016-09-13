<?php
include_once 'Template.php';
class ConcreateB extends Template
{
    public function __construct(){}

    public function doA()
    {
        //Implement doA() method.
        echo "concreateB do things A </br>";
    }

    public function doB()
    {
        //Implement doB() method.
        echo "concreateB do things B </br>";
    }

    public function doC()
    {
        echo "concreateB do things C </br>";
    }
}