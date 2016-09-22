<?php
include_once 'ConcreateA.php';
include_once 'ConcreateB.php';
include_once 'ConcreateC.php';

$a = new ConcreateA();
$b = new ConcreateB();
$c = new ConcreateC();

$a->templateMethod();
echo '<hr />';
$b->templateMethod();
echo '<hr />';
$c->templateMethod();