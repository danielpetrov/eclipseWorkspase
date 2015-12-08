<?php

$a = array();
$a[] = 5;

array_push($a, 4);

#var_dump($a);

array_unshift($a, 3);

var_dump($a);

$last = array_pop($a);
var_dump($last, $a);

$first = array_shift($a);
var_dump($first, $a);