<?php
/*
 * Задача 2:
 * Нека по въведен масив да се конструира нов, като половината му
 * елементи са точно като на оригиналния, а другите да са тези
 * елементи, но в обратен ред. Последно, да се изведе новия масив
 * на екрана.
 */
require_once 'Readline.php';

$someArray = [ ];

$arrayLength = 0;

do {
	$inputValue = readline ( "Enter next element of array: " );
	
	if ($inputValue !== '') {
		$someArray [] = $inputValue;
		$arrayLength ++;
	}
} while ( $inputValue !== '' );

$newArray = [ ];

// first solution

/*
 * $finalIndex = $arrayLength * 2 - 1;
 * $backwardsIndexCounter = 0;
 *
 * foreach ($someArray as $key => $value) {
 * $newArray[$key] = $value;
 * $newArray[$finalIndex - $backwardsIndexCounter++] = $value;
 * }
 */

// second solution

$newArray = $someArray;

$indexPointerForNewArray = count ( $newArray );

for($i = count ( $newArray ) - 1; $i >= 0; $i --) {
	$newArray [$indexPointerForNewArray ++] = $someArray [$i];
}

print_r ( $newArray );
/* 
for ($i = 0; $i < count($newArray); $i++) {
	echo $newArray[$i]  . ' ';
} */