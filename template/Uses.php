<?php
include_once 'ConcreateA.php';
include_once 'ConcreateB.php';
include_once 'ConcreateC.php';

$A = new ConcreateA();
$b = new ConcreateB();
$c = new ConcreateC();

$a->templateMethod();
$b->templateMethod();
$c->templateMethod();