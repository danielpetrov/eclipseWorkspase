<?php
/*
 * Задача 13:
 * Да се състави програма, чрез която се въвежда число и се представя
 * като число в двоична бройна система.
 * Програмата, чрез масив, да изчислява последователно всички цифри
 * на въведеното естествено число в 2-ична бройна система.
 * Пример: 99
 * Изход: 1100011
 */

require_once 'Readline.php';

$number = (int) readline("Enter number: " . PHP_EOL);

//echo decbin($number) . PHP_EOL; // for debug

if ($number > 0) {
	$binaryArray = [];
	
	for($i = floor ( log ( $number, 2 ) ); $i >= 0; $i --) {
		$binaryArray [$i] = $number % 2;
		$number = $number / 2;
	}
	
} else {
	$binaryArray[0] = 0;
}

for($i = 0; $i < count ( $binaryArray ); $i ++) {
	echo $binaryArray [$i];
}

//echo PHP_EOL;
//ksort($binaryArray);
//print_r($binaryArray);