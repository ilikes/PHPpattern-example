<?php

abstract class Template
{
    public function templateMethod(){
        echo "beging templateMethod";
        $this->doA();
        $this->doB();
        $this->doC();
        echo "The End";
    }

    abstract function doA();
    abstract function doB();
    public function doC(){
        echo "template do things C </br>";
    }

}