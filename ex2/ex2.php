<?php

$a = 10;
$b = 20;

echo("Operadores lógicos \n");

$c = $a == 10 && $b == 20; // true
$d = $a == $b || $b == 30; //false
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);


//inverter valores
$c = !($c);
$d = !($d);

var_dump($c);
var_dump($d);