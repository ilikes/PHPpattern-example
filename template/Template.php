<?php

abstract class Template
{
    public function templateMethod(){
        echo "<span style='color: #ff7a0e'>beging templateMethod</span> <br />";
        $this->doA();
        $this->doB();
        $this->doC();
        echo "<span style='color: #ff7a0e'>The End</span>";
    }

    abstract function doA();
    abstract function doB();
    public function doC(){
        echo "template do things C </br>";
    }

}