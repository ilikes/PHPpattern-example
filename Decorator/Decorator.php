<?php
include_once 'DecoratorBase.php';
abstract class Decorator extends DecoratorBase
{
    public $decorater;
    public function __construct(){}
    //设置装饰对象
    public function setDecorator($decorater){
        $this->decorater = $decorater;
    }
    public function decorate(){
        if($this->decorater instanceof DecoratorBase) {
            $this->decorater->decorate();
        }
    }

}