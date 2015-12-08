<?php
/*
 * Задача 12:
 * Да се състави програма, чрез която по предварително въведени 7
 * числа в едномерен масив се разменят местата на елементи с индекси:
 * - 0 и 1 чрез трета променлива;
 * - 2 и 3 чрез събиране;
 * - 4 и 5 чрез умножение
 */
require_once 'Readline.php';

$someIntegerArray = [];

for( $i = 0; $i < 7; $i++ ) {
	$someIntegerArray[] = (int) readline("Enter next element for array");
}

$exchanger = $someIntegerArray[0];
$someIntegerArray[0] = $someIntegerArray[1];
$someIntegerArray[1] = $exchanger;

$someIntegerArray[2] = $someIntegerArray[2] + $someIntegerArray[3];
$someIntegerArray[3] = $someIntegerArray[2] - $someIntegerArray[3];
$someIntegerArray[2] = $someIntegerArray[2] - $someIntegerArray[3];

$someIntegerArray[4] = $someIntegerArray[4] * $someIntegerArray[5];
$someIntegerArray[5] = $someIntegerArray[4] / $someIntegerArray[5];
$someIntegerArray[4] = $someIntegerArray[4] / $someIntegerArray[5];

print_r($someIntegerArray);