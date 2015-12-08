<?php

$array = [1, 2, 3, 4];

$array[] = 5;
$array[] = 6;

var_dump($array);

unset($array[0] , $array[2]);
$array[0] = 7;

var_dump($array);

next($array);
$firstValue = current($array);
$firstKey = key($array);


var_dump($firstValue, $firstKey);


var_dump($array);