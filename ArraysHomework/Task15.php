<?php
/*
 * Да се състави програма, която въвежда в едномерен масив реални числа.
 * Като изход: програма извежда онези 3 различни числа, чиято
 * абсолютна стойност формира максималната обща сума.
 * Пример: 7.13; 6.2; 4.9; 5.1; 6.34; 1.12
 * Изход: 5.1; 6.34; 7.13
 * Условие: Да се изведат 3 числа от масива с максимална абсолютна стойност!?
 */
require_once 'Readline.php';

define ( "PHP_INT_MIN", 0 - PHP_INT_MAX );

$realNumbersArray = [ ]; // 7.13, 4.9, 5.1, 6.34, 1.12, 124

do {
	$inputValue = readline ( "Enter next element of array: " );
	
	if ($inputValue !== '') {
		$realNumbersArray [] = $inputValue;
	}
} while ( $inputValue !== '' );

$maxValues = [ 
		PHP_INT_MIN,
		PHP_INT_MIN,
		PHP_INT_MIN 
];

$realNumbersArrayLength = count ( $realNumbersArray );

// first solution

/*
 * for ($i = 0; $i < $realNumbersArrayLength; $i++) {
 * if($realNumbersArray[$i] > min($maxValues)){
 * $maxValues[array_search(min($maxValues), $maxValues)] = $realNumbersArray[$i];
 * }
 * }
 */

// second solution

for($i = 0; $i < $realNumbersArrayLength; $i ++) {
	sort ( $maxValues );
	if ($realNumbersArray [$i] > $maxValues [0]) {
		$maxValues [0] = $realNumbersArray [$i];
	}
}

print_r ( $maxValues );